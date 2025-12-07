<?php
require_once '../config/db.php';
require_once '../lib/helpers.php';
require_once '../lib/auth.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    if (login_admin($pdo, $email, $password)) {
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Invalid credentials';
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>CRM Login</title></head>
<body>
<h2>Admin Login</h2>
<?php if ($error): ?><p style="color:red;"><?php echo e($error); ?></p><?php endif; ?>
<form method="post">
    <label>Email</label><br>
    <input type="email" name="email" required><br>
    <label>Password</label><br>
    <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>
</body>
</html>
