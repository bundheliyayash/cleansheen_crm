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

    <!-- ================= HOSPITAL & HEALTHCARE CLEANING SERVICES ================= -->

    <section class="sector-section">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="<?php echo BASE_URL . 'includes/image/medical-cleaning.jpeg' ?>"
                    alt="Hospital and healthcare facility cleaning services">
            </div>
            <div class="sector-text">
                <h2>Hospital &amp; Healthcare Facility Cleaning Services</h2>
                <p>
                    Hospitals, clinics, and diagnostic centres require the highest level
                    of hygiene to ensure patient safety and infection control. Clean
                    waiting areas, treatment rooms, laboratories, and washrooms are
                    essential for maintaining healthcare standards.
                </p>
                <p>
                    Our healthcare cleaning services follow defined hygiene protocols
                    and focus on disinfection, cross-contamination prevention, and
                    safe cleaning practices without disrupting medical operations.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Clinical Areas &amp; Patient Zone Cleaning</h2>
                <p>
                    Patient-facing and clinical areas demand consistent sanitation to
                    reduce infection risks and maintain a safe treatment environment.
                </p>
                <ul>
                    <li>OPD rooms, consultation chambers, and wards</li>
                    <li>Waiting areas, reception zones, and corridors</li>
                    <li>Laboratories, diagnostic rooms, and sample areas</li>
                    <li>Patient washrooms and hand hygiene zones</li>
                    <li>Isolation and high-touch surface cleaning</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Disinfection Protocols &amp; Bio-Waste Awareness</h2>
                <p>
                    Healthcare environments require specialised cleaning methods and
                    trained staff. Our teams follow colour-coded tools, approved
                    disinfectants, and defined cleaning sequences.
                </p>
                <p>
                    Staff are trained to work around bio-waste handling zones and
                    critical areas while maintaining hygiene and safety standards.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Why Healthcare Facilities Choose Our Services</h2>
                <p>
                    Medical institutions rely on us for reliable cleaning support,
                    trained manpower, and strict adherence to hygiene protocols.
                    We understand the sensitivity and responsibility involved in
                    healthcare cleaning.
                </p>
                <ul>
                    <li>Staff trained for hospital and clinical environments</li>
                    <li>Use of approved medical-grade cleaning chemicals</li>
                    <li>Flexible cleaning schedules around OPD and visiting hours</li>
                    <li>Supervisor monitoring and quality assurance</li>
                    <li>Suitable for hospitals, clinics, and diagnostic centres</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================= END HOSPITAL & HEALTHCARE CLEANING SERVICES ================= -->



    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>