<?php
session_start();

function require_login() {
    if (empty($_SESSION['admin_id'])) {
        header('Location: index.php');
        exit;
    }
}

function login_admin(PDO $pdo, string $email, string $password): bool {
    $stmt = $pdo->prepare('SELECT * FROM admins WHERE email = ? LIMIT 1');
    $stmt->execute([$email]);
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($admin && password_verify($password, $admin['password_hash'])) {
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_name'] = $admin['name'];
        $pdo->prepare('UPDATE admins SET last_login_at = NOW() WHERE id = ?')
            ->execute([$admin['id']]);
        log_activity($pdo, $admin['id'], 'login', 'login', $admin['id'], 'Admin logged in');
        return true;
    }
    return false;
}

function current_admin_id(): ?int {
    return $_SESSION['admin_id'] ?? null;
}
