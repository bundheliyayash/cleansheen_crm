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

    <!-- 1. HERO -->
    <section class="cw-hero">
        <div class="cw-hero-overlay">
            <h1>Backery Cleaning</h1>
        </div>
    </section>

    <!-- 2. GREEN FEATURES STRIP -->
    <section class="cw-features">
        <div class="cw-features-inner">
            <div class="cw-features-grid">
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-check-circle"></i></div>
                    <h3>100% Guaranteed Results</h3>
                    <p>Crystal‑clear windows, frames and sills that enhance building value.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-hard-hat"></i></div>
                    <h3>Health &amp; Safety</h3>
                    <p>Operatives trained and certified for safe work at height.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-tint"></i></div>
                    <h3>Advanced Washing</h3>
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
            <h2> Commercial Bakery Cleaning for Your City </h2>
            <p>Professional bakery cleaning keeps your production areas hygienic, protects equipment, and helps you meet
                food‑safety standards so customers always trust your products.
            </p>
            <p> Regular cleans remove flour dust, grease and food residues that can damage ovens, mixers and ventilation
                over time.</p>
        </div>
    </section>

    <!-- 4. LIGHT-BLUE THREE CARD ROW -->
    <section class="cw-methods">
        <div class="cw-methods-inner">
            <div class="cw-methods-grid">
                <article class="cm-card">
                    <img src="<?php echo BASE_URL . 'includes/image/backery-1.jpg' ?>"
                        alt="Production Area & Equipment">
                    <h3>Production Area & Equipment</h3>
                    <p>
                        Deep cleaning for prep tables, mixers, ovens, provers, racks and trolleys so food‑contact
                        surfaces stay safe and compliant.

                        Degreasing of walls, floors and ceilings to remove baked‑on fats, steam deposits and flour
                        build‑up in high‑use zones.
                    </p>
                </article>

                <article class="cm-card">
                    <img src="<?php echo BASE_URL . 'includes/image/backery-2.jpg' ?>" alt="Front‑of‑House & Display">
                    <h3>Front‑of‑House & Display</h3>
                    <p>
                        Detailed cleaning of display counters, glass cabinets and serving areas so pastries and breads
                        are always presented in a fresh environment.

                        Scheduled floor and touch‑point cleaning around customer seating, payment counters and entrance
                        doors to keep the bakery looking welcoming.
                    </p>
                </article>

                <article class="cm-card">
                    <img src="<?php echo BASE_URL . 'includes/image/backery-3.jpg' ?>"
                        alt="High‑Level, Ventilation & Hard‑to‑Reach">
                    <h3>High‑Level, Ventilation & Hard‑to‑Reach</h3>
                    <p>
                        Cleaning of high‑level pipes, lights, extract hoods and vents to reduce dust and flour
                        accumulation that can affect air quality.

                        Safe methods for accessing awkward areas around ovens and ducting without disrupting your
                        production schedule.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- 5. LIGHT-BLUE TEXT + VIDEO/IMAGE ROW -->
    <section class="cw-about">
        <div class="cw-about-inner">
            <div class="cw-about-text">
                <h2>Why Bakeries Choose Our Cleaning Team</h2>
                <p>
                    Flexible visits arranged around baking times and overnight production, reducing downtime for your
                    business.
                </p>
                <p>
                    Consistent supervisors, checklists and hygiene reports so you can demonstrate regular cleaning to
                    auditors and brand partners.
                </p>
            </div>

            <div class="cw-about-media">
                <!-- replace with video iframe ya image -->
                <img src="<?php echo BASE_URL . 'includes/image/backery-4.png' ?>" alt="Window cleaning video">
            </div>
        </div>
    </section>

    <!-- 6. BOTTOM WHITE TEXT STRIP -->
    <section class="cw-more">
        <div class="cw-more-inner">
            <h2>So Much More Than Just Bakery Cleaning</h2>
            <p>
                Professional bakery cleaning can be combined with equipment sanitising, floor degreasing,
                ventilation cleaning or deep kitchen cleans so your entire workspace stays spotless and
                compliant. Talk to the team about building a cleaning package that fits your bakery.
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