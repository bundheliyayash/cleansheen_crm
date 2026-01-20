<?php
include '../config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// ------------------ DB CONFIG ------------------
$host = "localhost:3307";
$db   = "cleansheen_crm";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("DB Connection failed");
}

// ------------------ FORM SUBMIT ------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $first_name   = $_POST['first_name'];
    $last_name    = $_POST['last_name'];
    $email        = $_POST['email'];
    $phone        = $_POST['phone'];
    $service_date = $_POST['service_date'];
    $postcode     = $_POST['postcode'];
    $address1     = $_POST['address1'];
    $address2     = $_POST['address2'];
    $city         = $_POST['city'];
    $instructions = $_POST['instructions'];

    // -------- SAVE TO DB --------
    $stmt = $conn->prepare("
        INSERT INTO contact_enquiries 
        (first_name, last_name, email, phone, service_date, postcode, address1, address2, city, instructions)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ");
    $stmt->bind_param(
        "ssssssssss",
        $first_name,
        $last_name,
        $email,
        $phone,
        $service_date,
        $postcode,
        $address1,
        $address2,
        $city,
        $instructions
    );
    $stmt->execute();

    // -------- SEND EMAIL (SMTP) --------
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/Exception.php';

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'mail.cleansheen.in';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'noreply@cleansheen.in';
        $mail->Password   = 'EMAIL_PASSWORD_HERE';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('noreply@cleansheen.in', 'Cleansheen');
        $mail->addAddress('support@cleansheen.in');
        $mail->addReplyTo($email, $first_name);

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Enquiry';
        $mail->Body    = "
            <h3>New Contact Request</h3>
            <p><b>Name:</b> $first_name $last_name</p>
            <p><b>Email:</b> $email</p>
            <p><b>Phone:</b> $phone</p>
            <p><b>Service Date:</b> $service_date</p>
            <p><b>Address:</b> $address1, $address2, $city - $postcode</p>
            <p><b>Instructions:</b><br>$instructions</p>
        ";

        $mail->send();
        $success = "Thank you! Your enquiry has been sent.";
    } catch (Exception $e) {
        $error = "Mail could not be sent.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <style>
    input,
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
    }

    button {
        padding: 10px 20px;
    }
    </style>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/style.css" />

</head>

<body>
    <?php include ROOT_PATH . 'resource/header.php'; ?>
    <h2>Contact Us</h2>

    <?php if (!empty($success)) echo "<p style='color:green'>$success</p>"; ?>
    <?php if (!empty($error)) echo "<p style='color:red'>$error</p>"; ?>

    <form method="POST">
        <input type="text" name="first_name" placeholder="First Name*" required>
        <input type="text" name="last_name" placeholder="Last Name*" required>
        <input type="email" name="email" placeholder="Email*" required>
        <input type="text" name="phone" placeholder="Phone*" required>

        <!-- Calendar Date Picker -->
        <input type="date" name="service_date" required>

        <input type="text" name="postcode" placeholder="Postcode*" required>
        <input type="text" name="address1" placeholder="Address Line 1*" required>
        <input type="text" name="address2" placeholder="Address Line 2 (Optional)">
        <input type="text" name="city" placeholder="City / Town*" required>

        <textarea name="instructions" placeholder="Instructions"></textarea>

        <button type="submit">Submit</button>
    </form>
    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>