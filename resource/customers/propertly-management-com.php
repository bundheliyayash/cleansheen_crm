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

    <section class="sector-section">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="assets/images/property-management.jpg" alt="Property management companies Gujarat">
            </div>
            <div class="sector-text">
                <h2>Property Management Cleaning – Gujarat Societies</h2>
                <p>
                    Ahmedabad, Vadodara aur Surat ke large residential societies aur commercial complexes
                    aksar facility management companies ke through maintain hote hain. In clients ko reliable
                    cleaning partner chahiye jo long‑term contracts handle kar sake.
                </p>
                <p>
                    Staircases, lifts, parking, common washrooms, club house, garden paths aur security cabin
                    jaise common areas ke liye daily schedule bana kar supervisors ke through monitor kiya
                    ja sakta hai. AMC type agreements ke saath periodic deep cleaning bhi plan ho sakti hai.
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