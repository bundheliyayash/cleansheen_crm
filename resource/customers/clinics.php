<?php include '../../config.php'; ?>

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
</head>

<body>

    <?php include ROOT_PATH . 'resource/header.php'; ?>

    <!-- ================= CLINIC CLEANING SERVICES ================= -->

    <section class="sector-section">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="<?php echo BASE_URL . 'includes/image/clinic-cleaning.jpg' ?>"
                    alt="Clinic and medical practice cleaning services">
            </div>
            <div class="sector-text">
                <h2>Clinic &amp; Medical Practice Cleaning Services</h2>
                <p>
                    Clinics and medical practices require a clean, hygienic, and
                    organised environment to ensure patient safety and professional
                    presentation. Regular cleaning helps reduce infection risks and
                    maintains trust among patients.
                </p>
                <p>
                    Our clinic cleaning services are designed to support daily
                    operations while following basic healthcare hygiene protocols
                    without disrupting consultation schedules.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Patient Areas &amp; Consultation Room Cleaning</h2>
                <p>
                    High-touch patient areas require frequent and careful cleaning
                    to maintain hygiene and comfort.
                </p>
                <ul>
                    <li>Consultation rooms and examination areas</li>
                    <li>Waiting areas, reception desks, and seating</li>
                    <li>Patient washrooms and hand hygiene zones</li>
                    <li>Corridors, staircases, and common pathways</li>
                    <li>Frequently touched surfaces and equipment exteriors</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Sanitisation Practices &amp; Safe Cleaning Methods</h2>
                <p>
                    Cleaning in clinics requires special attention to disinfection
                    and cross-contamination prevention. Our teams use approved
                    disinfectants and follow safe cleaning procedures.
                </p>
                <p>
                    Colour-coded tools and designated cleaning sequences help
                    maintain hygiene standards across different clinic zones.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Why Clinics Trust Our Cleaning Services</h2>
                <p>
                    Medical professionals choose us for our reliability,
                    confidentiality, and understanding of clinical environments.
                    We deliver consistent cleaning support with minimal disruption.
                </p>
                <ul>
                    <li>Staff trained for clinic and outpatient environments</li>
                    <li>Use of safe and approved medical-grade chemicals</li>
                    <li>Flexible service timings before or after clinic hours</li>
                    <li>Supervisor oversight and quality checks</li>
                    <li>Suitable for small clinics and multi-specialty practices</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================= END CLINIC CLEANING SERVICES ================= -->



    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>