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
    <section class="cw-hero">
        <div class="cw-hero-overlay">
            <h1>Commercial Window Cleaning</h1>
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
            <h2>Commercial Window Cleaners for Your City</h2>
            <p>
                Professional window cleaning improves the look of your buildings and helps protect glass from
                long‑term damage. Our teams are experienced with offices, retail units and high‑rise sites.
            </p>
            <p>
                Cleans are scheduled to suit your business and can be combined with regular commercial cleaning
                so your façade always looks welcoming.
            </p>
        </div>
    </section>

    <!-- 4. LIGHT-BLUE THREE CARD ROW -->
    <section class="cw-methods">
        <div class="cw-methods-inner">
            <div class="cw-methods-grid">
                <article class="cm-card">
                    <img src="assets/images/window-waterfed.jpg" alt="Water fed pole system">
                    <h3>Water Fed Pole System</h3>
                    <p>
                        Pure‑water systems reach multiple storeys from ground level with no need for ladders, ideal
                        for glass, cladding and frames.
                    </p>
                </article>

                <article class="cm-card">
                    <img src="assets/images/window-traditional.jpg" alt="Traditional window cleaning">
                    <h3>Traditional Window Cleaning</h3>
                    <p>
                        For shopfronts and low‑level glazing we still offer classic squeegee cleaning by hand.
                    </p>
                </article>

                <article class="cm-card">
                    <img src="assets/images/window-access.jpg" alt="Abseiling and access">
                    <h3>Abseiling &amp; Access</h3>
                    <p>
                        For very high or awkward buildings we can use rope access or platforms operated by trained
                        specialists.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- 5. LIGHT-BLUE TEXT + VIDEO/IMAGE ROW -->
    <section class="cw-about">
        <div class="cw-about-inner">
            <div class="cw-about-text">
                <h2>Why Businesses Choose Our Window Team</h2>
                <p>
                    As an independent company we focus on reliable results and clear communication. Our office
                    team and supervisors make sure visits fit around your working hours.
                </p>
                <p>
                    Regular quality checks and feedback help keep standards high for every clean, from small
                    offices to landmark buildings.
                </p>
            </div>

            <div class="cw-about-media">
                <!-- replace with video iframe ya image -->
                <img src="assets/images/window-video-placeholder.jpg" alt="Window cleaning video">
            </div>
        </div>
    </section>

    <!-- 6. BOTTOM WHITE TEXT STRIP -->
    <section class="cw-more">
        <div class="cw-more-inner">
            <h2>So Much More Than Just Window Cleaning</h2>
            <p>
                High‑level window work can be combined with façade cleaning, gutter clearing or jet‑wash
                services so your whole exterior looks fresh. Talk to the team about building a package that
                fits your site.
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