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

    <!-- ================= RESORT CLEANING SERVICES ================= -->

    <section class="sector-section sector-section--alt">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="<?php echo BASE_URL . 'includes/image/resort-cleaning.jpg' ?>" alt="Resort cleaning services">
            </div>
            <div class="sector-text">
                <h2>Resort Cleaning Services</h2>
                <p>
                    Resorts require a high standard of cleanliness to deliver a premium
                    guest experience. From guest rooms to outdoor leisure areas, consistent
                    cleaning ensures comfort, safety, and visual appeal throughout the property.
                </p>
                <p>
                    Our resort cleaning services are designed to support daily operations
                    while maintaining hospitality-grade hygiene standards across indoor
                    and outdoor spaces.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Guest Accommodation &amp; Public Area Cleaning</h2>
                <p>
                    Guest rooms and shared spaces require detailed attention to ensure a
                    relaxing and welcoming environment for visitors.
                </p>
                <ul>
                    <li>Daily cleaning of rooms, villas, and cottages</li>
                    <li>Bathroom sanitation and amenity areas</li>
                    <li>Reception, lounge, and waiting areas</li>
                    <li>Corridors, staircases, and lift lobbies</li>
                    <li>Back-of-house and staff areas</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Outdoor, Pool &amp; Leisure Area Maintenance</h2>
                <p>
                    Resorts feature extensive outdoor and recreational areas that require
                    regular upkeep to maintain safety and aesthetics.
                </p>
                <ul>
                    <li>Swimming pool surroundings and deck areas</li>
                    <li>Garden pathways, lawns, and open spaces</li>
                    <li>Spa, gym, and indoor recreation zones</li>
                    <li>Event lawns, banquet areas, and activity spaces</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Why Resorts Choose Our Cleaning Services</h2>
                <p>
                    Resort operators rely on our professional cleaning teams for consistent
                    service quality, flexibility, and attention to detail. We understand
                    the importance of guest privacy and uninterrupted operations.
                </p>
                <ul>
                    <li>Trained staff experienced in resort and hospitality environments</li>
                    <li>Use of approved and eco-friendly cleaning products</li>
                    <li>Flexible service hours aligned with guest activity schedules</li>
                    <li>Supervisor-led inspections and quality assurance</li>
                    <li>Suitable for boutique resorts and large hospitality properties</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================= END RESORT CLEANING SERVICES ================= -->



    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>