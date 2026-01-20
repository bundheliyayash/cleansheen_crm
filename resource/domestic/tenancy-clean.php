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

    <!-- 1.1 Hero + top 3 cards -->
    <section class="eot-hero">
        <div class="eot-hero-overlay">
            <h1 class="dom-hero-card">End of Tenancy Cleaning</h1>

            <div class="eot-hero-cards">
                <div class="eot-hero-card">
                    <h3>100% Satisfaction Guaranteed</h3>
                    <p>If you are not satisfied we can return and re‑clean for free.</p>
                </div>
                <div class="eot-hero-card">
                    <h3>Cleaning Materials Included</h3>
                    <p>All solutions and equipment supplied by our team.</p>
                </div>
                <div class="eot-hero-card">
                    <h3>Oven Cleaning Included</h3>
                    <p>Professional oven clean as part of the service.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 1.2 Green features strip -->
    <section class="eot-features">
        <div class="eot-features-inner">
            <div class="eot-features-grid">
                <div class="ef-item">
                    <div class="os-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Comprehensive Insurance</h4>
                    <p>Public liability cover for peace of mind.</p>
                </div>
                <div class="ef-item">
                    <div class="os-icon"><i class="fa fas fa-sync-alt"></i></div>
                    <h4>100% Guarantee</h4>
                    <p>Return visits if areas are missed.</p>
                </div>
                <div class="ef-item">
                    <div class="os-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h4>Keys Picked Up</h4>
                    <p>We can collect keys from agents if needed.</p>
                </div>
                <div class="ef-item">
                    <div class="os-icon"><i class="fas fa-user-shield"></i></div>
                    <h4>Happy Cleaners</h4>
                    <p>Fair pay and training mean motivated teams.</p>
                </div>
                <div class="ef-item">
                    <div class="os-icon"><i class="fas fa-wallet"></i></div>
                    <h4>Specially Trained</h4>
                    <p>Operatives trained in end of tenancy checklists.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 1.4 Booking steps (3 cards) -->
    <section class="eot-booking">
        <div class="eot-booking-inner">
            <h2>Booking Your End of Tenancy Clean</h2>

            <div class="eot-booking-grid">
                <div class="eb-step">
                    <div class="eb-number">1</div>
                    <h3>Request a Quote</h3>
                    <p>Complete the online form with property details.</p>
                </div>
                <div class="eb-step">
                    <div class="eb-number">2</div>
                    <h3>Let Us Confirm</h3>
                    <p>We confirm price, availability and any extras.</p>
                </div>
                <div class="eb-step">
                    <div class="eb-number">3</div>
                    <h3>Await Your Cleaner</h3>
                    <p>Our team arrives and takes care of the clean.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 1.5 Tenants / Landlords / Estate Agents -->
    <section class="eot-roles">
        <h2>Professional Property Cleaning</h2>
        <div class="eot-roles-inner">
            <div class="eot-role">
                <h3>Tenants</h3>
                <p>Move out faster and help protect your deposit with a professional clean.</p>
            </div>
            <div class="eot-role">
                <h3>Landlords</h3>
                <p>Prepare properties for new tenants and keep standards consistent.</p>
            </div>
            <div class="eot-role">
                <h3>Estate Agents</h3>
                <p>Show homes in the best condition with trusted cleaning partners.</p>
            </div>
        </div>
    </section>

    <!-- 1.6 Checklist (3 columns of bullets) -->
    <section class="eot-checklist">
        <div class="eot-checklist-inner">
            <h2>End of Tenancy Cleaning Checklist</h2>

            <div class="eot-checklist-grid">
                <ul>
                    <li>Oven &amp; cooker</li>
                    <li>Fridge &amp; freezer (inside &amp; out)</li>
                    <li>Kitchen cupboards</li>
                </ul>
                <ul>
                    <li>Bathrooms &amp; toilets</li>
                    <li>Windows (inside)</li>
                    <li>Dusting &amp; cobweb removal</li>
                </ul>
                <ul>
                    <li>Vacuum &amp; mop floors</li>
                    <li>Skirting boards &amp; doors</li>
                    <li>Light switches &amp; sockets</li>
                </ul>
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