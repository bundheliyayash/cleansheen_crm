<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/db.php';

function send_booking_notification(PDO $pdo, int $bookingId, string $type = 'create'): void {
    $stmt = $pdo->prepare('SELECT b.*, c.name AS client_name, c.email AS client_email, c.phone AS client_phone
        FROM bookings b
        JOIN clients c ON c.id = b.client_id
        WHERE b.id = ?');
    $stmt->execute([$bookingId]);
    $b = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$b) return;

    $subject = ($type === 'create') ? 'Booking created' : 'Booking updated';
    $body = 'Dear '.$b['client_name'].', your cleaning booking is '.$b['status'].
            ' on '.$b['booking_date'].' at '.$b['booking_time'].' for '.$b['service_type'].'.';

    if (!empty($b['client_email'])) {
        send_email($b['client_email'], $subject, nl2br($body));
    }
    if (!empty($b['client_phone'])) {
        send_whatsapp($b['client_phone'], $body);
    }
}

function send_email(string $to, string $subject, string $htmlBody): void {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'your-smtp-host';
        $mail->SMTPAuth = true;
        $mail->Username = 'your-smtp-user';
        $mail->Password = 'your-smtp-pass';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('no-reply@yourdomain.com', 'Cleaning CRM');
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $htmlBody;
        $mail->AltBody = strip_tags($htmlBody);

        $mail->send();
    } catch (Exception $e) {
        // log error
    }
}

function send_whatsapp(string $phone, string $message): void {
    $accountSid = 'your_twilio_sid';
    $authToken = 'your_twilio_auth_token';
    $fromNumber = 'whatsapp:+14155238886';  // Twilio sandbox number
    $toNumber = 'whatsapp:' . $phone;

    $url = "https://api.twilio.com/2010-04-01/Accounts/$accountSid/Messages.json";

    $data = [
        'From' => $fromNumber,
        'To' => $toNumber,
        'Body' => $message
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_USERPWD, $accountSid . ':' . $authToken);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);
}
