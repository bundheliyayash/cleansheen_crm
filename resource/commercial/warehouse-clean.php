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

    <!-- ===== 1. TOP HERO CARDS ===== -->
    <section class="wh-hero-cards">
        <div class="wh-hero-bg">
            <div class="wh-hero-grid">
                <div class="wh-hero-card">
                    <div class="wh-hero-icon"><i class="fas fa-user-check"></i></div>
                    <h3>Handpicked Cleaners</h3>
                    <p>Carefully selected staff for your warehouse cleaning needs.</p>
                </div>
                <div class="wh-hero-card">
                    <div class="wh-hero-icon"><i class="fas fa-clock"></i></div>
                    <h3>Flexible Schedules</h3>
                    <p>Morning, afternoon or night shifts to avoid disruption.</p>
                </div>
                <div class="wh-hero-card">
                    <div class="wh-hero-icon"><i class="fas fa-thumbs-up"></i></div>
                    <h3>Trusted Cleaners</h3>
                    <p>Experienced teams used to working in busy warehouse sites.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== 2. TITLE + GREEN FEATURE STRIP ===== -->
    <section class="wh-title-strip">
        <h1>Warehouse Cleaning</h1>
    </section>

    <section class="wh-features">
        <div class="wh-features-inner">
            <div class="wh-features-grid">
                <div class="wf-item">
                    <div class="wf-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h3>Local Cleaners</h3>
                    <p>Staff based close to your warehouse to reduce travel time.</p>
                </div>
                <div class="wf-item">
                    <div class="wf-icon"><i class="fas fa-sync-alt"></i></div>
                    <h3>Replacement Cover</h3>
                    <p>Stand‑in cleaners provided if your usual cleaner is away.</p>
                </div>
                <div class="wf-item">
                    <div class="wf-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h3>No Hidden Costs</h3>
                    <p>Clear pricing shared before the cleaning contract starts.</p>
                </div>
                <div class="wf-item">
                    <div class="wf-icon"><i class="fas fa-user-shield"></i></div>
                    <h3>Insured Staff</h3>
                    <p>Vetted, trained cleaners with full insurance cover.</p>
                </div>
                <div class="wf-item">
                    <div class="wf-icon"><i class="fas fa-wallet"></i></div>
                    <h3>Cost‑Effective</h3>
                    <p>Affordable warehouse cleaning suitable for most budgets.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== 3. INTRO + BENEFITS + BOTTOM ICONS ===== -->
    <section class="wh-intro">
        <div class="wh-intro-inner">
            <div class="wh-intro-grid">
                <div class="wh-intro-text">
                    <h2>Warehouse Cleaning Services</h2>
                    <p>
                        Professional warehouse cleaning keeps stock areas safe, tidy and efficient. Our cleaners
                        can work around shift patterns so your teams can keep operating while we clean.
                    </p>
                    <p>
                        Services can include emptying bins, sweeping and mopping floors, wiping racking, cleaning
                        washrooms and break areas, and targeted deep cleans during shutdowns.
                    </p>
                    <div class="wh-intro-btns">
                        <a href="<?php echo BASE_URL . 'resource/about/contact-us.php' ?>" class="btn-outline">Enquire</a>
                        <a href="tel:+9118008903513" class="btn-solid"><i class="fas fa-phone"></i> Call Us</a>
                    </div>
                </div>
                <div class="wh-intro-image">
                    <img src="<?php echo BASE_URL . 'includes/image/warehouse-man.png' ?>"
                        alt="Warehouse cleaning staff">
                </div>
            </div>
        </div>
    </section>

    <section class="wh-benefits">
        <div class="wh-benefits-inner">
            <h2>Benefits of Our Warehouse Cleaning</h2>
            <p>
                Regular, professional cleaning helps reduce accidents, improves hygiene for staff and keeps
                your stock areas looking presentable for visitors and audits.
            </p>

            <div class="wh-benefits-grid">
                <div class="wb-item">
                    <div class="wb-icon"><i class="fas fa-user-tie"></i></div>
                    <h3>One Point of Contact</h3>
                    <p>Dedicated manager who looks after your warehouse contract.</p>
                </div>
                <div class="wb-item">
                    <div class="wb-icon"><i class="fas fa-eye"></i></div>
                    <h3>Attendance Monitoring</h3>
                    <p>Time‑tracking to confirm when cleaners are on‑site.</p>
                </div>
                <div class="wb-item">
                    <div class="wb-icon"><i class="fas fa-leaf"></i></div>
                    <h3>Sustainability</h3>
                    <p>Option for eco‑friendly products and waste‑reduction focus.</p>
                </div>
                <div class="wb-item">
                    <div class="wb-icon"><i class="fas fa-heartbeat"></i></div>
                    <h3>Health &amp; Safety</h3>
                    <p>Methods designed to support your H&amp;S and risk assessments.</p>
                </div>
                <div class="wb-item">
                    <div class="wb-icon"><i class="fas fa-user-check"></i></div>
                    <h3>Supervisor Visits</h3>
                    <p>Supervisors review standards and support cleaners on‑site.</p>
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