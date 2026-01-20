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
    <section class="hr-hero">
        <div class="hr-hero-overlay">
            <h1>Hotels & Resort Cleaning</h1>
        </div>
    </section>

    <!-- 2. GREEN FEATURES STRIP -->
    <section class="cw-features">
        <div class="cw-features-inner">
            <div class="cw-features-grid">
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-check-circle"></i></div>
                    <h3>100% Guaranteed Results</h3>
                    <p>Spotless rooms, lobbies, lounges and common areas that enhance the overall appearance and guest experience of hotels and resorts.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-hard-hat"></i></div>
                    <h3>Health &amp; Safety</h3>
                    <p>Trained and certified cleaning operatives following strict hygiene and safety procedures for guest areas, staff zones and high-traffic spaces.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-tint"></i></div>
                    <h3>Advanced Cleaning Methods</h3>
                    <p>Specialist hotel and resort cleaning techniques using eco-friendly products and deep-clean systems.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>Comprehensive Insurance</h3>
                    <p>Full public liability insurance for commercial hotel and resort cleaning contracts.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-bolt"></i></div>
                    <h3>Latest Technology</h3>
                    <p>Modern cleaning equipment for efficiency, safety and consistently high standards across large hospitality spaces.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. INTRO WHITE BLOCK -->
    <section class="cw-intro">
        <div class="cw-intro-inner">
            <h2>Professional Hotel &amp; Resort Cleaning for Your City</h2>
            <p>
                Professional hotel and resort cleaning helps maintain immaculate guest environments,
                protects interiors and facilities, and ensures visitors enjoy a safe, comfortable and memorable stay.
            </p>
            <p>
                Routine cleaning removes dust, stains, spills and bacteria from guest rooms, public areas,
                restaurants and ventilation systems, preserving property value and hygiene standards.
            </p>
        </div>
    </section>

    <!-- 4. LIGHT-BLUE THREE CARD ROW -->
    <section class="cw-methods">
        <div class="cw-methods-inner">
            <div class="cw-methods-grid">
                <article class="cm-card">
                    <img src="<?php echo BASE_URL . '/includes/image/hotel-resort-1.webp' ?>" alt="Guest Rooms & Common Areas">
                    <h3>Guest Rooms &amp; Common Areas</h3>
                    <p>
                        Detailed cleaning and sanitising of guest rooms, suites, corridors, lounges and seating areas
                        to meet hospitality hygiene standards and guest expectations.

                        Careful floor, furniture and surface cleaning to manage daily occupancy and footfall.
                    </p>
                </article>

                <article class="cm-card">
                    <img src="<?php echo BASE_URL . '/includes/image/hotel-resort-2.webp' ?>" alt="Reception, Dining & Public Areas">
                    <h3>Reception, Dining &amp; Public Areas</h3>
                    <p>
                        Thorough cleaning of reception desks, lobbies, restaurants, cafés and banquet spaces
                        to create a strong first impression for guests.

                        Regular touch-point and floor cleaning around entrances, lifts and waiting areas.
                    </p>
                </article>

                <article class="cm-card">
                    <img src="<?php echo BASE_URL . '/includes/image/hotel-resort-4.avif' ?>" alt="High-Level, Ventilation & Back-of-House">
                    <h3>High-Level, Ventilation &amp; Back-of-House</h3>
                    <p>
                        Cleaning of high-level fixtures, lighting, air-conditioning vents and service areas
                        to improve air quality and operational hygiene.

                        Safe access methods for hard-to-reach and back-of-house zones without disrupting guests.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- 5. LIGHT-BLUE TEXT + VIDEO/IMAGE ROW -->
    <section class="cw-about">
        <div class="cw-about-inner">
            <div class="cw-about-text">
                <h2>Why Hotels &amp; Resorts Choose Our Cleaning Team</h2>
                <p>
                    Flexible cleaning schedules aligned with check-in, check-out, events and peak guest hours
                    to minimise disruption.
                </p>
                <p>
                    Consistent supervision, detailed checklists and hygiene reports to help hotel and resort
                    management maintain high service and cleanliness standards.
                </p>
            </div>

            <div class="cw-about-media">
                <img src="<?php echo BASE_URL . '/includes/image/hotel-resort-main.jpg' ?>" alt="Hotel and resort cleaning services">
            </div>
        </div>
    </section>

    <!-- 6. BOTTOM WHITE TEXT STRIP -->
    <section class="cw-more">
        <div class="cw-more-inner">
            <h2>More Than Just Hotel &amp; Resort Cleaning</h2>
            <p>
                Our hotel and resort cleaning services can be combined with deep floor cleaning,
                washroom sanitisation, ventilation maintenance and full property deep cleans
                to keep your hospitality space spotless, compliant and guest-ready.
            </p>
        </div>
    </section>

    <!-- 7. HOTEL CLEANING SECTION (TEXT ONLY) -->
    <section class="cw-intro cw-hotel">
        <div class="cw-intro-inner">
            <h2>Dedicated Hotel Cleaning Services</h2>
            <p>
                We support hotels with professional cleaning solutions that meet daily operational demands.
                From housekeeping assistance to deep cleaning of rooms, corridors, restaurants and staff areas,
                our teams work efficiently and discreetly.
            </p>
            <p>
                Our structured processes help improve guest satisfaction, online reviews and long-term asset care
                while ensuring compliance with hospitality hygiene standards.
            </p>
        </div>
    </section>

    <!-- 8. RESORT CLEANING SECTION (TEXT ONLY) -->
    <section class="cw-intro cw-resort">
        <div class="cw-intro-inner">
            <h2>Specialist Resort Cleaning Solutions</h2>
            <p>
                Resorts require a broader cleaning approach due to large open spaces, leisure facilities
                and extended guest stays. We clean accommodation areas, lounges, spas, gyms and recreational zones.
            </p>
            <p>
                Flexible scheduling, experienced supervisors and regular quality checks ensure your resort
                remains clean, welcoming and ready to deliver exceptional guest experiences year-round.
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