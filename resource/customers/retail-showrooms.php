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

        <section class="sector-section">
            <div class="sector-inner">
                <div class="sector-image">
                    <img src="<?php echo BASE_URL . 'includes/image/retail.jpg' ?>" alt="Retail showrooms in Gujarat">
                </div>
                <div class="sector-text">
                    <h2>Retail Store &amp; Showroom Cleaning – Gujarat</h2>
                    <p>
                        CG Road, Sindhu Bhavan, Satellite, Dumas Road jaise retail zones me fashion, jewellery,
                        automobile aur electronics showrooms ko spotless glass, floors aur trial areas chahiye
                        hote hain. Clean environment se product display highlight hota hai.
                    </p>
                    <p>
                        Glass façade, display racks, fitting rooms, billing desk aur customer washrooms ke liye
                        tailored cleaning schedule milta hai. Store opening se pehle ya closing ke baad service
                        dekar footfall ko disturb kiye bina kaam complete kiya ja sakta hai.
                    </p>
                </div>
            </div>
        </section>


        <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
        <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
        <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

        <?php include ROOT_PATH . 'resource/footer.php'; ?>

        <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
    </body>

    </html>