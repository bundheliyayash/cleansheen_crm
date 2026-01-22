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
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
            rel="stylesheet" />
        <link
            href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
            rel="stylesheet" />

        <!-- Icons + CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/style.css" />
    </head>

    <body>

        <?php include ROOT_PATH . 'resource/header.php'; ?>

        <!-- ================= RETAIL STORE & SHOWROOM CLEANING SERVICES ================= -->

        <section class="sector-section">
            <div class="sector-inner">
                <div class="sector-image">
                    <img src="<?php echo BASE_URL . 'includes/image/retail.jpg' ?>"
                        alt="Retail store and showroom cleaning services">
                </div>
                <div class="sector-text">
                    <h1>Retail Store &amp; Showroom Cleaning Services</h1>
                    <p>
                        Retail stores and showrooms require a clean and well-presented
                        environment to highlight products and enhance customer experience.
                        Spotless floors, glass surfaces, and display areas play a key role
                        in creating a positive first impression.
                    </p>
                    <p>
                        Our cleaning services are tailored for fashion, jewellery,
                        electronics, automobile, and lifestyle showrooms, ensuring
                        cleanliness without disrupting daily store operations.
                    </p>
                </div>
            </div>
        </section>

        <section class="sector-section">
            <div class="intro-inner">
                <div class="sector-text1 full-width">
                    <h2>Customer Areas &amp; Display Zone Cleaning</h2>
                    <p>
                        High-visibility retail areas require detailed cleaning to
                        maintain presentation standards and customer comfort.
                    </p>
                    <ul>
                        <li>Glass façades, windows, and entrance doors</li>
                        <li>Display racks, shelves, and product counters</li>
                        <li>Trial rooms, fitting areas, and mirrors</li>
                        <li>Billing counters and customer interaction zones</li>
                        <li>Store floors, carpets, and walkways</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="sector-section">
            <div class="intro-inner">
                <div class="sector-text1 full-width">
                    <h2>Back-End &amp; Support Area Cleaning</h2>
                    <p>
                        Clean back-end areas support smooth retail operations and
                        staff efficiency. Our services cover both visible and
                        non-visible store zones.
                    </p>
                    <ul>
                        <li>Storage rooms and inventory areas</li>
                        <li>Staff rooms and internal workspaces</li>
                        <li>Washrooms and utility areas</li>
                        <li>Service corridors and access points</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="sector-section">
            <div class="intro-inner">
                <div class="sector-text1 full-width">
                    <h2>Why Retail Brands Choose Our Cleaning Services</h2>
                    <p>
                        Retail businesses trust us for consistent service quality,
                        flexible scheduling, and attention to detail. We understand
                        the importance of cleanliness in customer engagement and sales.
                    </p>
                    <ul>
                        <li>Trained staff experienced in retail environments</li>
                        <li>Use of safe and surface-appropriate cleaning products</li>
                        <li>Cleaning before opening or after closing hours</li>
                        <li>Supervisor-led quality monitoring</li>
                        <li>Suitable for single stores and multi-location retail brands</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ================= END RETAIL STORE & SHOWROOM CLEANING SERVICES ================= -->



        <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
        <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
        <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

        <?php include ROOT_PATH . 'resource/footer.php'; ?>

        <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
    </body>

    </html>