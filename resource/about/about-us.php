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

    <section class="about-section py-5">
        <div class="container">
            <!-- Who We Are -->
            <div class="who-we-are mb-5">
                <h2 class="section-title mb-4">Who We Are</h2>
                <p class="lead">How does it feel to live in a place where cleanliness takes a backseat? Imagine inviting guests to your home or clients to your workplace—the sight of dirt and an unclean space creates a disappointing first impression. In today's fast-paced lifestyle, maintaining a spotless home is both difficult and time-consuming. That's where <strong>Clean Sheen</strong> comes to the rescue—your personal housekeeping and cleaning partner.</p>

                <p>Our service team comprises skilled professionals with 12 years of expertise in housekeeping. Established in Surat by highly qualified individuals with a combined 25 years of corporate experience, Clean Sheen was founded to eliminate every trace of dirt from your residence and office.</p>

                <p>You might dust regularly, but deep cleaning remains a challenge. Your home harbors dirt and dust particles in hidden corners that aren't immediately visible. Maintaining and sanitizing your space is crucial for your personal health and hygiene. A clean environment significantly reduces the likelihood of illness for you and your family.</p>

                <p>Clean Sheen provides comprehensive cleaning services that remove even the tiniest speck of dust, leaving every corner absolutely flawless. Our highly qualified team uses modern techniques with premium cleaning materials and equipment. All our cleaners are thoroughly vetted and police-verified, ensuring they can deep clean any area of your premises without hassle or inconvenience.</p>
            </div>

            <!-- Mission, Vision, Values Row -->
            <div class="row g-4 mb-5">
                <!-- Mission -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="icon-box mb-3">
                                <i class="fas fa-bullseye fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h4">Our Mission</h3>
                            <p class="card-text">We aim to provide the most spotless cleaning solutions for your home, office, or any space requiring professional care. With our trusted and skilled professionals, we're equipped to meet all your cleaning demands. Once you experience our foolproof service, we're confident you'll return whenever the need arises. Our goal is to build long-term relationships based on mutual trust and complete satisfaction.</p>
                        </div>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="icon-box mb-3">
                                <i class="fas fa-eye fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h4">Our Vision</h3>
                            <p class="card-text">We envision creating clean and hygienic environments for everyone while saving you valuable time. We work on your schedule, offering flexible service anywhere and anytime. Privacy is paramount to us, which is why our team consists of highly trustworthy and verified experts who respect your space and confidentiality.</p>
                        </div>
                    </div>
                </div>

                <!-- Values -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <div class="icon-box mb-3">
                                <i class="fas fa-heart fa-3x text-primary"></i>
                            </div>
                            <h3 class="card-title h4">Our Core Values</h3>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Respect</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Responsibility</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Excellence</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Integrity</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Innovation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Why Choose Clean Sheen -->
            <div class="why-choose-us text-center bg-light p-5 rounded">
                <h2 class="section-title mb-4">Why Choose Clean Sheen</h2>
                <p class="lead">With 12 years of housekeeping expertise and 25 years of combined corporate experience, our team brings unmatched professionalism to every project. We don't just clean—we transform spaces into pristine environments where you can live, work, and thrive with peace of mind.</p>
            </div>

            <!-- Stats Section (Optional) -->
            <div class="row text-center mt-5">
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-box">
                        <h3 class="display-4 text-primary fw-bold">12+</h3>
                        <p class="text-muted">Years of Expertise</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-box">
                        <h3 class="display-4 text-primary fw-bold">25+</h3>
                        <p class="text-muted">Years Corporate Experience</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-box">
                        <h3 class="display-4 text-primary fw-bold">100%</h3>
                        <p class="text-muted">Verified Professionals</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-box">
                        <h3 class="display-4 text-primary fw-bold">24/7</h3>
                        <p class="text-muted">Available Service</p>
                    </div>
                </div>
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