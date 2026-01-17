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

    <section class="started-hero">
        <div class="gym-hero-overlay">
            <h1 class="text-white">How We Started</h1>
        </div>
    </section>
    <section class="started-section">
        <div class="started-container">
            <h2>Our Story</h2>

            <p>
                At <strong>Cleansheen Cleaning Services</strong>, our journey began with a simple but powerful belief — every space deserves to be clean, fresh, and welcoming. In today’s fast-paced world, keeping your home or workplace spotless can be both difficult and time-consuming. We saw people struggle with this every day and realized there was a need for reliable, trustworthy, and professional cleaning services that truly make a difference.
            </p>

            <p>
                Founded in <strong>2018 in Surat, Gujarat</strong>, Cleansheen was born out of a passion to bring expert cleaning solutions directly to homes, offices, and commercial spaces across the region. Our team is made up of seasoned professionals with years of experience in housekeeping and cleaning services, bringing skill, precision, and dedication to every job.
            </p>

            <p>
                From our humble beginnings, we focused on delivering deep cleaning, quick cleaning, and tailored housekeeping services that go beyond surface dusting — ensuring every corner is thoroughly cleaned and hygienic. We steadily grew, building trust and strong relationships with our customers by providing consistent quality and dependable service.
            </p>

            <p>
                Today, Cleansheen stands proud as a professional cleaning partner to hundreds of homes and businesses. We continue to innovate, improve, and serve with integrity — always guided by our mission to make clean spaces a reality for all. Whether it’s your residence, office, commercial property, or industrial facility, we’re here to help you live and work in a healthier environment.
            </p>
        </div>
    </section>

    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>
    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>