<?php
function log_activity(PDO $pdo, int $adminId, string $action, string $entityType, ?int $entityId, string $description): void {
    $stmt = $pdo->prepare('INSERT INTO activity_logs (admin_id, action, entity_type, entity_id, description) VALUES (?,?,?,?,?)');
    $stmt->execute([$adminId, $action, $entityType, $entityId, $description]);
}

function e(string $str): string {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
