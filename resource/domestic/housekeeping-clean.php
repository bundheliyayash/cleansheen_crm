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
            <h1>Housekeeping Services</h1>
        </div>
    </section>

    <!-- INTRO + BOOK -->
    <section class="hk-intro">
        <div class="hk-intro-inner">
            <p>
                Short paragraph about laundry, errands, shopping and extra help at home.
            </p>
            <a href="#housekeeping-form" class="btn-solid">Book Now</a>
        </div>
    </section>

    <!-- TWO WHITE BOXES -->
    <section class="hk-cards">
        <div class="hk-cards-inner">
            <article class="hk-card">
                <h2>What do our housekeeping services cover?</h2>
                <p>Explain chores: errands, washing, ironing, bed changing, hoovering, etc.</p>
            </article>
            <article class="hk-card">
                <h2>Who is in our housekeeping team?</h2>
                <p>Explain trusted, vetted staff, extra criteria, friendly people.</p>
            </article>
        </div>
    </section>

    <!-- BLUE BLOCK + VIDEO -->
    <section class="hk-london">
        <div class="hk-london-inner">
            <div class="hk-text">
                <h2>Housekeeping London</h2>
                <p>Explain local company, reliability and focus on customers.</p>
            </div>
            <div class="hk-video">
                <img src="assets/images/hk-video.jpg" alt="Housekeeping video">
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