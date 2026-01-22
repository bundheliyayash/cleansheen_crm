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

    <!-- ================= CAFÉ & RESTAURANT CLEANING SERVICES ================= -->

    <section class="sector-section sector-section--alt">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="<?php echo BASE_URL . 'includes/image/restaurant.jpg' ?>"
                    alt="Cafe and restaurant cleaning services">
            </div>
            <div class="sector-text">
                <h1>Cafés &amp; Restaurant Cleaning Services</h1>
                <p>
                    Cafés and restaurants require strict cleanliness and hygiene standards
                    to ensure customer safety and maintain brand reputation. A clean dining
                    environment and hygienic kitchen play a key role in customer satisfaction
                    and repeat visits.
                </p>
                <p>
                    Our cleaning services cover dining areas, service counters, washrooms,
                    and food preparation zones. Cleaning schedules can be planned after
                    closing hours to avoid disruption to daily operations.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Dining Area &amp; Front-of-House Cleaning</h2>
                <p>
                    The dining area is the most visible part of any café or restaurant.
                    Regular cleaning ensures a pleasant atmosphere and positive customer
                    experience.
                </p>
                <ul>
                    <li>Cleaning of tables, chairs, sofas, and booths</li>
                    <li>Bar counters, service stations, and display areas</li>
                    <li>Floor cleaning, stain removal, and polishing</li>
                    <li>Entry areas, glass doors, and waiting zones</li>
                    <li>Washroom sanitation and odour control</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Kitchen &amp; Back-of-House Deep Cleaning</h2>
                <p>
                    Kitchen hygiene is critical for food safety compliance and smooth
                    operations. Our deep cleaning services help maintain a safe and
                    organised food preparation environment.
                </p>
                <ul>
                    <li>Kitchen floors, walls, and drainage cleaning</li>
                    <li>Exhaust hoods, ducts, and grease trap areas</li>
                    <li>Storage shelves, cold rooms, and dry stores</li>
                    <li>Waste handling zones and service corridors</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Why Cafés &amp; Restaurants Choose Our Services</h2>
                <p>
                    Food service businesses trust us for our reliability, hygiene-focused
                    approach, and flexible service schedules. We understand operational
                    challenges and deliver cleaning solutions that support daily business
                    needs.
                </p>
                <ul>
                    <li>Trained staff experienced in food-service environments</li>
                    <li>Use of food-safe and approved cleaning chemicals</li>
                    <li>Flexible cleaning schedules, including post-closing hours</li>
                    <li>Supervisor-led quality checks and reporting</li>
                    <li>Suitable for standalone cafés and multi-outlet restaurant chains</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================= END CAFÉ & RESTAURANT CLEANING SERVICES ================= -->



    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>