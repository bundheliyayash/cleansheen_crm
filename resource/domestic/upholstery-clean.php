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

    <!-- HERO + GREEN STRIP -->
<section class="up-hero">
  <div class="up-hero-overlay">
    <h1>Upholstery Cleaning</h1>
  </div>
</section>

<section class="up-features">
  <div class="up-features-inner">
    <div class="up-features-grid">
      <div><h4>100% Satisfaction Guaranteed</h4><p>Free re‑clean if needed.</p></div>
      <div><h4>Flexible Days &amp; Times</h4><p>Including weekends and short notice.</p></div>
      <div><h4>Stain Removal</h4><p>Common stains included in price.</p></div>
      <div><h4>Cleaning Materials</h4><p>All products and machines included.</p></div>
      <div><h4>Latest Technology</h4><p>Professional upholstery equipment.</p></div>
    </div>
  </div>
</section>

<!-- LONG TEXT + BOOK BUTTON -->
<section class="up-text">
  <div class="up-text-inner">
    <h2>Sofa Cleaning</h2>
    <p>Full paragraph(s) about sofa and upholstery cleaning, benefits etc.</p>
    <a href="<?php echo BASE_URL . 'resource/about/contact-us.php' ?>" class="btn-solid">Book Now</a>
  </div>
</section>

<!-- BLUE BLOCK + VIDEO -->
<section class="up-london">
  <div class="up-london-inner">
    <div class="up-text2">
      <p>Short text about being passionate about upholstery cleaning.</p>
    </div>
    <div class="up-video">
      <img src="assets/images/up-video.jpg" alt="Upholstery video">
    </div>
  </div>
</section>


    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html><a href=""></a>