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

    <section class="sector-section sector-section--alt">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="<?php echo BASE_URL . 'includes/image/embassie.jpg'?>"
                    alt="Consulates and diplomatic offices in Gujarat">
            </div>
            <div class="sector-text">
                <h2>Consulate &amp; Diplomatic Office Cleaning – Gujarat</h2>
                <p>
                    Ahmedabad aur Gandhinagar me trade offices, consulates aur visa centres ko discreet aur
                    secure cleaning service ki zaroorat hoti hai. Professional appearance visitors aur officials
                    ke liye equally important hota hai.
                </p>
                <p>
                    Background‑checked staff reception, visa counters, waiting lounges, conference rooms aur
                    washrooms ko maintain karte hain. Security protocols, ID checks aur restricted timings ka
                    dhyan rakhte hue schedule design kiya ja sakta hai.
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