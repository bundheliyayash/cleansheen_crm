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
                <img src="<?php echo BASE_URL . 'includes/image/commercial-offices.png' ?>"
                    alt="Commercial Office Cleaning in Gujarat">
            </div>

            <div class="sector-text">
                <h1>Commercial Office Cleaning in Gujarat</h1>

                <p>
                    In major business hubs of Gujarat such as Ahmedabad, Vadodara, and Surat, IT parks,
                    corporate offices, and co-working spaces experience high daily footfall. A clean and
                    well-maintained workplace plays a vital role in creating a professional impression
                    and ensuring a healthy environment for employees.
                </p>

                <p>
                    Our trained cleaning team takes care of regular dusting, floor mopping, glass and
                    partition cleaning, workstation sanitisation, and washroom hygiene. Cleaning schedules
                    can be customised as per office working hours, including early mornings, late evenings,
                    or weekends.
                </p>
            </div>
        </div>
    </section>

<section class="sector-section">
    <div class="intro-inner">
        <div class="sector-text1 full-width">
            <h2>Office Cleaning Scope & Coverage</h2>
            <p>
                Our commercial office cleaning services are designed to cover all essential
                workspaces and common areas that require daily attention. From entry points
                to employee work zones, every area is cleaned with a focus on hygiene,
                safety, and presentation.
            </p>
            <ul>
                <li>Workstations, cabins, and open office areas</li>
                <li>Reception areas and waiting lounges</li>
                <li>Conference rooms and meeting spaces</li>
                <li>Pantry, cafeteria, and break areas</li>
                <li>Washrooms, staircases, and lift lobbies</li>
            </ul>
        </div>
    </div>
</section>

<section class="sector-section">
    <div class="intro-inner">
        <div class="sector-text1 full-width">
            <h2>Flexible Cleaning Schedules & AMC Contracts</h2>
            <p>
                Every office operates on a different schedule, which is why our cleaning
                plans are flexible and fully customisable. Based on office size and usage,
                services can be planned on a daily, weekly, or periodic basis.
            </p>
            <p>
                We also offer AMC (Annual Maintenance Contract) based cleaning services,
                ensuring consistent quality, trained manpower, and long-term cost efficiency
                for corporate clients.
            </p>
        </div>
    </div>
</section>


<section class="sector-section">
    <div class="intro-inner">
        <div class="sector-text1 full-width">
            <h2>Why Choose Us for Commercial Office Cleaning</h2>
            <p>
                Businesses across Gujarat trust us as their long-term cleaning partner due
                to our professional approach, reliable workforce, and consistent service
                quality. We understand corporate expectations and deliver services that
                match workplace standards.
            </p>
            <ul>
                <li>Trained and background-verified staff</li>
                <li>Use of professional equipment and approved chemicals</li>
                <li>Supervisor-based monitoring and quality checks</li>
                <li>Flexible service timing without disturbing office operations</li>
                <li>Experience with IT parks, corporate offices, and co-working spaces</li>
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