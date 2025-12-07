<?php
require_once '../config/db.php';
require_once '../lib/auth.php';
require_once '../lib/helpers.php';
require_login();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$employee = ['name'=>'','phone'=>'','skill'=>'','status'=>'available'];

if ($id) {
    $stmt = $pdo->prepare('SELECT * FROM employees WHERE id = ?');
    $stmt->execute([$id]);
    $employee = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$employee) {
        die('Employee not found');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $skill = trim($_POST['skill']);
    $status = $_POST['status'];

    if ($id) {
        $stmt = $pdo->prepare('UPDATE employees SET name=?, phone=?, skill=?, status=? WHERE id=?');
        $stmt->execute([$name, $phone, $skill, $status, $id]);
        log_activity($pdo, current_admin_id(), 'update', 'employee', $id, 'Updated employee');
    } else {
        $stmt = $pdo->prepare('INSERT INTO employees (name, phone, skill, status) VALUES (?,?,?,?)');
        $stmt->execute([$name, $phone, $skill, $status]);
        $newId = (int)$pdo->lastInsertId();
        log_activity($pdo, current_admin_id(), 'create', 'employee', $newId, 'Created employee');
    }
    header('Location: employees.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title><?php echo $id ? 'Edit' : 'Add'; ?> Employee</title></head>
<body>
<h2><?php echo $id ? 'Edit' : 'Add'; ?> Employee</h2>
<form method="post">
  <label>Name</label><br>
  <input type="text" name="name" required value="<?php echo htmlspecialchars($employee['name']); ?>"><br>
  <label>Phone</label><br>
  <input type="text" name="phone" required value="<?php echo htmlspecialchars($employee['phone']); ?>"><br>
  <label>Skill</label><br>
  <input type="text" name="skill" value="<?php echo htmlspecialchars($employee['skill']); ?>"><br>
  <label>Status</label><br>
  <select name="status">
    <?php
    $statuses = ['available','busy','inactive'];
    foreach ($statuses as $st) {
        $sel = ($employee['status'] === $st) ? 'selected' : '';
        echo "<option value=\"$st\" $sel>" . ucfirst($st) . "</option>";
    }
    ?>
  </select><br><br>
  <button type="submit">Save</button>
</form>
</body>
</html>
