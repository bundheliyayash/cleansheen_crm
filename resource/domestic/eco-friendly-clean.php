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

    <!-- HERO -->
    <section class="eco-hero">
        <!-- bg: lake/forest image -->
        <div class="eco-hero-overlay">
            <h1>Eco‑Friendly Cleaning</h1>
        </div>
    </section>

    <!-- INTRO + BOOK NOW -->
    <section class="eco-intro">
        <div class="eco-intro-inner">
            <p>Brief explanation of eco products, safe for children, pets and the planet.</p>
            <p>Mention popularity, carbon‑footprint reduction and transition to eco services.</p>
            <a href="#eco-booking" class="btn-solid">Book Now</a>
        </div>
    </section>

    <!-- WHY CHOOSE OUR ECO-FRIENDLY CLEANING (3 CARDS) -->
    <section class="eco-why">
        <div class="eco-why-inner">
            <h2>Why Choose Our Eco‑Friendly Cleaning?</h2>

            <div class="eco-why-grid">
                <!-- Sensitive to products -->
                <div class="ew-card">
                    <h3>Sensitive to Certain Products</h3>
                    <p>We can use alternatives if you react to standard chemicals.</p>
                </div>
                <!-- Change of circumstances -->
                <div class="ew-card">
                    <h3>Change of Circumstances</h3>
                    <p>E.g. new baby or allergies; we adjust materials accordingly.</p>
                </div>
                <!-- Harsh chemicals -->
                <div class="ew-card">
                    <h3>Avoid Harsh Chemicals</h3>
                    <p>Less aggressive solutions while still cleaning thoroughly.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- GREEN ICON STRIP (same domestic icons) -->
    <section class="eco-features">
        <div class="eco-features-inner">
            <div class="eco-features-grid">
                <div>
                    <h4>Local Family Business</h4>
                    <p>Local workers and community links.</p>
                </div>
                <div>
                    <h4>Flexible Times &amp; Schedules</h4>
                    <p>Visits fitted around your routine.</p>
                </div>
                <div>
                    <h4>Flexible Tasks</h4>
                    <p>Ironing, laundry and regular tasks included.</p>
                </div>
                <div>
                    <h4>No Extra Charges</h4>
                    <p>All fees agreed in advance.</p>
                </div>
                <div>
                    <h4>Happy Cleaners</h4>
                    <p>Fair wages and training.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT ECO-FRIENDLY + VIDEO -->
    <section class="eco-about">
        <div class="eco-about-inner">
            <div class="eco-about-text">
                <p>Explain being family‑owned, caring about environment and customers.</p>
            </div>
            <div class="eco-about-video">
                <img src="assets/images/eco-video.jpg" alt="Eco-friendly cleaning video">
            </div>
        </div>
    </section>

    <!-- ECO-FRIENDLY REGULAR CLEANING (TABS STYLE + TEXT + VIDEO/IMAGE) -->
    <section class="eco-regular">
        <div class="eco-regular-inner">
            <h2>Eco‑Friendly Regular Cleaning</h2>
            <!-- optional nav tabs: Kitchen / Bedroom / Bathroom / Living & Hall -->
            <!-- left: text about regular eco service, right: video/image -->
        </div>
    </section>

    <!-- ECO-FRIENDLY REGULAR TASK CARDS (4 cards like domestic page) -->
    <section class="eco-regular-tasks">
        <div class="eco-regular-tasks-inner">
            <div class="eco-tasks-grid">
                <div class="eco-task-card">
                    <h3>Kitchen</h3>
                    <p>Worktops, appliances and floors with eco products.</p>
                </div>
                <div class="eco-task-card">
                    <h3>Bedroom</h3>
                    <p>Dusting, bed linen changes and vacuuming.</p>
                </div>
                <div class="eco-task-card">
                    <h3>Bathroom</h3>
                    <p>Tiles, toilets and basins cleaned with low‑impact agents.</p>
                </div>
                <div class="eco-task-card">
                    <h3>Living &amp; Hall</h3>
                    <p>Furniture, glass and floors using eco solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ECO-FRIENDLY ONE-OFF SERVICES (3–4 CARDS) -->
    <section class="eco-oneoff">
        <div class="eco-oneoff-inner">
            <h2>Eco‑Friendly One‑Off Services</h2>
            <div class="eco-oneoff-grid">
                <div class="eo-card">
                    <h3>Ironing Only</h3>
                    <p>Hourly ironing sessions at your home.</p>
                </div>
                <div class="eo-card">
                    <h3>Deep Clean</h3>
                    <p>Eco products used for intensive whole‑home clean.</p>
                </div>
                <div class="eo-card">
                    <h3>Steam Cleaning</h3>
                    <p>Low‑chemical steam for floors and upholstery.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html><a href=""></a>