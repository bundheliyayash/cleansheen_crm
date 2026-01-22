<?php include '../../config.php'; ?>

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
</head>

<body>

    <?php include ROOT_PATH . 'resource/header.php'; ?>
    <!-- ================= MEDICAL ORGANISATION CLEANING SERVICES ================= -->

    <section class="sector-section">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="<?php echo BASE_URL . 'includes/image/medical-cleaning.webp' ?>"
                    alt="Medical organisation and healthcare facility cleaning services">
            </div>
            <div class="sector-text">
                <h1>Medical Organisation &amp; Healthcare Facility Cleaning Services</h1>
                <p>
                    Medical organisations such as healthcare institutions, diagnostic
                    networks, research centres, and medical offices require strict
                    hygiene and sanitation standards to support safe operations.
                    Clean environments are essential for patient care, staff safety,
                    and regulatory compliance.
                </p>
                <p>
                    Our cleaning services are designed to support medical organisations
                    with consistent hygiene practices, trained manpower, and minimal
                    disruption to daily healthcare activities.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Operational Areas &amp; Common Facility Cleaning</h2>
                <p>
                    Medical organisations operate across multiple functional areas
                    that require regular and systematic cleaning to maintain hygiene
                    and professionalism.
                </p>
                <ul>
                    <li>Administrative offices and medical coordination areas</li>
                    <li>Waiting zones, reception desks, and public corridors</li>
                    <li>Consultation rooms and support facilities</li>
                    <li>Laboratories and controlled-access zones</li>
                    <li>Washrooms, staircases, and lift lobbies</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Hygiene Protocols &amp; Controlled Cleaning Practices</h2>
                <p>
                    Medical environments demand structured cleaning procedures
                    to reduce contamination risks and ensure safety.
                </p>
                <p>
                    Our teams follow defined cleaning protocols, use colour-coded
                    tools, and apply approved disinfectants suitable for healthcare
                    and medical-use environments.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Why Medical Organisations Choose Our Services</h2>
                <p>
                    Healthcare institutions and medical organisations trust us
                    for our reliability, compliance-focused approach, and
                    understanding of sensitive environments.
                </p>
                <ul>
                    <li>Staff trained for medical and healthcare environments</li>
                    <li>Use of approved medical-grade cleaning agents</li>
                    <li>Flexible cleaning schedules around operational hours</li>
                    <li>Supervisor-led inspections and quality monitoring</li>
                    <li>Suitable for hospitals, labs, clinics, and healthcare offices</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================= END MEDICAL ORGANISATION CLEANING SERVICES ================= -->



    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>