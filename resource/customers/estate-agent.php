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

    <section class="sector-section">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="<?php echo BASE_URL . 'includes/image/real-estate.jpg' ?>"
                    alt="Estate agency and property brokers in Gujarat">
            </div>
            <div class="sector-text">
                <h2>Estate Agency Cleaning – Gujarat Property Market</h2>
                <p>
                    In cities like Ahmedabad, Gandhinagar, Surat, and Rajkot, estate agencies
                    and property brokers deal with walk-in clients, site visits, and frequent
                    meetings. A clean office environment and well-presented properties help
                    create trust and a strong first impression for buyers and investors.
                </p>
                <p>
                    From agency offices to ready-to-show flats and sample properties, our
                    cleaning services support estate professionals in maintaining hygiene,
                    cleanliness, and visual appeal throughout the sales and leasing process.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Properties & Areas Covered for Estate Agencies</h2>
                <p>
                    Estate agencies manage multiple property types at different stages of
                    occupancy. Our cleaning services are designed to support both office
                    operations and on-site property readiness.
                </p>
                <ul>
                    <li>Estate agency offices and branch locations</li>
                    <li>Ready-to-move residential flats and apartments</li>
                    <li>Sample flats and model homes</li>
                    <li>Vacant properties before possession</li>
                    <li>Reception areas, meeting rooms, and client lounges</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Pre-Sale, Post-Tenancy & Deep Cleaning Support</h2>
                <p>
                    Cleanliness plays a key role during property handovers and site visits.
                    We provide pre-sale and post-tenancy cleaning services to ensure properties
                    are inspection-ready and visually appealing.
                </p>
                <p>
                    Our deep cleaning services include floor scrubbing, bathroom sanitisation,
                    kitchen cleaning, balcony dust removal, and glass cleaning — helping estate
                    agents close deals faster with well-maintained properties.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Why Estate Agencies Choose Our Cleaning Services</h2>
                <p>
                    We understand the fast-paced nature of the real estate business and provide
                    reliable cleaning support that aligns with client visits, possession dates,
                    and short-notice requirements.
                </p>
                <ul>
                    <li>Quick-response cleaning for urgent site visits</li>
                    <li>Flexible scheduling around possession and move-in dates</li>
                    <li>Trained staff for residential and office cleaning</li>
                    <li>Consistent service quality across multiple properties</li>
                    <li>Trusted by property brokers and real estate professionals</li>
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