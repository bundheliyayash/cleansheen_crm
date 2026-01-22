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

    <!-- ================= GOVERNMENT INSTITUTE CLEANING SERVICES ================= -->
    <section class="sector-section sector-section--alt">
        <div class="sector-inner">
            <div class="sector-image"> <img
                    src="<?php echo BASE_URL . 'includes/image/government-institute.png' ?>"
                    alt="Government and public institute cleaning services"> </div>
            <div class="sector-text">
                <h1>Government &amp; Public Institution Cleaning Services</h1>
                <p> Government offices and public institutions demand strict hygiene, safety, and operational
                    efficiency. Maintaining clean workspaces enhances public trust, employee well-being, and facility
                    longevity. </p>
                <p> Our cleaning services are tailored to meet regulatory standards while ensuring minimal disruption to
                    daily operations in government and public spaces. </p>
            </div>
        </div>
    </section>
    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Office & Administrative Area Cleaning</h2>
                <p> Public offices and administrative buildings require detailed cleaning to maintain a professional and
                    hygienic environment for staff and visitors. </p>
                <ul>
                    <li>Daily cleaning of offices, cubicles, and conference rooms</li>
                    <li>Reception areas, waiting lounges, and visitor zones</li>
                    <li>Corridors, staircases, and elevators</li>
                    <li>Restrooms and staff amenity areas</li>
                    <li>Document handling and sensitive area precautions</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Public Spaces & Facility Maintenance</h2>
                <p> Institutions often include public-facing areas that require regular upkeep for safety,
                    accessibility, and visual appeal. </p>
                <ul>
                    <li>Entrance lobbies, reception halls, and auditoriums</li>
                    <li>Outdoor grounds, parking areas, and pathways</li>
                    <li>Meeting halls, training rooms, and event spaces</li>
                    <li>Signage, notice boards, and public touchpoints</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Why Government Institutions Choose Our Cleaning Services</h2>
                <p> We deliver consistent, compliant, and reliable cleaning solutions suitable for government and public
                    institutions. Our teams work with discretion and professionalism to maintain operational continuity.
                </p>
                <ul>
                    <li>Trained staff familiar with public sector standards</li>
                    <li>Use of eco-friendly and safe cleaning chemicals</li>
                    <li>Flexible scheduling to minimize disruption</li>
                    <li>Supervisor-led quality checks and compliance audits</li>
                    <li>Scalable solutions for small offices to large government complexes</li>
                </ul>
            </div>
        </div>
    </section> <!-- ================= END GOVERNMENT INSTITUTE CLEANING SERVICES ================= -->


    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>