<?php
require_once '../config/db.php';
require_once '../lib/helpers.php';
require_once '../lib/auth.php';
require_login();

$adminId = current_admin_id();

/* overall stats */
$totalBookings = $pdo->query('SELECT COUNT(*) FROM bookings')->fetchColumn();
$todayBookings = $pdo->prepare('SELECT COUNT(*) FROM bookings WHERE booking_date = CURDATE()');
$todayBookings->execute();
$todayBookings = $todayBookings->fetchColumn();
$completedBookings = $pdo->query("SELECT COUNT(*) FROM bookings WHERE status = 'completed'")->fetchColumn();
$cancelledBookings = $pdo->query("SELECT COUNT(*) FROM bookings WHERE status = 'cancelled'")->fetchColumn();

/* admin-specific stats */
$stmt = $pdo->prepare('SELECT COUNT(*) FROM bookings WHERE admin_id = ?');
$stmt->execute([$adminId]);
$myBookings = $stmt->fetchColumn();

$stmt = $pdo->prepare("SELECT COUNT(*) FROM bookings WHERE admin_id = ? AND status = 'completed'");
$stmt->execute([$adminId]);
$myCompleted = $stmt->fetchColumn();

/* recent activity logs */
$stmt = $pdo->prepare('SELECT al.*, a.name AS admin_name
    FROM activity_logs al
    JOIN admins a ON a.id = al.admin_id
    ORDER BY al.created_at DESC
    LIMIT 20');
$stmt->execute();
$logs = $stmt->fetchAll(PDO::FETCH_ASSOC);

/* upcoming bookings for calendar/list preview */
$stmt = $pdo->prepare('SELECT b.*, c.name AS client_name, e.name AS emp_name
    FROM bookings b
    JOIN clients c ON c.id = b.client_id
    LEFT JOIN employees e ON e.id = b.employee_id
    WHERE b.booking_date >= CURDATE()
    ORDER BY b.booking_date, b.booking_time
    LIMIT 20');
$stmt->execute();
$upcoming = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head><title>Admin Dashboard</title></head>
<body>
<h2>Dashboard</h2>
<p>Welcome, <?php echo e($_SESSION['admin_name']); ?> | <a href="logout.php">Logout</a></p>

<h3>Overall Stats</h3>
<ul>
  <li>Total bookings: <?php echo (int)$totalBookings; ?></li>
  <li>Today’s bookings: <?php echo (int)$todayBookings; ?></li>
  <li>Completed bookings: <?php echo (int)$completedBookings; ?></li>
  <li>Cancelled bookings: <?php echo (int)$cancelledBookings; ?></li>
</ul>

<h3>Your Performance</h3>
<ul>
  <li>Your total bookings: <?php echo (int)$myBookings; ?></li>
  <li>Your completed bookings: <?php echo (int)$myCompleted; ?></li>
</ul>

<h3>Upcoming Bookings (List View)</h3>
<table border="1" cellpadding="5">
  <tr>
    <th>Date</th><th>Time</th><th>Client</th><th>Employee</th><th>Service</th><th>Status</th>
  </tr>
  <?php foreach ($upcoming as $b): ?>
  <tr>
    <td><?php echo e($b['booking_date']); ?></td>
    <td><?php echo e($b['booking_time']); ?></td>
    <td><?php echo e($b['client_name']); ?></td>
    <td><?php echo e($b['emp_name'] ?? '-'); ?></td>
    <td><?php echo e($b['service_type']); ?></td>
    <td><?php echo e($b['status']); ?></td>
  </tr>
  <?php endforeach; ?>
</table>

<h3>Recent Activity</h3>
<ul>
<?php foreach ($logs as $log): ?>
  <li><?php echo e($log['created_at'].' - '.$log['admin_name'].' - '.$log['action'].' '.$log['entity_type'].' #'.$log['entity_id']); ?></li>
<?php endforeach; ?>
</ul>

<p><a href="booking_calendar.php">Calendar View</a> | 
   <a href="bookings.php">Manage Bookings</a> | 
   <a href="clients.php">Clients</a> | 
   <a href="employees.php">Employees</a> | 
   <a href="reports.php">Reports</a>
</p>
</body>
</html>
