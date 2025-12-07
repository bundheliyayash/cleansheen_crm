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

    <!-- 1. HERO -->
    <section class="ws-hero">
        <div class="ws-hero-overlay">
            <h1>Washroom Services</h1>
        </div>
    </section>

    <!-- 2. INTRO WHITE BLOCK -->
    <section class="ws-intro">
        <div class="ws-intro-inner">
            <h2>Washroom Services for Offices &amp; Commercial Sites</h2>
            <p>
                From busy offices to retail units and gyms, clean washrooms make a huge difference to how
                staff and visitors feel. Our team can install and maintain sanitary bins and washroom
                equipment while disposing of waste in line with regulations.
            </p>
            <p>
                With regular visits you get peace of mind that your washrooms are stocked, hygienic and
                welcoming every day.
            </p>
        </div>
    </section>

    <!-- 3A. BLUE ROW: IMAGE + SANITARY BIN TEXT -->
    <section class="ws-blue">
        <div class="ws-blue-row ws-row-top">
            <div class="ws-image">
                <img src="assets/images/washroom-sani.jpg" alt="Sanitary bins and hygiene products">
            </div>

            <div class="ws-text">
                <h2>Sanitary Bin Services</h2>
                <p>
                    Discreet and professional feminine hygiene disposal service for your female staff and
                    visitors.
                </p>
                <h3>Service highlights include:</h3>
                <ul>
                    <li>No minimum contract requirement</li>
                    <li>Installation and regular servicing of bins</li>
                    <li>Safe waste removal and replacement liners each visit</li>
                    <li>Emergency callouts when extra visits are needed</li>
                    <li>Options for monthly or more frequent service</li>
                </ul>
            </div>
        </div>

        <!-- 3B. BLUE ROW: LIST + IMAGE + SHORT TEXT -->
        <div class="ws-blue-row ws-row-bottom">
            <div class="ws-col">
                <h3>Additional washroom services</h3>
                <ul>
                    <li>Air freshener systems</li>
                    <li>Air purification units</li>
                    <li>Electric hand dryers</li>
                    <li>Soap and sanitiser dispensers</li>
                    <li>Paper and linen towel services</li>
                    <li>Nappy &amp; sharps bin servicing</li>
                </ul>
            </div>

            <div class="ws-image">
                <img src="assets/images/washroom-hands.jpg" alt="Hand washing in washroom">
            </div>

            <div class="ws-col">
                <p>
                    Washroom services can be added to your existing cleaning contract or booked separately as a
                    standalone service. Tell us how many washrooms you have and how often they are used, and we
                    will propose a visit schedule that keeps everything topped up and hygienic.
                </p>
                <a href="#request-form" class="btn-solid">Get a Quote</a>
            </div>
        </div>
    </section>

    <!-- 4. BOTTOM GREEN FEATURES STRIP -->
    <section class="ws-features">
        <div class="ws-features-inner">
            <div class="ws-features-grid">
                <div class="wf-item">
                    <div class="wf-icon"><i class="fas fa-user-tie"></i></div>
                    <h3>Independent Family Business</h3>
                    <p>Focused on reliable, friendly washroom care.</p>
                </div>
                <div class="wf-item">
                    <div class="wf-icon"><i class="fas fa-sync-alt"></i></div>
                    <h3>Replacement Cover</h3>
                    <p>Back‑up operatives available if your regular cleaner is away.</p>
                </div>
                <div class="wf-item">
                    <div class="wf-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h3>No Hidden Costs</h3>
                    <p>Clear pricing for all consumables and services.</p>
                </div>
                <div class="wf-item">
                    <div class="wf-icon"><i class="fas fa-user-shield"></i></div>
                    <h3>Insured &amp; Trained Staff</h3>
                    <p>Operatives trained for safe waste handling and hygiene.</p>
                </div>
                <div class="wf-item">
                    <div class="wf-icon"><i class="fas fa-wallet"></i></div>
                    <h3>Affordable</h3>
                    <p>Plans to suit both small offices and large multi‑site clients.</p>
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