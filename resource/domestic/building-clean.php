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
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Icons + CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/style.css" />
</head>

<body>

    <?php include ROOT_PATH . 'resource/header.php'; ?>

    <!-- HERO + 3 TOP CARDS -->
    <section class="ab-hero">
        <!-- background image: after-building kitchen -->
        <div class="ab-hero-overlay">
            <h1 class="dom-hero-card">After‑Building Cleaning</h1>
            <div class="ab-hero-cards">
                <!-- Card 1: 100% SATISFACTION GUARANTEED -->
                <div class="ab-hero-card">
                    <h3>100% Satisfaction Guaranteed</h3>
                    <p>If you are not satisfied we will return and resolve any issues.</p>
                </div>
                <!-- Card 2: CLEANING MATERIALS INCLUDED -->
                <div class="ab-hero-card">
                    <h3>Cleaning Materials Included</h3>
                    <p>All after‑builders cleaning solutions supplied by us.</p>
                </div>
                <!-- Card 3: EQUIPMENT PROVIDED -->
                <div class="ab-hero-card">
                    <h3>Equipment Provided</h3>
                    <p>Professional machinery for dust and debris removal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GREEN ICON STRIP -->
    <section class="ab-features">
        <div class="ab-features-inner">
            <div class="ab-features-grid">
                <!-- COMPREHENSIVE INSURANCE -->
                <div class="af-item">
                    <div class="os-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Comprehensive Insurance</h4>
                    <p>Public liability cover for after‑building work.</p>
                </div>
                <!-- SUPERVISOR CHECKED -->
                <div class="af-item">
                    <div class="os-icon"><i class="fa fas fa-sync-alt"></i></div>
                    <h4>Supervisor Checked</h4>
                    <p>Supervisors oversee bookings and quality.</p>
                </div>
                <!-- KEYS PICKED UP -->
                <div class="af-item">
                    <div class="os-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h4>Keys Picked Up</h4>
                    <p>Collection from agents or another location if required.</p>
                </div>
                <!-- HAPPY CLEANERS -->
                <div class="af-item">
                    <div class="os-icon"><i class="fas fa-user-shield"></i></div>
                    <h4>Happy Cleaners</h4>
                    <p>Fairly paid cleaners experienced in after‑build cleans.</p>
                </div>
                <!-- SPECIALLY TRAINED -->
                <div class="af-item">
                    <div class="os-icon"><i class="fas fa-wallet"></i></div>
                    <h4>Specially Trained</h4>
                    <p>Trained in builders, end of tenancy and deep cleaning.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CHECKLIST (2 COLUMN BULLETS) -->
    <section class="ab-checklist">
        <div class="ab-checklist-inner">
            <h2>Checklist</h2>
            <p>Short intro about covering all areas after renovation.</p>

            <div class="ab-checklist-grid">
                <ul>
                    <li>Oven &amp; cooker</li>
                    <li>Fridge &amp; freezer (switched off first)</li>
                    <li>Washing machine</li>
                    <li>Dishwasher</li>
                    <li>Cupboards (inside &amp; out)</li>
                </ul>
                <ul>
                    <li>Skirting boards</li>
                    <li>Bathroom &amp; toilet tiles</li>
                    <li>Windows (inside only)</li>
                    <li>Dusting</li>
                    <li>Hoovering</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- QUOTE CTA BAR -->
    <section class="ab-quote-bar">
        <!-- single full‑width button: Get an instant quote online -->
        <a href="<?php echo BASE_URL . 'resource/about/contact-us.php' ?>" class="btn-solid">Get an Instant Quote Online</a>
    </section>

    <!-- THREE SIMPLE STEPS + VIDEO -->
    <section class="ab-steps">
        <div class="ab-steps-inner">
            <div class="ab-steps-text">
                <h2>Three Simple Steps</h2>
                <ol>
                    <li>Send us your property details via the quote form.</li>
                    <li>Receive a detailed quote within working hours.</li>
                    <li>Our cleaners complete a post‑renovation clean on the agreed date.</li>
                </ol>
            </div>
            <div class="ab-steps-video">
                <!-- YouTube embed / thumbnail -->
                <img src="<?php echo BASE_URL . 'includes/image/after-clean.webp' ?>" alt="After-building cleaning video">
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