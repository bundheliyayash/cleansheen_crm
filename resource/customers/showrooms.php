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

        <!-- ================= BIG SHOWROOM CLEANING SERVICES ================= -->

        <section class="sector-section">
            <div class="sector-inner">
                <div class="sector-image">
                    <img src="<?php echo BASE_URL . 'includes/image/big-showroom-cleaning.jpg' ?>"
                        alt="Large format showroom cleaning services">
                </div>
                <div class="sector-text">
                    <h1>Large Format &amp; Big Showroom Cleaning Services</h1>
                    <p>
                        Large showrooms require a structured and professional cleaning
                        approach due to high footfall, expansive display areas, and
                        premium presentation standards. Clean floors, glass surfaces,
                        and organised layouts enhance product visibility and customer experience.
                    </p>
                    <p>
                        Our cleaning services are designed to support big showrooms,
                        flagship stores, and multi-floor retail spaces without
                        interrupting daily operations.
                    </p>
                </div>
            </div>
        </section>

        <section class="sector-section">
            <div class="intro-inner">
                <div class="sector-text1 full-width">
                    <h2>High-Traffic Customer Area Cleaning</h2>
                    <p>
                        High footfall areas require frequent and detailed cleaning to
                        maintain hygiene and visual appeal throughout operating hours.
                    </p>
                    <ul>
                        <li>Main showroom floors and walkways</li>
                        <li>Glass panels, partitions, and façades</li>
                        <li>Product display zones and demo areas</li>
                        <li>Trial rooms, seating zones, and waiting areas</li>
                        <li>Customer washrooms and entry lobbies</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="sector-section">
            <div class="intro-inner">
                <div class="sector-text1 full-width">
                    <h2>Multi-Floor &amp; Back-End Cleaning Support</h2>
                    <p>
                        Large showrooms often include multiple levels and extensive
                        back-end areas that require systematic cleaning.
                    </p>
                    <ul>
                        <li>Staircases, escalators, and lift areas</li>
                        <li>Storage rooms and inventory sections</li>
                        <li>Staff workspaces and internal corridors</li>
                        <li>Service zones and loading areas</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="sector-section">
            <div class="intro-inner">
                <div class="sector-text1 full-width">
                    <h2>Why Large Showrooms Choose Our Services</h2>
                    <p>
                        Big retail spaces rely on us for our manpower strength,
                        operational discipline, and ability to manage large
                        commercial environments efficiently.
                    </p>
                    <ul>
                        <li>Trained teams for large-format retail spaces</li>
                        <li>Use of professional equipment for wide areas</li>
                        <li>Flexible service hours to match showroom timings</li>
                        <li>Supervisor-led operations and quality checks</li>
                        <li>Ideal for flagship stores and premium retail brands</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- ================= END BIG SHOWROOM CLEANING SERVICES ================= -->



        <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
        <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
        <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

        <?php include ROOT_PATH . 'resource/footer.php'; ?>

        <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
    </body>

    </html>