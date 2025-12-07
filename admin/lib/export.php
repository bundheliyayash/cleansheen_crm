<?php
function export_bookings_csv(PDO $pdo, array $filters): void {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="bookings.csv"');

    $out = fopen('php://output', 'w');
    fputcsv($out, ['ID','Date','Time','Client','Employee','Service','Status']);

    $sql = 'SELECT b.*, c.name AS client_name, e.name AS emp_name
            FROM bookings b
            JOIN clients c ON c.id = b.client_id
            LEFT JOIN employees e ON e.id = b.employee_id
            WHERE 1=1';
    $params = [];

    if (!empty($filters['status'])) {
        $sql .= ' AND b.status = ?';
        $params[] = $filters['status'];
    }
    if (!empty($filters['from'])) {
        $sql .= ' AND b.booking_date >= ?';
        $params[] = $filters['from'];
    }
    if (!empty($filters['to'])) {
        $sql .= ' AND b.booking_date <= ?';
        $params[] = $filters['to'];
    }
    if (!empty($filters['employee_id'])) {
        $sql .= ' AND b.employee_id = ?';
        $params[] = (int)$filters['employee_id'];
    }
    if (!empty($filters['client_id'])) {
        $sql .= ' AND b.client_id = ?';
        $params[] = (int)$filters['client_id'];
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        fputcsv($out, [
            $row['id'],
            $row['booking_date'],
            $row['booking_time'],
            $row['client_name'],
            $row['emp_name'],
            $row['service_type'],
            $row['status']
        ]);
    }
    fclose($out);
    exit;
}
