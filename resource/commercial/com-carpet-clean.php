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
    <section class="cc-hero">
        <div class="cc-hero-overlay">
            <h1>Commercial Carpet Cleaning</h1>
        </div>
    </section>

    <!-- 2. GREEN FEATURES STRIP -->
    <section class="cc-features">
        <div class="cc-features-inner">
            <div class="cc-features-grid">
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-check-circle"></i></div>
                    <h3>100% Satisfaction Guaranteed</h3>
                    <p>If you are not happy we can return and re‑clean the area.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-clock"></i></div>
                    <h3>Flexible Days &amp; Times</h3>
                    <p>Early mornings, evenings and weekends available.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-spray-can"></i></div>
                    <h3>Stain Removal</h3>
                    <p>Many common carpet stains can be treated and reduced.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-soap"></i></div>
                    <h3>Cleaning Materials</h3>
                    <p>Professional machines and solutions are included.</p>
                </div>
                <div class="cf-item">
                    <div class="cf-icon"><i class="fas fa-microchip"></i></div>
                    <h3>Latest Technology</h3>
                    <p>Modern wet &amp; dry extraction equipment for deep cleaning.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. WHITE CONTENT BLOCK -->
    <section class="cc-intro">
        <div class="cc-intro-inner">
            <h2>Commercial Carpet Cleaning Service</h2>
            <p>
                Office and commercial carpets see heavy foot traffic, so regular professional cleaning is
                essential for hygiene and presentation. Our teams provide carpet cleaning for offices, retail
                sites, education buildings and more.
            </p>
            <p>
                We use powerful wet and dry extraction machines with industry‑approved products so your
                carpets are cleaned in depth without leaving residues.
            </p>

            <div class="cc-buttons">
                <a href="<?php echo BASE_URL . 'resource/about/contact-us.php' ?>" class="btn-outline">Enquire Now</a>
                <a href="tel:+9118008903513" class="btn-solid">
                    <i class="fas fa-phone"></i> Call Us
                </a>
            </div>
        </div>
    </section>
    <section class="carpet-methods">
        <div class="carpet-methods-inner">
            <h2>Our Carpet Commercial Cleaning Methods</h2>
            <div style="border: 1px solid #f6f2f7; padding:0 25px;">
                <!-- Tabs -->
                <div class="cm-tabs">
                    <button class="cm-tab active" data-target="#steam">Steam Carpet Cleaning</button>
                    <button class="cm-tab" data-target="#dry">Dry Cleaning Method</button>
                </div>

                <!-- Steam method -->
                <div id="steam" class="cm-panel active">
                    <h3>Steam Carpet Cleaning</h3>
                    <p>Short intro text about steam / hot water extraction method.</p>

                    <h4>Step 1: Survey and vacuum clean</h4>
                    <p>Explain survey and pre‑vacuum.</p>

                    <h4>Step 2: Carpet cleaning</h4>
                    <p>Explain injection / extraction process.</p>

                    <h4>Step 3: Stain protection</h4>
                    <p>Optional stain guard for high‑traffic areas.</p>

                    <h4>Step 4: Drying and ventilation</h4>
                    <p>Carpet mostly dry after clean; extra ventilation time if needed.</p>
                </div>

                <!-- Dry method -->
                <div id="dry" class="cm-panel">
                    <h3>Dry Carpet Cleaning Method</h3>
                    <p>Short intro text about low‑moisture, powder‑based cleaning.</p>

                    <h4>Step 1: Survey and vacuum clean</h4>
                    <p>Assessment and dry vacuum to remove loose soil.</p>

                    <h4>Step 2: Applying the powder</h4>
                    <p>Biodegradable compound spread evenly over the carpet.</p>

                    <h4>Step 3: Carpet cleaning</h4>
                    <p>Rotary brush works powder into fibres to loosen dirt.</p>

                    <h4>Step 4: Removing residue</h4>
                    <p>Industrial vacuum removes powder and lifted soil.</p>
                </div>
            </div>
            <!-- Images row -->
            <div class="cm-images">
                <img src="<?php echo BASE_URL . 'includes/image/messy-carper.jpg' ?>" alt="Carpet before cleaning">
                <img src="<?php echo BASE_URL . 'includes/image/after-carpet.webp' ?>" alt="Carpet after cleaning">
                <img src="<?php echo BASE_URL . 'includes/image/clean-carpet.jpg' ?>" alt="Cleaned carpet pattern">
                <img src="<?php echo BASE_URL . 'includes/image/clean-off-carpet.jpg' ?>" alt="Clean office carpet">
            </div>
        </div>
    </section>

    <section class="office-carpet">
        <div class="office-carpet-inner">
            <div class="oc-text">
                <h2>Office Carpet Cleaning</h2>
                <p>
                    Many offices and call centres rely on carpet for comfort and noise reduction. Our office
                    carpet cleaning service helps keep those areas fresh and presentable for staff and visitors.
                </p>
                <p>
                    We work around your shifts so we can clean outside busy hours and keep disruption to a
                    minimum. Visits can be weekly, monthly or just when you need a deeper clean.
                </p>
            </div>

            <div class="oc-image">
                <img src="<?php echo BASE_URL . 'includes/image/clean-carpet.jpg' ?>"
                    alt="Clean office carpet and chairs">
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