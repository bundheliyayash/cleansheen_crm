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
                <img src="assets/images/estate-agents.jpg" alt="Estate agency and property brokers Gujarat">
            </div>
            <div class="sector-text">
                <h2>Estate Agency Cleaning – Gujarat Property Market</h2>
                <p>
                    Ahmedabad, Gandhinagar, Surat aur Rajkot me real‑estate brokers aur estate agencies ko
                    har time neat office aur ready‑to‑show flats ki zaroorat hoti hai. Clean reception aur
                    meeting areas se clients par pehla impression strong padta hai.
                </p>
                <p>
                    Regular branch cleaning ke saath‑saath ready‑to‑move flats, sample houses aur resale
                    properties ke liye end‑of‑tenancy type deep cleans bhi provide kiye ja sakte hain. Keys
                    pick‑up, short‑notice bookings aur move‑in date ke around scheduling bhi possible hai.
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