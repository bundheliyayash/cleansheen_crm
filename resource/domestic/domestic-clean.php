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

    <!-- 2.1 Hero + 3 cards -->
    <section class="domestic-hero">
        <div class="domestic-hero-overlay">
            <h1>Domestic Cleaning Services</h1>

            <div class="dom-hero-cards">
                <div class="dom-hero-card">
                    <h3>Affordable</h3>
                    <p>Regular domestic cleaning at clear hourly rates.</p>
                </div>
                <div class="dom-hero-card">
                    <h3>Insured &amp; Vetted Staff</h3>
                    <p>Only fully‑checked and insured house cleaners.</p>
                </div>
                <div class="dom-hero-card">
                    <h3>Replacement &amp; Sickness Cover</h3>
                    <p>Back‑up cleaners available when needed.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2.2 Green features row -->
    <section class="domestic-features">
        <div class="domestic-features-inner">
            <div class="domestic-features-grid">
                <div>
                    <h4>Local Family Business</h4>
                    <p>Local staff who know the area.</p>
                </div>
                <div>
                    <h4>Flexible Times</h4>
                    <p>Mornings, evenings and weekends.</p>
                </div>
                <div>
                    <h4>Flexible Tasks</h4>
                    <p>Ironing, bed changing and more.</p>
                </div>
                <div>
                    <h4>No Extra Charges</h4>
                    <p>All fees confirmed before we start.</p>
                </div>
                <div>
                    <h4>Happy Cleaners</h4>
                    <p>Fair pay and ongoing training.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 2.3 Booking steps (4 cards) -->
    <section class="domestic-booking">
        <div class="domestic-booking-inner">
            <h2>Booking Your Regular Cleaning Service</h2>

            <div class="domestic-booking-grid">
                <div class="db-step">
                    <div class="db-number">1</div>
                    <h3>Book Your Cleaner</h3>
                    <p>Fill out the booking form or call the office.</p>
                </div>
                <div class="db-step">
                    <div class="db-number">2</div>
                    <h3>Availability Check</h3>
                    <p>We confirm price, schedule and requirements.</p>
                </div>
                <div class="db-step">
                    <div class="db-number">3</div>
                    <h3>Confirmation</h3>
                    <p>Payment plan and cleaner details are agreed.</p>
                </div>
                <div class="db-step">
                    <div class="db-number">4</div>
                    <h3>Cleaning Starts</h3>
                    <p>Your regular cleaner begins on the booked date.</p>
                </div>
            </div>

            <div class="domestic-booking-buttons">
                <a href="#request-form" class="btn-solid">Book Now</a>
                <a href="tel:+919999999999" class="btn-outline">Call Us</a>
            </div>
        </div>
    </section>

    <!-- 2.4 House cleaning tasks (4 cards) -->
    <section class="domestic-tasks">
        <div class="domestic-tasks-inner">
            <h2>House Cleaning Tasks We Will Cover</h2>

            <div class="domestic-tasks-grid">
                <div class="dt-card">
                    <h3>Kitchen</h3>
                    <p>Worktops, appliances, cupboard fronts, sink and floors.</p>
                </div>
                <div class="dt-card">
                    <h3>Bedroom</h3>
                    <p>Dusting, bed making, mirrors and vacuuming.</p>
                </div>
                <div class="dt-card">
                    <h3>Bathroom</h3>
                    <p>Toilets, showers, tiles and glass cleaned and sanitised.</p>
                </div>
                <div class="dt-card">
                    <h3>Living &amp; Hall</h3>
                    <p>Surfaces, skirting, picture frames and floors.</p>
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