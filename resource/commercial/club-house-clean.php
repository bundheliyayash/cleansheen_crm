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

    <!-- 1. HERO -->
    <section class="ch-hero">
        <div class="ch-hero-overlay">
            <h1>Club House Cleaning</h1>
        </div>
    </section>

    <!-- 2. GREEN FEATURES STRIP -->
    <section class="cw-features">
        <div class="cw-features-inner">
            <div class="cw-features-grid">
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-check-circle"></i></div>
                    <h3>100% Guaranteed Results</h3>
                    <p>Crystal-clear floors, lounges, common areas and seating that enhance your clubhouse’s value and elevate member experience.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-hard-hat"></i></div>
                    <h3>Health &amp; Safety</h3>
                    <p>Trained and certified cleaning operatives following safe procedures for public areas, facilities, equipment and high-traffic zones.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-tint"></i></div>
                    <h3>Advanced Cleaning Methods</h3>
                    <p>Modern cleaning techniques including eco-friendly solutions, specialist surface care and deep-clean methods.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Comprehensive Insurance</h3>
                    <p>Full public liability cover for commercial clubhouse and community facility cleaning contracts.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-bolt"></i></div>
                    <h3>Latest Technology</h3>
                    <p>Modern equipment for efficiency, safety and consistently spotless results across all clubhouse areas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. INTRO WHITE BLOCK -->
    <section class="cw-intro">
        <div class="cw-intro-inner">
            <h2>Professional Clubhouse Cleaning for Your City</h2>
            <p>
                Professional clubhouse cleaning keeps your shared spaces hygienic, protects valuable facilities,
                and ensures members and guests enjoy a safe, comfortable and welcoming environment.
            </p>
            <p>
                Regular cleaning removes dust, stains, spills and high-touch contamination that can damage furniture,
                flooring, amenities and ventilation systems over time.
            </p>
        </div>
    </section>

    <!-- 4. LIGHT-BLUE THREE CARD ROW -->
    <section class="cw-methods">
        <div class="cw-methods-inner">
            <div class="cw-methods-grid">
                <article class="cm-card">
                    <img src="<?php echo BASE_URL . '/includes/image/club-house-1.jpg' ?>" alt="Common Areas & Facilities">
                    <h3>Common Areas & Facilities</h3>
                    <p>
                        Deep cleaning and sanitising of lounges, meeting rooms, indoor games areas,
                        gyms, washrooms and seating to keep all high-contact surfaces clean and hygienic.

                        Thorough care of floors, walls and shared spaces to manage daily use and community footfall.
                    </p>
                </article>

                <article class="cm-card">
                    <img src="<?php echo BASE_URL . '/includes/image/club-house-2.webp' ?>" alt="Reception & Member Areas">
                    <h3>Reception & Member Areas</h3>
                    <p>
                        Detailed cleaning of reception desks, waiting areas, notice boards, glass panels
                        and refreshment zones to create a positive first impression.

                        Scheduled cleaning of entrances, corridors, seating and touchpoints to keep your clubhouse inviting.
                    </p>
                </article>

                <article class="cm-card">
                    <img src="<?php echo BASE_URL . '/includes/image/club-house-3.jpg' ?>" alt="High-Level, Ventilation & Hard-to-Reach">
                    <h3>High-Level, Ventilation & Hard-to-Reach</h3>
                    <p>
                        Cleaning of high-level lighting, ceiling fans, air-conditioning vents and fixtures
                        to reduce dust build-up and improve indoor air quality.

                        Safe access solutions for hard-to-reach areas without disrupting daily clubhouse activities.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- 5. LIGHT-BLUE TEXT + VIDEO/IMAGE ROW -->
    <section class="cw-about">
        <div class="cw-about-inner">
            <div class="cw-about-text">
                <h2>Why Clubhouses Choose Our Cleaning Team</h2>
                <p>
                    Flexible cleaning schedules planned around member usage, events
                    and peak hours to minimise disruption.
                </p>
                <p>
                    Consistent supervision, detailed checklists and hygiene reports
                    to help management maintain high cleanliness standards with confidence.
                </p>
            </div>

            <div class="cw-about-media">
                <img src="<?php echo BASE_URL . '/includes/image/club-one-1.webp' ?>" alt="Professional clubhouse cleaning">
            </div>
        </div>
    </section>

    <!-- 6. BOTTOM WHITE TEXT STRIP -->
    <section class="cw-more">
        <div class="cw-more-inner">
            <h2>So Much More Than Just Clubhouse Cleaning</h2>
            <p>
                Professional clubhouse cleaning can be combined with floor deep cleaning,
                washroom sanitising, ventilation maintenance or full facility deep cleans
                to keep your entire clubhouse spotless, safe and member-ready.
                Speak to our team to create a cleaning package tailored to your clubhouse.
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