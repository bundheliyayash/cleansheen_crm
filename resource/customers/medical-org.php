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

    <section class="sector-section">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="<?php echo BASE_URL . 'includes/image/medical-cleaning.jpeg' ?>"
                    alt="Hospitals and clinics in Gujarat">
            </div>
            <div class="sector-text">
                <h2>Medical &amp; Healthcare Facility Cleaning – Gujarat</h2>
                <p>
                    Gujarat me multi‑speciality hospitals, diagnostic centres aur small clinics sabhi ko
                    high‑standard hygiene ki zaroorat hoti hai. Waiting areas, OPD rooms, labs aur washrooms
                    me regular disinfection patient safety ke liye critical hai.
                </p>
                <p>
                    Team ko healthcare protocols, colour‑coded tools aur bio‑waste areas ki basic training
                    ke saath deploy kiya ja sakta hai. Cleaning timing OPD hours ke pehle/baad plan ki jati
                    hai taaki operations disturb na ho.
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