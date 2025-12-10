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

    <!-- ========== 1. HERO + FEATURES (TEMPLE) ========== -->
    <section class="temple-hero">
        <div class="temple-hero-overlay">
            <h1>Temple Cleaning Services</h1>
        </div>
    </section>

    <section class="temple-features">
        <div class="temple-features-inner">
            <div class="temple-features-grid">
                <div class="tf-item">
                    <div class="tf-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h3>Independent Family Business</h3>
                    <p>Local, reliable teams experienced in cleaning temples and prayer halls.</p>
                </div>
                <div class="tf-item">
                    <div class="tf-icon"><i class="fas fa-sync-alt"></i></div>
                    <h3>Replacement &amp; Sickness Cover</h3>
                    <p>Cover cleaners arranged when your regular cleaner is unavailable.</p>
                </div>
                <div class="tf-item">
                    <div class="tf-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h3>No Hidden Costs</h3>
                    <p>Transparent quotes agreed in advance for all temple cleaning work.</p>
                </div>
                <div class="tf-item">
                    <div class="tf-icon"><i class="fas fa-user-shield"></i></div>
                    <h3>Insured &amp; Vetted Staff</h3>
                    <p>Background‑checked cleaners who understand the respect needed in mandirs.</p>
                </div>
                <div class="tf-item">
                    <div class="tf-icon"><i class="fas fa-wallet"></i></div>
                    <h3>Affordable</h3>
                    <p>Cost‑effective plans that protect both your devotees and your budget.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== 2. MAIN CONTENT + IMAGE + SERVICES LIST ========== -->
    <section class="temple-main">
        <div class="temple-main-inner">
            <p class="temple-intro">
                If you need professional temple cleaning in your city, our team is here to help. We understand how
                important it is to keep mandirs peaceful, clean and welcoming for devotees, volunteers and visitors.
                From daily floor cleaning to festival deep cleans, we create a plan that respects your schedule
                and rituals.
            </p>

            <div class="temple-main-layout">
                <div class="temple-photo">
                    <img src="<?php echo BASE_URL . 'includes/image/temple-clean.png'?>" alt="Temple cleaning services">
                    <p class="temple-photo-caption">Temple Cleaning Services in Gujarat</p>
                </div>

                <div class="temple-text">
                    <h2>Our Temple Cleaning Services</h2>
                    <p>
                        Our temple cleaning services can include:
                    </p>
                    <ul>
                        <li>Sanctum and main prayer hall cleaning</li>
                        <li>Marble and tile floor sweeping, mopping and polishing</li>
                        <li>Cleaning of diyas, lamps and surrounding areas</li>
                        <li>Dusting and wiping of idols’ platforms and railings (as instructed by the committee)</li>
                        <li>Cleaning of donation counters and shoe racks</li>
                        <li>Washrooms and hand‑wash areas for devotees</li>
                        <li>Guest rooms, office rooms and community halls within the temple complex</li>
                    </ul>
                    <p>
                        Every mandir is different, so we work closely with the management committee to agree what
                        areas can be touched, which materials are allowed, and the best times for cleaning.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== 3 & 4. EXTRA SERVICES BLUE STRIP (TWO COLUMNS) ========== -->
    <section class="temple-extra">
        <div class="temple-extra-inner">
            <div class="temple-extra-block">
                <h3>Additional temple cleaning services</h3>
                <ul>
                    <li>Festival and event deep cleaning</li>
                    <li>Garland &amp; flower area cleaning</li>
                    <li>Antiviral disinfecting of common touch points</li>
                    <li>Washroom &amp; ablution area sanitising</li>
                    <li>Window and high‑level cobweb removal</li>
                </ul>
            </div>

            <div class="temple-extra-block">
                <h3>Why mandirs choose our team</h3>
                <p>
                    Our cleaning operatives receive special training for working in religious spaces. They understand
                    how to maintain silence where required, follow dress codes and respect all customs.
                </p>
                <p>
                    You will have a dedicated contact to coordinate timings around aartis, bhajans and special
                    functions so cleaning never disturbs devotees.
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