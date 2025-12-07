<?php
require_once '../config/db.php';
require_once '../lib/helpers.php';
require_once '../lib/auth.php';
require_once '../lib/export.php';
require_login();

if (isset($_GET['export']) && $_GET['export'] === 'csv') {
    export_bookings_csv($pdo, $_GET);
}

$status = $_GET['status'] ?? '';
$from = $_GET['from'] ?? '';
$to = $_GET['to'] ?? '';

/* quick stats */
$stmt = $pdo->prepare("SELECT status, COUNT(*) AS cnt FROM bookings WHERE booking_date BETWEEN ? AND ? GROUP BY status");
$stmt->execute([$from ?: '1970-01-01', $to ?: '2999-12-31']);
$stats = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
?>
<!DOCTYPE html>
<html>
<head><title>Reports</title></head>
<body>
<h2>Reports</h2>
<p><a href="dashboard.php">Back to Dashboard</a></p>

<form method="get">
  From: <input type="date" name="from" value="<?php echo e($from); ?>">
  To: <input type="date" name="to" value="<?php echo e($to); ?>">
  Status:
  <select name="status">
    <option value="">All</option>
    <?php foreach (['pending','confirmed','completed','cancelled'] as $st): ?>
      <option value="<?php echo $st; ?>" <?php if ($status===$st) echo 'selected'; ?>><?php echo ucfirst($st); ?></option>
    <?php endforeach; ?>
  </select>
  <button type="submit">Apply</button>
</form>

<h3>Quick Stats</h3>
<ul>
  <li>Pending: <?php echo (int)($stats['pending'] ?? 0); ?></li>
  <li>Confirmed: <?php echo (int)($stats['confirmed'] ?? 0); ?></li>
  <li>Completed: <?php echo (int)($stats['completed'] ?? 0); ?></li>
  <li>Cancelled: <?php echo (int)($stats['cancelled'] ?? 0); ?></li>
</ul>

<p>
  <a href="?<?php echo http_build_query(array_merge($_GET,['export'=>'csv'])); ?>">Export Excel (CSV)</a>
  <!-- Add another link for PDF export using your PDF generation function. -->
</p>
</body>
</html>
