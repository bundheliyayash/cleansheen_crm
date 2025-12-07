<?php
require_once '../config/db.php';
require_once '../lib/auth.php';
require_once '../lib/helpers.php';
require_login();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$status = $_GET['status'] ?? '';

if (!$id || !in_array($status, ['pending','confirmed','completed','cancelled'])) {
    die('Invalid request');
}

$stmt = $pdo->prepare('UPDATE bookings SET status = ?, admin_id = ? WHERE id = ?');
$stmt->execute([$status, current_admin_id(), $id]);

log_activity($pdo, current_admin_id(), 'update', 'booking', $id, 'Changed status to '.$status);

header('Location: bookings.php');
exit;
