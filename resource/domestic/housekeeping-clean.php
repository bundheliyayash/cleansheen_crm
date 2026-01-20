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

    <!-- HERO -->
    <section class="hk-hero">
        <div class="hk-hero-overlay">
            <h1 class="dom-hero-card">Housekeeping Services</h1>
        </div>
    </section>

    <!-- INTRO + BOOK -->
    <section class="hk-intro">
        <div class="hk-intro-inner">
            <p>
                Our housekeeping services provide extra help around the home, taking care of
                everyday tasks such as laundry, ironing, errands, and light household duties.
                Ideal for busy professionals, families, or anyone who needs reliable support
                to keep their home running smoothly.
            </p>
            <a href="<?php echo BASE_URL . 'resource/about/contact-us.php' ?>" class="btn-solid">Book Now</a>
        </div>
    </section>

    <!-- TWO WHITE BOXES -->
    <section class="hk-cards">
        <div class="hk-cards-inner">
            <article class="hk-card">
                <h2>What Do Our Housekeeping Services Cover?</h2>
                <p>
                    Our housekeeping service is flexible and tailored to your needs. Tasks can
                    include laundry and ironing, changing bed linen, light cleaning and
                    hoovering, grocery shopping, errands, and general household organisation.
                    We focus on the practical day-to-day jobs that make life easier.
                </p>
            </article>

            <article class="hk-card">
                <h2>Who Is in Our Housekeeping Team?</h2>
                <p>
                    Our housekeepers are carefully selected, fully vetted, and trained to
                    deliver a high standard of service. Friendly, trustworthy, and reliable,
                    they are chosen not only for their experience but also for their attention
                    to detail and respectful approach in your home.
                </p>
            </article>
        </div>
    </section>

    <!-- BLUE BLOCK + VIDEO -->
    <section class="hk-london">
        <div class="hk-london-inner">
            <div class="hk-text">
                <h2>Housekeeping in London</h2>
                <p>
                    As a local London housekeeping company, we understand the importance of
                    reliability and consistency. Our focus is on building long-term
                    relationships with our clients by delivering dependable support and a
                    personal service you can trust.
                </p>
            </div>
            <div class="hk-video">
                <img src="<?php echo BASE_URL . 'includes/image/Housekeeping-1.webp' ?>" alt="Professional housekeeping service">
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