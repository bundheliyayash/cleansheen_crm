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

    <section class="sector-section">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="<?php echo BASE_URL . 'includes/image/property-managment.webp' ?>"
                    alt="Property management companies in Gujarat">
            </div>
            <div class="sector-text">
                <h1>Property Management Cleaning – Gujarat Societies</h1>
                <p>
                    In cities such as Ahmedabad, Vadodara, and Surat, large residential societies
                    and commercial complexes are commonly maintained by professional property
                    and facility management companies. These environments require consistent,
                    well-organised cleaning support to maintain hygiene, safety, and overall
                    property value.
                </p>
                <p>
                    Our cleaning services are designed to support long-term contracts by
                    maintaining common areas through structured daily schedules and
                    supervisor-led monitoring. Services can be planned under AMC models with
                    periodic deep cleaning to ensure sustained cleanliness across the property.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Common Areas & Facilities We Maintain</h2>
                <p>
                    Property-managed sites include multiple shared spaces that require regular
                    attention. Our team ensures that all high-traffic and common-use areas
                    remain clean, safe, and presentable for residents, tenants, and visitors.
                </p>
                <ul>
                    <li>Staircases, corridors, and lift lobbies</li>
                    <li>Basement and open parking areas</li>
                    <li>Common washrooms and service areas</li>
                    <li>Club houses, gyms, and amenities</li>
                    <li>Garden paths, walkways, and security cabins</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Daily Operations, AMC & Deep Cleaning Plans</h2>
                <p>
                    Cleaning operations for managed properties are carried out as per daily,
                    weekly, and periodic schedules defined by the facility manager. Dedicated
                    supervisors ensure task completion and quality checks on a regular basis.
                </p>
                <p>
                    AMC (Annual Maintenance Contract) based services allow property management
                    companies to maintain consistent service quality while optimising long-term
                    operational costs. Periodic deep cleaning can be scheduled for high-usage
                    zones and seasonal requirements.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Why Property Management Companies Choose Us</h2>
                <p>
                    Our experience in handling large residential and commercial properties
                    makes us a reliable cleaning partner for property management companies
                    across Gujarat. We understand compliance, reporting, and long-term service
                    expectations.
                </p>
                <ul>
                    <li>Trained and uniformed cleaning staff</li>
                    <li>Supervisor-based monitoring and reporting</li>
                    <li>Professional equipment and approved chemicals</li>
                    <li>Scalable services for large societies and complexes</li>
                    <li>Experience with residential and commercial properties</li>
                </ul>
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