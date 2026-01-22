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

    <!-- ========== 1. GYM HERO + FEATURE STRIP ========== -->
    <section class="gym-hero">
        <div class="gym-hero-overlay">
            <h1>Gym Cleaning Services</h1>
        </div>
    </section>

    <section class="gym-features">
        <div class="gym-features-inner">
            <div class="gym-features-grid">
                <div class="gf-item">
                    <div class="gf-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h3>Independent Family Business</h3>
                    <p>Local, reliable gym cleaning teams based close to your sites.</p>
                </div>
                <div class="gf-item">
                    <div class="gf-icon"><i class="fas fa-sync-alt"></i></div>
                    <h3>Replacement &amp; Sickness Cover</h3>
                    <p>Cover cleaners arranged when your regular cleaner is away.</p>
                </div>
                <div class="gf-item">
                    <div class="gf-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h3>No Hidden Costs</h3>
                    <p>Transparent quotes agreed in advance for all gym cleaning work.</p>
                </div>
                <div class="gf-item">
                    <div class="gf-icon"><i class="fas fa-user-shield"></i></div>
                    <h3>Insured &amp; Vetted Staff</h3>
                    <p>Background‑checked cleaners trained for hygiene in gyms.</p>
                </div>
                <div class="gf-item">
                    <div class="gf-icon"><i class="fas fa-wallet"></i></div>
                    <h3>Affordable</h3>
                    <p>Competitive prices that still deliver a high standard of cleaning.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== 2. GYM INTRO TEXT BLOCK ========== -->
    <section class="gym-intro">
        <div class="gym-intro-inner">
            <p>
                Gyms and sports centres can quickly get dirty. From equipment and locker rooms to showers,
                there are many areas that need regular cleaning to stay hygienic.
            </p>
            <p>
                Our gym cleaning services are designed to keep everything fresh and safe so you can focus on
                your members. We arrange schedules to match your opening hours and peak times.
            </p>
        </div>
    </section>

    <!-- ========== 3. IMPRESS YOUR MEMBERS BLOCK ========== -->
    <section class="gym-impress">
        <div class="gym-impress-inner">
            <h2>Impress Your Members, Visitors and Staff</h2>
            <p>
                A clean gym helps you stand out and reassures members that hygiene is taken seriously. From
                reception and communal areas to studios and spa facilities, we pay attention to every detail.
            </p>
            <p>
                We can clean early mornings, late evenings or weekends and can visit daily, weekly or
                fortnightly depending on how busy your gym is. All of this is discussed during a free
                consultation.
            </p>
        </div>
    </section>

    <!-- ========== 4. GYM SERVICE LIST (BLUE STRIP 2 COLUMNS) ========== -->
    <section class="gym-services">
        <div class="gym-services-inner">
            <div class="gym-services-left">
                <h3>Our gym cleaning service includes:</h3>
                <ul class="styled-list">
                    <li style="color:#555;">Gym areas and exercise equipment</li>
                    <li style="color:#555;">Locker rooms and changing areas</li>
                    <li style="color:#555;">Toilets, showers, sinks and urinals</li>
                    <li style="color:#555;">Studios and class rooms</li>
                </ul>
            </div>

            <div class="gym-services-right">
                <p>
                    We provide both regular and one‑off gym cleans, including deep cleans, carpet and mat
                    cleaning if required. Tell us what you need and we will build a plan around your facility.
                </p>
                <p>
                    You will have a dedicated account manager who looks after your schedule and is always
                    available to answer questions or adjust visits as membership numbers change.
                </p>
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