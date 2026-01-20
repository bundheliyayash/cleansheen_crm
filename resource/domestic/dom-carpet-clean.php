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

    <!-- HERO + GREEN STRIP -->
    <section class="carp-hero">
        <!-- bg: close-up carpet + vacuum -->
        <div class="carp-hero-overlay">
            <h1>Carpet Cleaning</h1>
        </div>
    </section>

    <section class="carp-features">
        <div class="carp-features-inner">
            <div class="carp-features-grid">
                <!-- 100% SATISFACTION -->
                <div class="cf-item">
                    <div class="os-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>100% Satisfaction Guaranteed</h4>
                    <p>Free return visit if you are not happy.</p>
                </div>
                <!-- FLEXIBLE DAYS & TIMES -->
                <div class="cf-item">
                    <div class="os-icon"><i class="fa fas fa-sync-alt"></i></div>
                    <h4>Flexible Days &amp; Times</h4>
                    <p>Morning, evening and weekend appointments.</p>
                </div>
                <!-- STAIN & ODOUR REMOVAL -->
                <div class="cf-item">
                    <div class="os-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h4>Stain &amp; Odour Removal</h4>
                    <p>Treating common stains deep in the pile.</p>
                </div>
                <!-- CLEANING MATERIALS -->
                <div class="cf-item">
                    <div class="os-icon"><i class="fas fa-user-shield"></i></div>
                    <h4>Cleaning Materials</h4>
                    <p>All detergents and equipment supplied.</p>
                </div>
                <!-- LATEST TECHNOLOGY -->
                <div class="cf-item">
                    <div class="os-icon"><i class="fas fa-wallet"></i></div>
                    <h4>Latest Technology</h4>
                    <p>Industrial‑grade extraction machines.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- INTRO + BOOK NOW -->
    <section class="carp-intro">
        <div class="carp-intro-inner">
            <h2>Professional Carpet Cleaning Service</h2>
            <p>Short description of experience, service quality and areas covered.</p>
            <p>Mention combining with end of tenancy, deep clean, after‑building cleaning, etc.</p>
            <a href="<?php echo BASE_URL . 'resource/about/contact-us.php' ?>" class="btn-solid">Book Now</a>
        </div>
    </section>

    <!-- HIGHLY-RATED CARPET CLEANERS + VIDEO -->
    <section class="carp-rated">
        <div class="carp-rated-inner">
            <div class="carp-rated-text">
                <h2>Highly‑Rated Carpet Cleaners</h2>
                <p>Explain reviews, customer focus, and why clients rebook.</p>
            </div>
            <div class="carp-rated-video">
                <img src="<?php echo BASE_URL . 'includes/image/carpet-cleaning-1.jpg' ?>" alt="Carpet cleaning video">
            </div>
        </div>
    </section>

    <!-- HOW WE CLEAN YOUR CARPET (TABS) -->
    <section class="carp-methods">
        <div class="carp-methods-inner">
            <h2>How We Clean Your Carpet</h2>

            <!-- two tabs: Hot water extraction / Dry cleaning -->
            <div class="cm-tabs">
                <button class="cm-tab active" data-target="#hot-water">Hot water extraction method</button>
                <button class="cm-tab" data-target="#dry-method">Dry cleaning method</button>
            </div>

            <!-- HOT WATER PANEL -->
            <div id="hot-water" class="cm-panel active">
                <p>Short paragraph about hot water extraction.</p>
                <h3>Step 1: Pre‑cleaning survey &amp; vacuum</h3>
                <p>Explain inspection and dry vacuum.</p>
                <h3>Step 2: Cleaning with extraction machine</h3>
                <p>Explain injection, agitation and extraction.</p>
                <h3>Step 3: Stain protection (optional)</h3>
                <p>Describe protective treatment for busy areas.</p>
                <h3>Step 4: Drying &amp; ventilation</h3>
                <p>Advice on drying times and air flow.</p>
            </div>

            <!-- DRY PANEL -->
            <div id="dry-method" class="cm-panel">
                <p>Short paragraph about low‑moisture dry cleaning.</p>
                <!-- step headings similar to hot‑water section -->
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