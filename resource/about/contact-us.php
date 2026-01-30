<?php
include '../../config.php';

$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    function clean($data)
    {
        return str_replace(["\n", "\r"], '', trim($data));
    }

    $row = [
        date('Y-m-d H:i:s'),
        clean($_POST['first_name'] ?? ''),
        clean($_POST['last_name'] ?? ''),
        clean($_POST['email'] ?? ''),
        clean($_POST['phone'] ?? ''),
        clean($_POST['service_type'] ?? ''),
        clean($_POST['service_date'] ?? ''),
        clean($_POST['address1'] ?? '') . ' ' . clean($_POST['address2'] ?? ''),
        clean($_POST['city'] ?? ''),
        clean($_POST['postcode'] ?? ''),
        clean($_POST['instructions'] ?? ''),
        $_SERVER['REMOTE_ADDR']
    ];

    $file = __DIR__ . '/../../data/contact_leads.csv';

    if ($fp = fopen($file, 'a')) {
        fputcsv($fp, $row);
        fclose($fp);
        $success = "Thank you! Your details have been submitted.";
    } else {
        $error = "Unable to save data. Please try again.";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- SEO & Metadata -->
    <?php include_once '../seo_meta.php'; ?>

    <title><?php echo $seo_title; ?></title>

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
                <h1>Contact Us</h1>
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
                            <p>301, Oberon Business Hub, Next to Lemon Grass Restaurant, Gaurav Path Road, Pal, Adajan, Surat-394510</p>
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
                            <p>Monday - Saturday: 9:00 AM - 7:00 PM<br>
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