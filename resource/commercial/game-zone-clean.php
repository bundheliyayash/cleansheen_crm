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
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Icons + CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/style.css" />
</head>

<body>

    <?php include ROOT_PATH . 'resource/header.php'; ?>

    <!-- 1. HERO -->
    <section class="gz-hero">
        <div class="gz-hero-overlay">
            <h1>Game zone Cleaning</h1>
        </div>
    </section>

    <!-- 2. GREEN FEATURES STRIP -->
    <section class="cw-features">
        <div class="cw-features-inner">
            <div class="cw-features-grid">
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-check-circle"></i></div>
                    <h3>100% Guaranteed Results</h3>
                    <p>Crystal-clear floors, screens, consoles aur seating jo aapke game zone ki value aur customer experience dono enhance kare.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-hard-hat"></i></div>
                    <h3>Health &amp; Safety</h3>
                    <p>Trained aur certified cleaning operatives jo electrical equipment, public areas aur high-traffic zones me safe cleaning procedures follow karte hain.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-tint"></i></div>
                    <h3>Advanced Cleaning Methods</h3>
                    <p>Pure‑water pole systems or traditional squeegee cleaning.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Comprehensive Insurance</h3>
                    <p>Public liability cover for commercial window contracts.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-bolt"></i></div>
                    <h3>Latest Technology</h3>
                    <p>Modern equipment for reach, safety and spotless results.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. INTRO WHITE BLOCK -->
    <section class="cw-intro">
        <div class="cw-intro-inner">
            <h2>Professional Game Zone Cleaning for Your City</h2>
            <p>
                Professional game zone cleaning keeps your entertainment space hygienic, protects valuable gaming equipment,
                and ensures customers enjoy a safe and comfortable gaming experience.
            </p>
            <p>
                Regular cleaning removes dust, fingerprints, food spills and sweat residue that can damage consoles,
                arcade machines, screens and ventilation systems over time.
            </p>
        </div>
    </section>

    <!-- 4. LIGHT-BLUE THREE CARD ROW -->
    <section class="cw-methods">
        <div class="cw-methods-inner">
            <div class="cw-methods-grid">
                <article class="cm-card">
                    <img src="<?php echo BASE_URL . 'includes/image/game-zone-1.jpg' ?>" alt="Gaming Area & Equipment">
                    <h3>Gaming Area & Equipment</h3>
                    <p>
                        Deep cleaning and sanitising of arcade machines, gaming consoles, VR equipment,
                        controllers, touch screens and seating to keep all high-contact surfaces safe and hygienic.

                        Careful cleaning of floors, walls and gaming pods to manage heavy footfall and long gaming sessions.
                    </p>
                </article>

                <article class="cm-card">
                    <img src="<?php echo BASE_URL . 'includes/image/game-zone-2.webp' ?>" alt="Front-of-House & Customer Areas">
                    <h3>Front-of-House & Customer Areas</h3>
                    <p>
                        Detailed cleaning of reception desks, ticket counters, glass displays and snack areas
                        to create a strong first impression for visitors.

                        Scheduled floor, seating and touch-point cleaning around waiting areas, payment counters
                        and entrance doors to keep your game zone welcoming.
                    </p>
                </article>

                <article class="cm-card">
                    <img src="<?php echo BASE_URL . 'includes/image/game-zone-3.jpg' ?>" alt="High-Level, Ventilation & Hard-to-Reach">
                    <h3>High-Level, Ventilation & Hard-to-Reach</h3>
                    <p>
                        Cleaning of high-level lighting, speakers, air-conditioning vents and ceiling fixtures
                        to reduce dust build-up and improve air quality.

                        Safe access methods for hard-to-reach areas around large gaming machines, LED screens
                        and ceiling installations without disrupting daily operations.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- 5. LIGHT-BLUE TEXT + VIDEO/IMAGE ROW -->
    <section class="cw-about">
        <div class="cw-about-inner">
            <div class="cw-about-text">
                <h2>Why Game Zones Choose Our Cleaning Team</h2>
                <p>
                    Flexible cleaning schedules arranged around opening hours, late-night gaming
                    and peak customer times to minimise disruption.
                </p>
                <p>
                    Consistent supervisors, detailed checklists and hygiene reports so you can
                    confidently demonstrate cleanliness standards to management and partners.
                </p>
            </div>

            <div class="cw-about-media">
                <!-- replace with video iframe ya image -->
                <img src="<?php echo BASE_URL . 'includes/image/game-one-1.webp' ?>" alt="Window cleaning video">
            </div>
        </div>
    </section>

    <!-- 6. BOTTOM WHITE TEXT STRIP -->
    <section class="cw-more">
        <div class="cw-more-inner">
            <h2>So Much More Than Just Game Zone Cleaning</h2>
            <p>
                Professional game zone cleaning can be combined with equipment sanitising,
                floor deep cleaning, ventilation maintenance or full facility deep cleans
                to keep your entire entertainment space spotless, safe and customer-ready.
                Speak to the team about creating a cleaning package that fits your game zone.
            </p>
        </div>
    </section>



    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html><a href=""></a>