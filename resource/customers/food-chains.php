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

    <!-- ================= FOOD CHAIN CLEANING SERVICES ================= -->

    <section class="sector-section sector-section--alt">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="<?php echo BASE_URL . 'includes/image/food-chain.webp' ?>"
                    alt="Food chain and QSR cleaning services">
            </div>
            <div class="sector-text">
                <h1>Food Chain &amp; QSR Cleaning Services</h1>
                <p>
                    Food chains and quick service restaurants operate with high customer
                    turnover and strict hygiene requirements. Consistent cleaning is
                    essential to maintain food safety standards, brand reputation, and
                    customer trust across all outlets.
                </p>
                <p>
                    Our cleaning services are designed to support multi-location food
                    chains with uniform quality, standard operating procedures, and
                    flexible service schedules.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Front-of-House Cleaning &amp; Customer Areas</h2>
                <p>
                    Clean and well-maintained customer areas directly influence dining
                    experience and repeat visits. Our teams focus on visible hygiene and
                    presentation throughout operating hours.
                </p>
                <ul>
                    <li>Dining tables, chairs, booths, and tray stations</li>
                    <li>Order counters, display units, and self-service kiosks</li>
                    <li>Floor cleaning, spill control, and stain removal</li>
                    <li>Entry points, glass panels, and waiting areas</li>
                    <li>Customer washrooms and hand-wash zones</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Kitchen, Production &amp; Back-End Deep Cleaning</h2>
                <p>
                    Food preparation zones require specialised cleaning to meet safety
                    and compliance requirements. Our deep cleaning services focus on
                    grease control, sanitation, and operational hygiene.
                </p>
                <ul>
                    <li>Kitchen floors, walls, and drainage areas</li>
                    <li>Cooking equipment surroundings and prep counters</li>
                    <li>Exhaust systems, hoods, and grease-prone zones</li>
                    <li>Cold storage, dry storage, and loading areas</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Why Food Chains Choose Our Cleaning Services</h2>
                <p>
                    Multi-outlet food brands rely on us for consistency, compliance,
                    and scalable cleaning solutions. We understand the operational
                    pressure of food chains and deliver reliable services across locations.
                </p>
                <ul>
                    <li>Standardised cleaning processes across all outlets</li>
                    <li>Use of food-safe and approved cleaning chemicals</li>
                    <li>Flexible cleaning during non-operational hours</li>
                    <li>Supervisor monitoring and quality reporting</li>
                    <li>Ideal for QSRs, franchises, and multi-brand food chains</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================= END FOOD CHAIN CLEANING SERVICES ================= -->




    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>