<?php
require_once '../config/db.php';
require_once '../lib/helpers.php';
require_once '../lib/auth.php';
require_once '../lib/notification.php';
require_login();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$booking = [
  'client_id' => '',
  'employee_id' => '',
  'service_type' => '',
  'booking_date' => '',
  'booking_time' => '',
  'status' => 'pending',
  'notes' => ''
];

if ($id) {
    $stmt = $pdo->prepare('SELECT * FROM bookings WHERE id = ?');
    $stmt->execute([$id]);
    $booking = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$booking) {
        die('Booking not found');
    }
}

$clients = $pdo->query('SELECT id,name FROM clients ORDER BY name')->fetchAll(PDO::FETCH_ASSOC);
$employees = $pdo->query("SELECT id,name FROM employees WHERE status != 'inactive' ORDER BY name")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $clientId = (int)$_POST['client_id'];
    $employeeId = (int)($_POST['employee_id'] ?? 0);
    $serviceType = trim($_POST['service_type']);
    $date = $_POST['booking_date'];
    $time = $_POST['booking_time'];
    $status = $_POST['status'];
    $notes = trim($_POST['notes'] ?? '');

    if ($id) {
        $stmt = $pdo->prepare('UPDATE bookings SET client_id=?, employee_id=?, service_type=?, booking_date=?, booking_time=?, status=?, notes=?, admin_id=? WHERE id=?');
        $stmt->execute([
            $clientId,
            $employeeId ?: null,
            $serviceType,
            $date,
            $time,
            $status,
            $notes,
            current_admin_id(),
            $id
        ]);
        log_activity($pdo, current_admin_id(), 'update', 'booking', $id, 'Updated booking');
        send_booking_notification($pdo, $id, 'update');
    } else {
        $stmt = $pdo->prepare('INSERT INTO bookings (client_id,employee_id,service_type,booking_date,booking_time,status,notes,admin_id) VALUES (?,?,?,?,?,?,?,?)');
        $stmt->execute([
            $clientId,
            $employeeId ?: null,
            $serviceType,
            $date,
            $time,
            $status,
            $notes,
            current_admin_id()
        ]);
        $newId = (int)$pdo->lastInsertId();
        log_activity($pdo, current_admin_id(), 'create', 'booking', $newId, 'Created booking');
        send_booking_notification($pdo, $newId, 'create');
    }
    header('Location: bookings.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title><?php echo $id ? 'Edit' : 'Create'; ?> Booking</title></head>
<body>
<h2><?php echo $id ? 'Edit' : 'Create'; ?> Booking</h2>
<form method="post">
  <label>Client</label><br>
  <select name="client_id" required>
    <option value="">Select client</option>
    <?php foreach ($clients as $c): ?>
      <option value="<?php echo (int)$c['id']; ?>" <?php if ($booking['client_id']==$c['id']) echo 'selected'; ?>>
        <?php echo e($c['name']); ?>
      </option>
    <?php endforeach; ?>
  </select><br>

  <label>Employee</label><br>
  <select name="employee_id">
    <option value="">Unassigned</option>
    <?php foreach ($employees as $e): ?>
      <option value="<?php echo (int)$e['id']; ?>" <?php if ($booking['employee_id']==$e['id']) echo 'selected'; ?>>
        <?php echo e($e['name']); ?>
      </option>
    <?php endforeach; ?>
  </select><br>

  <label>Service type</label><br>
  <input type="text" name="service_type" required value="<?php echo e($booking['service_type']); ?>"><br>

  <label>Date</label><br>
  <input type="date" name="booking_date" required value="<?php echo e($booking['booking_date']); ?>"><br>

  <label>Time</label><br>
  <input type="time" name="booking_time" required value="<?php echo e($booking['booking_time']); ?>"><br>

  <label>Status</label><br>
  <select name="status">
    <?php foreach (['pending','confirmed','completed','cancelled'] as $st): ?>
      <option value="<?php echo $st; ?>" <?php if ($booking['status']===$st) echo 'selected'; ?>>
        <?php echo ucfirst($st); ?>
      </option>
    <?php endforeach; ?>
  </select><br>

  <label>Notes</label><br>
  <textarea name="notes"><?php echo e($booking['notes']); ?></textarea><br>

  <button type="submit">Save</button>
</form>
</body>
</html>
