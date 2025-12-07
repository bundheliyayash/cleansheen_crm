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

    <!-- =========================================
  ONE-OFF CLEANING SERVICE PAGE
========================================= -->

<!-- 1. HERO + 3 TOP CARDS -->
<section class="oneoff-hero">
  <div class="oneoff-hero-overlay">
    <h1>One‑Off Cleaning Service</h1>

    <div class="oneoff-hero-cards">
      <!-- Card 1: 100% SATISFACTION GUARANTEED -->
      <div class="oneoff-hero-card">
        <h3>100% Satisfaction Guaranteed</h3>
        <p>If you are not satisfied we will come back and re‑clean for free.</p>
      </div>
      <!-- Card 2: CLEANING MATERIALS INCLUDED -->
      <div class="oneoff-hero-card">
        <h3>Cleaning Materials Included</h3>
        <p>All one‑off cleans include our professional solutions.</p>
      </div>
      <!-- Card 3: SHORT NOTICE -->
      <div class="oneoff-hero-card">
        <h3>Short Notice</h3>
        <p>Last‑minute bookings often available within 2–3 days.</p>
      </div>
    </div>
  </div>
</section>

<!-- 2. INTRO + GREEN ICON STRIP -->
<section class="oneoff-intro-strip">
  <div class="oneoff-intro-inner">
    <h2>One‑Off Cleaning Service</h2>
    <p>
      Brief text describing one‑off deep cleans, fully trained staff and tailored packages for each home.
    </p>
    <a href="#oneoff-booking-form" class="btn-solid">Book Now</a>
  </div>

  <div class="oneoff-features">
    <div class="oneoff-features-inner">
      <div class="oneoff-features-grid">
        <!-- COMPREHENSIVE INSURANCE -->
        <div class="of-item">
          <h4>Comprehensive Insurance</h4>
          <p>Public liability cover included with every visit.</p>
        </div>
        <!-- HAPPY CLEANERS -->
        <div class="of-item">
          <h4>Happy Cleaners</h4>
          <p>Above‑market pay and regular training.</p>
        </div>
        <!-- SPECIALLY TRAINED -->
        <div class="of-item">
          <h4>Specially Trained</h4>
          <p>Deep cleaning and one‑off service experts.</p>
        </div>
        <!-- WEEKENDS WELCOME -->
        <div class="of-item">
          <h4>Weekends Welcome</h4>
          <p>No extra charges for weekend slots.</p>
        </div>
        <!-- LAST MINUTE BOOKINGS -->
        <div class="of-item">
          <h4>Last Minute Bookings</h4>
          <p>Subject to availability for urgent jobs.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 3. PREMIER ONE OFF CLEANING SERVICE (5 CARDS ROW) -->
<section class="oneoff-services">
  <div class="oneoff-services-inner">
    <h2>Premier One‑Off Cleaning Service</h2>

    <div class="oneoff-services-grid">
      <!-- end of tenancy -->
      <article class="os-card">
        <h3>End of Tenancy Cleaning</h3>
        <p>Move‑out cleans to help protect your deposit.</p>
      </article>
      <!-- spring house -->
      <article class="os-card">
        <h3>Spring House Cleaning</h3>
        <p>Freshen up your home with a once‑off deep clean.</p>
      </article>
      <!-- after builders -->
      <article class="os-card">
        <h3>After Builders Cleaning</h3>
        <p>Remove construction dust and debris after works.</p>
      </article>
      <!-- carpet steam -->
      <article class="os-card">
        <h3>Carpet Steam Cleaning</h3>
        <p>Hot‑water extraction for carpets and rugs.</p>
      </article>
      <!-- upholstery -->
      <article class="os-card">
        <h3>Upholstery Cleaning</h3>
        <p>Revive sofas, armchairs and fabric furniture.</p>
      </article>
    </div>

    <a href="#oneoff-quote" class="btn-solid oneoff-quote-btn">
      Get One‑Off Clean Quote
    </a>
    <p class="oneoff-quote-sub">Thousands of one‑off cleans completed since 2015.</p>
  </div>
</section>

<!-- 4. FULL DEEP CLEANING SERVICE INTRO -->
<section class="oneoff-full-deep">
  <div class="oneoff-full-deep-inner">
    <h2>A Full Deep Cleaning Service</h2>
    <p>Short paragraph about whole‑property deep cleans based on your requirements.</p>
  </div>
</section>

<!-- 5. ONE OFF CLEANING PRICING TABLE -->
<section class="oneoff-pricing">
  <div class="oneoff-pricing-inner">
    <h2>One‑Off Cleaning Pricing</h2>
    <p>
      Explain that these are guideline prices and final quotes depend on property size and condition.
    </p>

    <div class="oneoff-table-wrap">
      <table class="oneoff-table">
        <thead>
          <tr>
            <th>Property Type</th>
            <th>End of Tenancy Cleaning</th>
            <th>Deep Cleaning</th>
            <th>After Builders Cleaning</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Studio / 1 Bed, 1 Bath</td>
            <td>From £190</td>
            <td>From £190</td>
            <td>From £290</td>
          </tr>
          <tr>
            <td>2 Bed, 1 Bath</td>
            <td>From £266</td>
            <td>From £266</td>
            <td>From £362</td>
          </tr>
          <tr>
            <td>2 Bed, 2 Bath</td>
            <td>From £304</td>
            <td>From £304</td>
            <td>From £404</td>
          </tr>
          <!-- add more rows as needed -->
        </tbody>
      </table>
    </div>

    <a href="#oneoff-booking-form" class="btn-solid oneoff-book-btn">Book Now</a>

    <p class="oneoff-pricing-note">
      Short note about what is included, VAT, and that larger properties are quoted individually.
    </p>

    <div class="oneoff-pay-logos">
      <!-- card logos image -->
      <img src="assets/images/pay-logos.png" alt="Payment cards">
    </div>
  </div>
</section>

<!-- 6. THREE SIMPLE STEPS + VIDEO -->
<section class="oneoff-steps">
  <div class="oneoff-steps-inner">
    <div class="oneoff-steps-text">
      <h2>Three Simple Steps</h2>
      <ol>
        <li>Send us your property details using the enquiry form.</li>
        <li>Receive a detailed quote during working hours.</li>
        <li>Our cleaners carry out a deep clean on the agreed date.</li>
      </ol>
    </div>

    <div class="oneoff-steps-video">
      <img src="assets/images/oneoff-video.jpg" alt="One‑off cleaning video">
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