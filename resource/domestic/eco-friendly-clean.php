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
    <section class="eco-hero">
        <!-- bg: lake/forest image -->
        <div class="eco-hero-overlay">
            <h1>Eco‑Friendly Cleaning</h1>
        </div>
    </section>

    <!-- INTRO + BOOK NOW -->
    <section class="eco-intro">
        <div class="eco-intro-inner">
            <p class="eco-lead">
                Our eco-friendly cleaning services use plant-based, non-toxic products that are
                safe for children, pets, and the planet — without compromising on results.
            </p>
            <p>
                More and more households are switching to eco cleaning to reduce their carbon
                footprint while maintaining a healthy home environment. We make that transition
                simple, effective, and affordable.
            </p>
            <a href="<?php echo BASE_URL . 'resource/about/contact-us.php' ?>" class="btn-solid">Book Now</a>
        </div>
    </section>

    <!-- WHY CHOOSE OUR ECO-FRIENDLY CLEANING -->
    <section class="eco-why">
        <div class="eco-why-inner">
            <h2>Why Choose Our Eco-Friendly Cleaning?</h2>

            <div class="eco-why-grid">
                <div class="ew-card">
                    <h3>Sensitive to Cleaning Products</h3>
                    <p>
                        Ideal for clients who experience skin irritation, asthma, or sensitivities.
                        We use gentle alternatives that are effective yet non-irritating.
                    </p>
                </div>

                <div class="ew-card">
                    <h3>Changing Household Needs</h3>
                    <p>
                        Whether you’ve welcomed a new baby, a pet, or developed allergies,
                        we adapt our products to suit your current lifestyle.
                    </p>
                </div>

                <div class="ew-card">
                    <h3>No Harsh Chemicals</h3>
                    <p>
                        We avoid aggressive chemicals while still delivering a deep, thorough clean
                        — leaving your home fresh, safe, and residue-free.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- GREEN ICON STRIP (same domestic icons) -->
    <section class="eco-features">
        <div class="eco-features-inner">
            <div class="eco-features-grid">
                <div>
                    <div class="os-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Local Family Business</h4>
                    <p>Local workers and community links.</p>
                </div>
                <div>
                    <div class="os-icon"><i class="fa fas fa-sync-alt"></i></div>
                    <h4>Flexible Times &amp; Schedules</h4>
                    <p>Visits fitted around your routine.</p>
                </div>
                <div>
                    <div class="os-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h4>Flexible Tasks</h4>
                    <p>Ironing, laundry and regular tasks included.</p>
                </div>
                <div>
                    <div class="os-icon"><i class="fas fa-user-shield"></i></div>
                    <h4>No Extra Charges</h4>
                    <p>All fees agreed in advance.</p>
                </div>
                <div>
                    <div class="os-icon"><i class="fas fa-wallet"></i></div>
                    <h4>Happy Cleaners</h4>
                    <p>Fair wages and training.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT ECO-FRIENDLY + VIDEO -->
    <section class="eco-about">
        <div class="eco-about-inner">
            <div class="eco-about-text">
                <h2>A Family-Owned Business That Cares</h2>
                <p>
                    We are a family-owned cleaning company built on trust, care, and responsibility.
                    Our commitment goes beyond spotless homes — we genuinely care about the health
                    of our customers, our staff, and the environment.
                </p>
                <p>
                    By choosing eco-friendly products and sustainable methods, we help reduce
                    environmental impact while delivering safe, reliable, and high-quality cleaning
                    services you can feel good about.
                </p>
            </div>
            <div class="eco-about-video">
                <img src="<?php echo BASE_URL . '/includes/image/eco-friendly-1.avif'?>" alt="Eco-friendly cleaning process">
            </div>
        </div>
    </section>

    <!-- ECO-FRIENDLY REGULAR CLEANING -->
    <section class="eco-regular">
        <div class="eco-regular-inner">
            <h2>Eco-Friendly Regular Cleaning</h2>

            <div class="eco-regular-content">
                <div class="eco-regular-media">
                    <img src="<?php echo BASE_URL . '/includes/image/eco-friendly-2.avif'?>" alt="Eco-friendly regular cleaning">
                </div>

                <div class="eco-regular-text">
                    <p>
                        Our eco-friendly regular cleaning service keeps your home consistently
                        clean using non-toxic, biodegradable products that are safe for everyday living.
                    </p>
                    <p>
                        Perfect for weekly or fortnightly visits, this service maintains hygiene
                        standards while protecting indoor air quality and reducing chemical exposure.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ECO-FRIENDLY REGULAR TASK CARDS -->
    <section class="eco-regular-tasks">
        <div class="eco-regular-tasks-inner">
            <div class="eco-tasks-grid">
                <div class="eco-task-card">
                    <h3>Kitchen</h3>
                    <p>
                        Worktops, sinks, appliances, and floors cleaned using food-safe,
                        eco-friendly products.
                    </p>
                </div>

                <div class="eco-task-card">
                    <h3>Bedroom</h3>
                    <p>
                        Dusting, vacuuming, and optional bed linen changes for a fresh,
                        comfortable sleeping environment.
                    </p>
                </div>

                <div class="eco-task-card">
                    <h3>Bathroom</h3>
                    <p>
                        Toilets, basins, tiles, and showers cleaned using low-impact,
                        non-toxic cleaning agents.
                    </p>
                </div>

                <div class="eco-task-card">
                    <h3>Living &amp; Hall</h3>
                    <p>
                        Furniture, glass, and flooring cleaned with gentle eco solutions
                        that protect surfaces and air quality.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ECO-FRIENDLY ONE-OFF SERVICES -->
    <section class="eco-oneoff">
        <div class="eco-oneoff-inner">
            <h2>Eco-Friendly One-Off Services</h2>

            <div class="eco-oneoff-grid">
                <div class="eo-card">
                    <h3>Ironing Only</h3>
                    <p>
                        Convenient hourly ironing services carried out in your home,
                        saving time and effort.
                    </p>
                </div>

                <div class="eo-card">
                    <h3>Deep Clean</h3>
                    <p>
                        A detailed, top-to-bottom clean using eco-friendly products,
                        ideal for seasonal or intensive cleaning needs.
                    </p>
                </div>

                <div class="eo-card">
                    <h3>Steam Cleaning</h3>
                    <p>
                        High-temperature steam cleaning for floors and upholstery,
                        reducing the need for chemicals.
                    </p>
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