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
                <img src="<?php echo BASE_URL . 'includes/image/restaurant.jpg' ?>"
                    alt="Restaurants and cafes in Gujarat">
            </div>
            <div class="sector-text">
                <h2>Bars, Cafés &amp; Restaurant Cleaning – Gujarat</h2>
                <p>
                    Ahmedabad riverfront, Vadodara Alkapuri, Surat Ghod Dod Road jaise areas me restaurants
                    aur cafés ke liye clean dining area aur hygienic kitchen bohot zaroori hai. Customers pehla
                    impression ambience se hi banate hain.
                </p>
                <p>
                    Dining tables, chairs, bar counter, restrooms aur entry area ki daily detailing ke saath
                    kitchen floors, exhaust area aur storage shelves ke liye scheduled deep cleaning plan
                    kiya ja sakta hai. Service timings mostly closing hours ke baad rakhe ja sakte hain.
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