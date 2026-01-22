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
    <!-- ================= EMBASSY & DIPLOMATIC OFFICE CLEANING SERVICES ================= -->

    <section class="sector-section sector-section--alt">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="<?php echo BASE_URL . 'includes/image/embassie.jpg' ?>"
                    alt="Embassy and diplomatic office cleaning services">
            </div>
            <div class="sector-text">
                <h1>Embassy &amp; Diplomatic Office Cleaning Services</h1>
                <p>
                    Embassies, consulates, and diplomatic offices require a discreet,
                    secure, and highly professional cleaning approach. Clean and
                    well-maintained premises reflect organisational standards and
                    support smooth administrative operations.
                </p>
                <p>
                    Our cleaning services are designed to meet strict security
                    requirements while maintaining hygiene and presentation across
                    official and visitor-accessible areas.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Official Areas &amp; Visitor Space Cleaning</h2>
                <p>
                    Diplomatic facilities include both restricted and public-facing
                    zones that require controlled and careful cleaning.
                </p>
                <ul>
                    <li>Reception areas and security checkpoints</li>
                    <li>Visa counters and visitor waiting lounges</li>
                    <li>Meeting rooms and conference halls</li>
                    <li>Administrative offices and workspaces</li>
                    <li>Washrooms and common circulation areas</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Security-Compliant Cleaning Practices</h2>
                <p>
                    Cleaning operations within diplomatic premises must align with
                    defined security protocols and access restrictions.
                </p>
                <p>
                    Our staff are background-verified and trained to follow ID checks,
                    access controls, and approved movement guidelines while performing
                    cleaning duties.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Why Diplomatic Offices Choose Our Services</h2>
                <p>
                    Embassies and diplomatic organisations trust us for our
                    confidentiality, discipline, and consistent service quality.
                    We understand the sensitivity and responsibility involved in
                    such environments.
                </p>
                <ul>
                    <li>Background-verified and trained cleaning personnel</li>
                    <li>Strict adherence to security and access protocols</li>
                    <li>Flexible cleaning schedules within restricted hours</li>
                    <li>Supervisor-led monitoring and reporting</li>
                    <li>Suitable for embassies, consulates, and visa centres</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================= END EMBASSY & DIPLOMATIC OFFICE CLEANING SERVICES ================= -->



    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>