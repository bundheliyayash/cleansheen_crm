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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/style.css" />
</head>

<body>

    <?php include ROOT_PATH . 'resource/header.php'; ?>

    <section class="services-section">
        <div class="services-container">
            <!-- Section Header -->
            <div class="section-header">
                <h2>Who We Are</h2>
                <p>
                    How does it feel to live in a place where cleanliness takes a backseat? Imagine inviting guests to your home or clients to your workplace—the sight of dirt and an unclean space creates a disappointing first impression. In today's fast-paced lifestyle, maintaining a spotless home is both difficult and time-consuming. That's where Clean Sheen comes to the rescue—your personal housekeeping and cleaning partner.
                </p>
                <hr>

                <p>Our service team comprises skilled professionals with 12 years of expertise in housekeeping. Established in Surat by highly qualified individuals with a combined 25 years of corporate experience, Clean Sheen was founded to eliminate every trace of dirt from your residence and office.
                </p>
                <hr>

                <p>You might dust regularly, but deep cleaning remains a challenge. Your home harbors dirt and dust particles in hidden corners that aren't immediately visible. Maintaining and sanitizing your space is crucial for your personal health and hygiene. A clean environment significantly reduces the likelihood of illness for you and your family.</p>
                <hr>

                <p>
                    Clean Sheen provides comprehensive cleaning services that remove even the tiniest speck of dust, leaving every corner absolutely flawless. Our highly qualified team uses modern techniques with premium cleaning materials and equipment. All our cleaners are thoroughly vetted and police-verified, ensuring they can deep clean any area of your premises without hassle or inconvenience.
                </p>
            </div>

            <!-- Top Row - 3 Cards -->
            <div class="features-row top">
                <!-- Card 1 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>
                        We aim to provide the most spotless cleaning solutions for your home, office, or any space requiring professional care. With our trusted and skilled professionals, we're equipped to meet all your cleaning demands. Once you experience our foolproof service, we're confident you'll return whenever the need arises. Our goal is to build long-term relationships based on mutual trust and complete satisfaction. </p>
                </div>

                <!-- Card 2 -->
                <div class="feature-card light">
                    <div class="feature-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>
                        We envision creating clean and hygienic environments for everyone while saving you valuable time. We work on your schedule, offering flexible service anywhere and anytime. Privacy is paramount to us, which is why our team consists of highly trustworthy and verified experts who respect your space and confidentiality.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Our Core Values</h3>
                    <p><strong>Our Values:</strong> We believe in <strong>Respect</strong>, treating everyone with dignity and fairness; <strong>Responsibility</strong>, taking ownership of our actions; <strong>Excellence</strong>, striving for the highest standards; <strong>Integrity</strong>, acting with honesty and transparency; and <strong>Innovation</strong>, embracing creativity and new ideas to drive progress.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Why Choose Clean Sheen</h2>
                <p>
                    With 12 years of housekeeping expertise and 25 years of combined corporate experience, our team brings unmatched professionalism to every project. We don't just clean—we transform spaces into pristine environments where you can live, work, and thrive with peace of mind.
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