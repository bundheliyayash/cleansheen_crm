<?php
require_once '../config/db.php';
require_once '../lib/helpers.php';
require_once '../lib/auth.php';
require_login();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$client = [
  'name' => '',
  'phone' => '',
  'email' => '',
  'address' => '',
  'notes' => ''
];

if ($id) {
    $stmt = $pdo->prepare('SELECT * FROM clients WHERE id = ?');
    $stmt->execute([$id]);
    $client = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$client) {
        die('Client not found');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email'] ?? '');
    $address = trim($_POST['address'] ?? '');
    $notes = trim($_POST['notes'] ?? '');

    if ($id) {
        $stmt = $pdo->prepare('UPDATE clients SET name=?, phone=?, email=?, address=?, notes=? WHERE id=?');
        $stmt->execute([$name, $phone, $email, $address, $notes, $id]);
        log_activity($pdo, current_admin_id(), 'update', 'client', $id, 'Updated client');
    } else {
        $stmt = $pdo->prepare('INSERT INTO clients (name,phone,email,address,notes) VALUES (?,?,?,?,?)');
        $stmt->execute([$name, $phone, $email, $address, $notes]);
        $newId = (int)$pdo->lastInsertId();
        log_activity($pdo, current_admin_id(), 'create', 'client', $newId, 'Created client');
    }
    header('Location: clients.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title><?php echo $id ? 'Edit' : 'Add'; ?> Client</title></head>
<body>
<h2><?php echo $id ? 'Edit' : 'Add'; ?> Client</h2>
<form method="post">
  <label>Name</label><br>
  <input type="text" name="name" required value="<?php echo e($client['name']); ?>"><br>
  <label>Phone</label><br>
  <input type="text" name="phone" required value="<?php echo e($client['phone']); ?>"><br>
  <label>Email</label><br>
  <input type="email" name="email" value="<?php echo e($client['email']); ?>"><br>
  <label>Address</label><br>
  <textarea name="address"><?php echo e($client['address']); ?></textarea><br>
  <label>Notes</label><br>
  <textarea name="notes"><?php echo e($client['notes']); ?></textarea><br>
  <button type="submit">Save</button>
</form>
</body>
</html>
