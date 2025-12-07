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
                <img src="assets/images/commercial-offices.jpg" alt="Corporate offices in Gujarat">
            </div>
            <div class="sector-text">
                <h2>Commercial Office Cleaning in Gujarat</h2>
                <p>
                    Gujarat ke Ahmedabad, Vadodara, Surat jaise business hubs me IT parks, corporate offices
                    aur co‑working spaces roz bahut zyada footfall handle karte hain. Professional cleaning se
                    reception, cabins aur workstations hamesha presentable rehte hain aur staff ko healthy
                    environment milta hai.
                </p>
                <p>
                    Team regular dusting, mopping, glass cleaning, workstation sanitisation aur washroom
                    hygiene ka pura dhyan rakhegi. Service ko aapke shift timing ke hisaab se design kiya
                    ja sakta hai – early morning, late evening ya weekend pe bhi.
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