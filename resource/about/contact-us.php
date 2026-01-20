<?php
include '../../config.php';

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// // ------------------ DB CONFIG ------------------
// $host = "localhost:3307";
// $db   = "cleansheen_crm";
// $user = "root";
// $pass = "";

// $conn = new mysqli($host, $user, $pass, $db);
// if ($conn->connect_error) {
//     die("DB Connection failed");
// }

// // ------------------ FORM SUBMIT ------------------
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//     $first_name   = $_POST['first_name'];
//     $last_name    = $_POST['last_name'];
//     $email        = $_POST['email'];
//     $phone        = $_POST['phone'];
//     $service_date = $_POST['service_date'];
//     $postcode     = $_POST['postcode'];
//     $address1     = $_POST['address1'];
//     $address2     = $_POST['address2'];
//     $city         = $_POST['city'];
//     $instructions = $_POST['instructions'];

//     // -------- SAVE TO DB --------
//     $stmt = $conn->prepare("
//         INSERT INTO contact_enquiries 
//         (first_name, last_name, email, phone, service_date, postcode, address1, address2, city, instructions)
//         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
//     ");
//     $stmt->bind_param(
//         "ssssssssss",
//         $first_name,
//         $last_name,
//         $email,
//         $phone,
//         $service_date,
//         $postcode,
//         $address1,
//         $address2,
//         $city,
//         $instructions
//     );
//     $stmt->execute();

//     // -------- SEND EMAIL (SMTP) --------
//     require 'PHPMailer/PHPMailer.php';
//     require 'PHPMailer/SMTP.php';
//     require 'PHPMailer/Exception.php';

//     $mail = new PHPMailer(true);
//     try {
//         $mail->isSMTP();
//         $mail->Host       = 'mail.cleansheen.in';
//         $mail->SMTPAuth   = true;
//         $mail->Username   = 'noreply@cleansheen.in';
//         $mail->Password   = 'EMAIL_PASSWORD_HERE';
//         $mail->SMTPSecure = 'tls';
//         $mail->Port       = 587;

//         $mail->setFrom('noreply@cleansheen.in', 'Cleansheen');
//         $mail->addAddress('support@cleansheen.in');
//         $mail->addReplyTo($email, $first_name);

//         $mail->isHTML(true);
//         $mail->Subject = 'New Contact Enquiry';
//         $mail->Body    = "
//             <h3>New Contact Request</h3>
//             <p><b>Name:</b> $first_name $last_name</p>
//             <p><b>Email:</b> $email</p>
//             <p><b>Phone:</b> $phone</p>
//             <p><b>Service Date:</b> $service_date</p>
//             <p><b>Address:</b> $address1, $address2, $city - $postcode</p>
//             <p><b>Instructions:</b><br>$instructions</p>
//         ";

//         $mail->send();
//         $success = "Thank you! Your enquiry has been sent.";
//     } catch (Exception $e) {
//         $error = "Mail could not be sent.";
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cleansheen - Cleaning Services</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo BASE_URL; ?>includes/image/favicon.ico.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Icons + CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/style.css" />
    <style>

    </style>
</head>

<body>

    <?php include ROOT_PATH . 'resource/header.php'; ?>

    <section class="services-section">
        <div class="services-container">
            <div class="section-header">
                <h2>Contact Us</h2>
                <p>Get in touch with Clean Sheen for professional cleaning services. We're here to answer your questions and provide the best cleaning solutions.</p>
            </div>
            <div class="contact-container">
                <!-- Contact Information -->
                <div class="contact-info">
                    <h2>Get In Touch</h2>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h3>Our Location</h3>
                            <p>Building No 301, Oberon Business Hub, Behind Monarch, Pal, Gaurav Path Road, Adajan Dn, Surat-395009, Gujarat</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h3>Phone Number</h3>
                            <p>+91 1800-890-3513<br>
                                +91 63535 11959</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h3>Email Address</h3>
                            <p>cleansheencleaning@gmail.com<br>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-content">
                            <h3>Working Hours</h3>
                            <p>Monday - Sunday: 9:00 AM - 7:00 PM<br>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form">
                    <h2>Send Us a Message</h2>

                    <?php
                    // Display success/error messages
                    if (!empty($success)): ?>
                        <div class="form-message success-message">
                            <i class="fas fa-check-circle"></i> <?php echo $success; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($error)): ?>
                        <div class="form-message error-message">
                            <i class="fas fa-exclamation-circle"></i> <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="">
                        <!-- Personal Information -->
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">First Name <span class="required">*</span></label>
                                <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" required>
                            </div>

                            <div class="form-group">
                                <label for="last_name">Last Name <span class="required">*</span></label>
                                <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address <span class="required">*</span></label>
                                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number <span class="required">*</span></label>
                                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                            </div>
                        </div>

                        <!-- Service Details -->
                        <div class="form-group">
                            <label for="service_type">Service Type <span class="required">*</span></label>
                            <select id="service_type" name="service_type" required>
                                <option value="">Select a service</option>
                                <option value="domestic">Domestic Cleaning</option>
                                <option value="commercial">Commercial Cleaning</option>
                                <option value="end_of_tenancy">End of Tenancy Cleaning</option>
                                <option value="deep_cleaning">Deep Cleaning</option>
                                <option value="carpet_cleaning">Carpet Cleaning</option>
                                <option value="other">Other Service</option>
                            </select>
                        </div>

                        <!-- Service Date -->
                        <div class="form-group">
                            <label for="service_date">Preferred Service Date <span class="required">*</span></label>
                            <input type="date" id="service_date" name="service_date" required>
                        </div>

                        <!-- Address Information -->
                        <div class="form-group">
                            <label for="address1">Address Line 1 <span class="required">*</span></label>
                            <input type="text" id="address1" name="address1" placeholder="Street address, P.O. box, company name" required>
                        </div>

                        <div class="form-group">
                            <label for="address2">Address Line 2 (Optional)</label>
                            <input type="text" id="address2" name="address2" placeholder="Apartment, suite, unit, building, floor, etc.">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="city">City <span class="required">*</span></label>
                                <input type="text" id="city" name="city" placeholder="Enter your city" required>
                            </div>

                            <div class="form-group">
                                <label for="postcode">Postcode <span class="required">*</span></label>
                                <input type="text" id="postcode" name="postcode" placeholder="Enter your postcode" required>
                            </div>
                        </div>

                        <!-- Additional Information -->
                        <div class="form-group">
                            <label for="instructions">Additional Instructions / Message</label>
                            <textarea id="instructions" name="instructions" placeholder="Please provide any additional details about your cleaning requirements, preferred time, or special instructions..."></textarea>
                        </div>

                        <!-- How did you hear about us? -->
                        <div class="form-group">
                            <label for="hear_about">How did you hear about us?</label>
                            <select id="hear_about" name="hear_about">
                                <option value="">Select an option</option>
                                <option value="google">Google Search</option>
                                <option value="social_media">Social Media</option>
                                <option value="friend">Friend/Family Recommendation</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <button type="submit" class="submit-btn">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>