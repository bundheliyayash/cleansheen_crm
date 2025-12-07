<?php
require_once '../config/db.php';
require_once '../lib/helpers.php';
require_once '../lib/auth.php';
require_login();

$status = $_GET['status'] ?? '';
$employeeId = (int)($_GET['employee_id'] ?? 0);
$clientId = (int)($_GET['client_id'] ?? 0);
$from = $_GET['from'] ?? '';
$to = $_GET['to'] ?? '';

$sql = 'SELECT b.*, c.name AS client_name, e.name AS emp_name
        FROM bookings b
        JOIN clients c ON c.id = b.client_id
        LEFT JOIN employees e ON e.id = b.employee_id
        WHERE 1=1';
$params = [];

if ($status) {
    $sql .= ' AND b.status = ?';
    $params[] = $status;
}
if ($employeeId) {
    $sql .= ' AND b.employee_id = ?';
    $params[] = $employeeId;
}
if ($clientId) {
    $sql .= ' AND b.client_id = ?';
    $params[] = $clientId;
}
if ($from) {
    $sql .= ' AND b.booking_date >= ?';
    $params[] = $from;
}
if ($to) {
    $sql .= ' AND b.booking_date <= ?';
    $params[] = $to;
}

$sql .= ' ORDER BY b.booking_date DESC, b.booking_time DESC';
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

$employees = $pdo->query('SELECT id,name FROM employees ORDER BY name')->fetchAll(PDO::FETCH_ASSOC);
$clients = $pdo->query('SELECT id,name FROM clients ORDER BY name')->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head><title>Bookings</title></head>
<body>
<h2>Bookings</h2>
<p><a href="dashboard.php">Back to Dashboard</a> | <a href="booking_form.php">Create Booking</a> | <a href="booking_calendar.php">Calendar View</a></p>

<form method="get">
  Status:
  <select name="status">
    <option value="">All</option>
    <?php foreach (['pending','confirmed','completed','cancelled'] as $st): ?>
      <option value="<?php echo $st; ?>" <?php if ($status===$st) echo 'selected'; ?>><?php echo ucfirst($st); ?></option>
    <?php endforeach; ?>
  </select>
  Employee:
  <select name="employee_id">
    <option value="0">All</option>
    <?php foreach ($employees as $e): ?>
      <option value="<?php echo (int)$e['id']; ?>" <?php if ($employeeId==$e['id']) echo 'selected'; ?>><?php echo e($e['name']); ?></option>
    <?php endforeach; ?>
  </select>
  Client:
  <select name="client_id">
    <option value="0">All</option>
    <?php foreach ($clients as $c): ?>
      <option value="<?php echo (int)$c['id']; ?>" <?php if ($clientId==$c['id']) echo 'selected'; ?>><?php echo e($c['name']); ?></option>
    <?php endforeach; ?>
  </select>
  From: <input type="date" name="from" value="<?php echo e($from); ?>">
  To: <input type="date" name="to" value="<?php echo e($to); ?>">
  <button type="submit">Filter</button>
</form>

<table border="1" cellpadding="5">
  <tr>
    <th>ID</th><th>Date</th><th>Time</th><th>Client</th>
    <th>Employee</th><th>Service</th><th>Status</th><th>Actions</th>
  </tr>
  <?php foreach ($bookings as $b): ?>
  <tr>
    <td><?php echo (int)$b['id']; ?></td>
    <td><?php echo e($b['booking_date']); ?></td>
    <td><?php echo e($b['booking_time']); ?></td>
    <td><?php echo e($b['client_name']); ?></td>
    <td><?php echo e($b['emp_name'] ?? '-'); ?></td>
    <td><?php echo e($b['service_type']); ?></td>
    <td><?php echo e($b['status']); ?></td>
    <td>
      <a href="booking_form.php?id=<?php echo (int)$b['id']; ?>">Edit</a> |
      <a href="booking_status.php?id=<?php echo (int)$b['id']; ?>&status=cancelled">Cancel</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
</body>
</html>
