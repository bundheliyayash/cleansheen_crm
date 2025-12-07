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
                <img src="assets/images/hotels.jpg" alt="Hotels and guest houses in Gujarat">
            </div>
            <div class="sector-text">
                <h2>Hotel &amp; Guest House Cleaning – Gujarat</h2>
                <p>
                    Statue of Unity, Dwarka, Somnath jaise tourist spots ki wajah se Gujarat me hotels,
                    business hotels aur guest houses me high occupancy rehta hai. Consistent room cleaning,
                    lobby presentation aur spotless washrooms guest reviews ko improve karte hain.
                </p>
                <p>
                    Housekeeping teams ke saath coordinate karke daily room service, check‑in / check‑out
                    turnaround, banquet hall aur restaurant area ki detailing cleaning plan ki ja sakti hai.
                    Linen handling aur mattress / upholstery deep cleaning bhi add ki ja sakti hai.
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