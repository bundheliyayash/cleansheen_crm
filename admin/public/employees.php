<?php
require_once '../config/db.php';
require_once '../lib/auth.php';
require_once '../lib/helpers.php';
require_login();

$search = trim($_GET['q'] ?? '');
if ($search) {
    $stmt = $pdo->prepare('SELECT * FROM employees WHERE name LIKE ? OR phone LIKE ? ORDER BY created_at DESC');
    $like = "%$search%";
    $stmt->execute([$like, $like]);
} else {
    $stmt = $pdo->query('SELECT * FROM employees ORDER BY created_at DESC');
}
$employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head><title>Employees</title></head>
<body>
<h2>Employees</h2>
<p><a href="dashboard.php">Back to Dashboard</a></p>
<form method="get">
  <input type="text" name="q" placeholder="Search name/phone" value="<?php echo htmlspecialchars($search); ?>">
  <button type="submit">Search</button>
</form>
<p><a href="employee_form.php">Add Employee</a></p>
<table border="1" cellpadding="5">
  <tr><th>Name</th><th>Phone</th><th>Skill</th><th>Status</th><th>Actions</th></tr>
  <?php foreach ($employees as $e): ?>
  <tr>
    <td><?php echo htmlspecialchars($e['name']); ?></td>
    <td><?php echo htmlspecialchars($e['phone']); ?></td>
    <td><?php echo htmlspecialchars($e['skill']); ?></td>
    <td><?php echo htmlspecialchars($e['status']); ?></td>
    <td>
      <a href="employee_form.php?id=<?php echo (int)$e['id']; ?>">Edit</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
</body>
</html>
