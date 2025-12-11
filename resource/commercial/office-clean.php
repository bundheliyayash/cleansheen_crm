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


    <!-- ========== OFFICE CLEANING HERO STRIP ========== -->
    <section class="office-hero">
        <div class="office-hero-overlay">
            <div class="office-hero-grid">
                <div class="office-hero-card">
                    <div class="oh-icon"><i class="fas fa-building"></i></div>
                    <h3>Great First Impression</h3>
                    <p>
                        Create a spotless office that looks professional for both your team and your customers.
                    </p>
                </div>

                <div class="office-hero-card">
                    <div class="oh-icon"><i class="fas fa-clock"></i></div>
                    <h3>Flexible Times & Schedules</h3>
                    <p>
                        Early morning, late evening or weekends – we fit cleaning around your working hours.
                    </p>
                </div>

                <div class="office-hero-card">
                    <div class="oh-icon"><i class="fas fa-smile-beam"></i></div>
                    <h3>Happy Cleaners</h3>
                    <p>
                        Trained, reliable cleaners who are treated fairly so they deliver their best every visit.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== OFFICE CLEANING SERVICES ICON ROW ========== -->
    <section class="office-services">
        <div class="office-services-inner">
            <h2>Office Cleaning Services</h2>

            <div class="office-services-grid">
                <div class="os-item">
                    <div class="os-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h3>Independent Family Business</h3>
                    <p>
                        Local, reliable cleaning teams based close to your office sites for quick response and
                        consistency.
                    </p>
                </div>

                <div class="os-item">
                    <div class="os-icon"><i class="fas fa-sync-alt"></i></div>
                    <h3>Replacement &amp; Sickness Cover</h3>
                    <p>
                        If your regular cleaner is away, we organise cover so you always receive an uninterrupted
                        service.
                    </p>
                </div>

                <div class="os-item">
                    <div class="os-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h3>No Hidden Costs</h3>
                    <p>
                        Transparent pricing with all agreed tasks included. Extra charges only when you request extra
                        work.
                    </p>
                </div>

                <div class="os-item">
                    <div class="os-icon"><i class="fas fa-user-shield"></i></div>
                    <h3>Insured &amp; Vetted Staff</h3>
                    <p>
                        Background‑checked, trained cleaners with full insurance for your complete peace of mind.
                    </p>
                </div>

                <div class="os-item">
                    <div class="os-icon"><i class="fas fa-wallet"></i></div>
                    <h3>Affordable</h3>
                    <p>
                        Cost‑effective office cleaning plans designed to work with tight budgets without cutting
                        quality.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== OFFICE CLEANING INTRO ========== -->
    <section class="office-intro">
        <div class="office-intro-inner">
            <h2>Office Cleaning Services</h2>

            <p>
                Office cleaning gives a great first impression to your customers and visitors, and helps your team
                stay healthy and productive. Regular cleaning reduces dust, allergens and germs so your workspace
                feels fresh every day.
            </p>
            <p>
                Many businesses switch to us because their previous cleaners missed important areas or were
                inconsistent. Our trained, vetted cleaners are supported by an experienced management team so
                you can focus on work while we look after your building.
            </p>
            <p>
                We also offer Office Deep Cleaning services to help control bacteria and viruses on high‑touch
                surfaces such as desks, handles and washrooms.
            </p>

            <div class="office-intro-actions">
                <a href="#request-form" class="btn-outline">Enquire</a>
                <a href="tel:+919999999999" class="btn-solid">
                    <i class="fas fa-phone"></i> Call Us
                </a>
            </div>
        </div>
    </section>

    <!-- ========== QUALITY ROW WITH ICONS ========== -->
    <section class="office-quality">
        <div class="office-quality-inner">
            <h3>Consistently better quality office cleaning than competition</h3>

            <div class="office-quality-grid">
                <div class="oq-item">
                    <div class="oq-icon"><i class="fas fa-user"></i></div>
                    <h4>One Point of Contact</h4>
                    <p>
                        Dedicated account manager who looks after your contract and keeps communication simple.
                    </p>
                </div>

                <div class="oq-item">
                    <div class="oq-icon"><i class="fas fa-eye"></i></div>
                    <h4>Attendance Monitoring</h4>
                    <p>
                        Cleaners use a mobile time‑clock app so we know exactly when your site is cleaned.
                    </p>
                </div>

                <div class="oq-item">
                    <div class="oq-icon"><i class="fas fa-leaf"></i></div>
                    <h4>Sustainability</h4>
                    <p>
                        Eco‑friendly products and methods that reduce waste and our environmental impact.
                    </p>
                </div>

                <div class="oq-item">
                    <div class="oq-icon"><i class="fas fa-heartbeat"></i></div>
                    <h4>Health &amp; Safety</h4>
                    <p>
                        Full H&amp;S procedures, regular risk assessments and trained staff for safe working.
                    </p>
                </div>

                <div class="oq-item">
                    <div class="oq-icon"><i class="fas fa-user-tie"></i></div>
                    <h4>Supervisor Visits</h4>
                    <p>
                        Field supervisors check standards on‑site and support cleaners with extra training.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php include ROOT_PATH .'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH .'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH .'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>