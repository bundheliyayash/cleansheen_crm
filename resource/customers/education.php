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
                <img src="<?php echo BASE_URL . 'includes/image/education-cleaning.jpg' ?>"
                    alt="Schools and colleges in Gujarat">
            </div>
            <div class="sector-text">
                <h2>School &amp; Education Cleaning – Gujarat</h2>
                <p>
                    Gujarat me CBSE schools, coaching institutes aur colleges me clean classrooms aur washrooms
                    bohot important hote hain, especially bachchon ki health ke liye. Regular sanitisation se
                    infections ka risk kam hota hai aur parents ko bhi confidence milta hai.
                </p>
                <p>
                    Classroom benches, boards, labs, libraries, corridors aur play areas ke liye customised
                    cleaning schedule banaya ja sakta hai. Vacation period me deep cleaning, floor polishing
                    aur desk sanitisation bhi arrange ki ja sakti hai.
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