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
                <img src="assets/images/museums-galleries.jpg" alt="Museums and galleries in Gujarat">
            </div>
            <div class="sector-text">
                <h2>Museum &amp; Gallery Cleaning – Gujarat</h2>
                <p>
                    Baroda Museum, Kite Museum Ahmedabad, tribal museums aur private art galleries jaisi jagah
                    par dust‑free environment artefacts aur artwork ko protect karne ke liye bohot important
                    hota hai. Visitors ko bhi clean pathways aur washrooms chahiye hote hain.
                </p>
                <p>
                    Team sensitive areas me gentle dusting, glass display cleaning aur floor maintenance karegi.
                    Cleaning hours visiting time ke baad ya pehle rakhe ja sakte hain taaki exhibits ya public
                    ko disturb na ho.
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