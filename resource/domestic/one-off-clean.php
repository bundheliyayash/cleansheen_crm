<?php include '../../config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <!-- SEO & Metadata -->
    <?php include_once '../seo_meta.php'; ?>

    <title><?php echo $seo_title; ?></title>

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
      <h1 class="dom-hero-card">One‑Off Cleaning Service</h1>

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

  <!-- INTRO + GREEN ICON STRIP -->
  <section class="oneoff-intro-strip">
    <div class="oneoff-intro-inner">
      <h1>One-Off Cleaning Service</h1>
      <p>
        Our one-off cleaning services are ideal for deep cleans, special occasions,
        or when your home needs extra attention. All work is carried out by fully
        trained professionals, with packages tailored to your property and needs.
      </p>
      <a href="<?php echo BASE_URL . 'resource/about/contact-us.php' ?>" class="btn-solid">Book Now</a>
    </div>
  </section>

  <section class="oneoff-features">
    <div class="oneoff-features-inner">
      <div class="oneoff-features-grid">
        <!-- COMPREHENSIVE INSURANCE -->
        <div class="of-item">
          <div class="os-icon"><i class="fas fa-map-marker-alt"></i></div>
          <h4>Comprehensive Insurance</h4>
          <p>Public liability cover included with every visit.</p>
        </div>
        <!-- HAPPY CLEANERS -->
        <div class="of-item">
          <div class="os-icon"><i class="fa fas fa-sync-alt"></i></div>
          <h4>Happy Cleaners</h4>
          <p>Above‑market pay and regular training.</p>
        </div>
        <!-- SPECIALLY TRAINED -->
        <div class="of-item">
          <div class="os-icon"><i class="fas fa-file-invoice-dollar"></i></div>
          <h4>Specially Trained</h4>
          <p>Deep cleaning and one‑off service experts.</p>
        </div>
        <!-- WEEKENDS WELCOME -->
        <div class="of-item">
          <div class="os-icon"><i class="fas fa-user-shield"></i></div>
          <h4>Weekends Welcome</h4>
          <p>No extra charges for weekend slots.</p>
        </div>
        <!-- LAST MINUTE BOOKINGS -->
        <div class="of-item">
          <div class="os-icon"><i class="fas fa-wallet"></i></div>
          <h4>Last Minute Bookings</h4>
          <p>Subject to availability for urgent jobs.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- PREMIER ONE-OFF CLEANING SERVICE -->
  <section class="oneoff-services">
    <div class="oneoff-services-inner">
      <h2>Premier One-Off Cleaning Services</h2>

      <div class="oneoff-services-grid">
        <article class="os-card">
          <h3>End of Tenancy Cleaning</h3>
          <p>
            Comprehensive move-out cleaning designed to meet landlord and letting
            agent standards and help protect your deposit.
          </p>
        </article>

        <article class="os-card">
          <h3>Spring House Cleaning</h3>
          <p>
            A thorough, once-off clean to refresh your home and tackle built-up
            dirt in hard-to-reach areas.
          </p>
        </article>

        <article class="os-card">
          <h3>After Builders Cleaning</h3>
          <p>
            Removal of dust, residue, and debris following renovations or building
            work, leaving your property ready to use.
          </p>
        </article>

        <article class="os-card">
          <h3>Carpet Steam Cleaning</h3>
          <p>
            Hot-water extraction to lift dirt, stains, and allergens from carpets
            and rugs for a deeper clean.
          </p>
        </article>

        <article class="os-card">
          <h3>Upholstery Cleaning</h3>
          <p>
            Professional cleaning for sofas, armchairs, and fabric furniture to
            restore freshness and extend lifespan.
          </p>
        </article>
      </div>

      <a href="<?php echo BASE_URL . 'resource/about/contact-us.php' ?>" class="btn-solid oneoff-quote-btn">
        Get a One-Off Cleaning Quote
      </a>
    </div>
  </section>

  <!-- FULL DEEP CLEANING SERVICE INTRO -->
  <section class="oneoff-full-deep">
    <div class="oneoff-full-deep-inner">
      <h2>A Complete Deep Cleaning Service</h2>
      <p>
        Our full deep cleaning service covers your entire property from top to bottom.
        Each clean is customised to your requirements, focusing on high-use areas,
        neglected spaces, and detailed finishes for outstanding results.
      </p>
    </div>
  </section>

  <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
  <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
  <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

  <?php include ROOT_PATH . 'resource/footer.php'; ?>

  <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html><a href=""></a>