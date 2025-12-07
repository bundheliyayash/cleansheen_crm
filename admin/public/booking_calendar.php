<?php
require_once '../config/db.php';
require_once '../lib/auth.php';
require_login();

$year = isset($_GET['year']) ? (int)$_GET['year'] : date('Y');
$month = isset($_GET['month']) ? (int)$_GET['month'] : date('m');

$startDate = "$year-$month-01";
$endDate = date('Y-m-t', strtotime($startDate));

$stmt = $pdo->prepare('SELECT b.*, c.name AS client_name, e.name AS emp_name FROM bookings b
    JOIN clients c ON b.client_id = c.id
    LEFT JOIN employees e ON b.employee_id = e.id
    WHERE booking_date BETWEEN ? AND ?
    ORDER BY booking_date, booking_time');
$stmt->execute([$startDate, $endDate]);

$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

$bookingsByDate = [];
foreach ($bookings as $b) {
    $bookingsByDate[$b['booking_date']][] = $b;
}

function prevMonth($year, $month) {
    $month--;
    if ($month < 1) {
        $month = 12;
        $year--;
    }
    return [$year, $month];
}
function nextMonth($year, $month) {
    $month++;
    if ($month > 12) {
        $month = 1;
        $year++;
    }
    return [$year, $month];
}

list($pYear, $pMonth) = prevMonth($year, $month);
list($nYear, $nMonth) = nextMonth($year, $month);

?>
<!DOCTYPE html>
<html>
<head><title>Booking Calendar</title></head>
<body>
<h2>Booking Calendar for <?php echo date('F Y', strtotime($startDate)); ?></h2>
<p>
  <a href="dashboard.php">Dashboard</a> |
  <a href="booking_calendar.php?year=<?php echo $pYear; ?>&month=<?php echo $pMonth; ?>">Previous</a> |
  <a href="booking_calendar.php?year=<?php echo $nYear; ?>&month=<?php echo $nMonth; ?>">Next</a>
</p>

<?php
$daysInMonth = date('t', strtotime($startDate));
for ($d = 1; $d <= $daysInMonth; $d++) {
    $date = sprintf('%04d-%02d-%02d', $year, $month, $d);
    echo "<h3>$date</h3>";
    if (!empty($bookingsByDate[$date])) {
        echo '<ul>';
        foreach ($bookingsByDate[$date] as $b) {
            echo '<li>' . htmlspecialchars($b['booking_time']) . ' - ' .
                htmlspecialchars($b['client_name']) . ' (' .
                htmlspecialchars($b['service_type']) . ') - ' .
                'Status: ' . htmlspecialchars($b['status']) . '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p>No bookings</p>';
    }
}
?>
</body>
</html>
