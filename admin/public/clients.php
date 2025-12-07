<?php
require_once '../config/db.php';
require_once '../lib/helpers.php';
require_once '../lib/auth.php';
require_login();

$search = trim($_GET['q'] ?? '');
if ($search) {
    $stmt = $pdo->prepare('SELECT * FROM clients WHERE name LIKE ? OR phone LIKE ? ORDER BY created_at DESC');
    $like = "%$search%";
    $stmt->execute([$like, $like]);
} else {
    $stmt = $pdo->query('SELECT * FROM clients ORDER BY created_at DESC');
}
$clients = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head><title>Clients</title></head>
<body>
<h2>Clients</h2>
<p><a href="dashboard.php">Back to Dashboard</a></p>
<form method="get">
  <input type="text" name="q" placeholder="Search name/phone" value="<?php echo e($search); ?>">
  <button type="submit">Search</button>
</form>
<p><a href="client_form.php">Add Client</a></p>
<table border="1" cellpadding="5">
  <tr><th>Name</th><th>Phone</th><th>Email</th><th>Actions</th></tr>
  <?php foreach ($clients as $c): ?>
  <tr>
    <td><?php echo e($c['name']); ?></td>
    <td><?php echo e($c['phone']); ?></td>
    <td><?php echo e($c['email']); ?></td>
    <td>
      <a href="client_form.php?id=<?php echo (int)$c['id']; ?>">Edit</a> |
      <a href="client_bookings.php?id=<?php echo (int)$c['id']; ?>">Bookings</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
</body>
</html>
