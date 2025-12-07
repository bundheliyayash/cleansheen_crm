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

    <section class="sector-section sector-section--alt">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="assets/images/industrial.jpg" alt="Industrial units in Gujarat">
            </div>
            <div class="sector-text">
                <h2>Industrial &amp; Warehouse Cleaning – Gujarat</h2>
                <p>
                    Sanand, Vapi, Ankleshwar, Hazira jaise industrial belts me manufacturing plants aur
                    warehouses ko dust‑free, safe aur organised rakhna zaroori hai. Professional cleaning se
                    machinery ke around build‑up kam hota hai aur safety audits me help milti hai.
                </p>
                <p>
                    Factory floors, loading bays, storage racks, staff change rooms aur canteen areas ke liye
                    customised plan diya ja sakta hai. Shift ke beech ya night shift me cleaning schedule
                    karke production par minimum impact rakha ja sakta hai.
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