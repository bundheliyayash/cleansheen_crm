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

    <!-- 1. HERO -->
    <section class="school-hero">
        <div class="school-hero-overlay">
            <h1>School Cleaning Services</h1>
        </div>
    </section>

    <!-- 2. FEATURES STRIP -->
    <section class="school-features">
        <div class="school-features-inner">
            <div class="school-features-grid">
                <div class="sf-item">
                    <div class="sf-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h3>Independent Family Business</h3>
                    <p>Local school cleaning staff based close to sites.</p>
                </div>
                <div class="sf-item">
                    <div class="sf-icon"><i class="fas fa-sync-alt"></i></div>
                    <h3>Replacement &amp; Sickness Cover</h3>
                    <p>Cover cleaners supplied when staff are away.</p>
                </div>
                <div class="sf-item">
                    <div class="sf-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    <h3>No Hidden Costs</h3>
                    <p>Clear pricing agreed before any work starts.</p>
                </div>
                <div class="sf-item">
                    <div class="sf-icon"><i class="fas fa-user-shield"></i></div>
                    <h3>Insured &amp; Vetted Staff</h3>
                    <p>Staff checked for working safely in schools.</p>
                </div>
                <div class="sf-item">
                    <div class="sf-icon"><i class="fas fa-wallet"></i></div>
                    <h3>Affordable</h3>
                    <p>Budget‑friendly options for all school sizes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. TRUSTED & RELIABLE BLOCK -->
    <section class="school-trusted">
        <div class="school-trusted-inner">
            <div class="school-trusted-text">
                <h2>Trusted and Reliable School Cleaning Company</h2>
                <p>
                    It is essential for schools to be clean so pupils and staff can work in a healthy, safe
                    environment. Our dedicated school teams are trained specifically for classrooms and
                    education sites.
                </p>
                <p>
                    From daily cleaning during term‑time to deep cleans in holidays, we can build a schedule
                    that matches your timetable and budget.
                </p>
                <div class="school-trusted-buttons">
                    <a href="#enquiry" class="btn-outline">Enquire</a>
                    <a href="tel:+919999999999" class="btn-solid"><i class="fas fa-phone"></i> Call Us</a>
                </div>
            </div>

            <div class="school-trusted-image">
                <img src="<?php echo BASE_URL . 'includes/image/school-staff.jpg'?>" alt="School cleaning staff">
            </div>
        </div>
    </section>

    <!-- 4. VETTED STAFF BLOCK -->
    <section class="school-vetted">
        <div class="school-vetted-inner">
            <div class="school-vetted-text">
                <h2>Vetted and Background‑Checked Cleaning Staff</h2>
                <ul class="styled-list">
                    <li>In‑person interviews for all cleaners</li>
                    <li>Background checks suitable for working with children</li>
                    <li>Training focused on working safely in schools</li>
                    <li>Ongoing quality checks and supervisor visits</li>
                </ul>
                <p>
                    Teams are chosen for consistency and reliability so your classrooms are always ready for
                    the next school day.
                </p>
            </div>
            <div class="school-vetted-image">
                <img src="<?php echo BASE_URL . 'includes/image/school-cleaning.jpg'?>" alt="Classroom cleaning">
            </div>
        </div>
    </section>

    <!-- 5. WHAT'S INCLUDED (2 COL LISTS) -->
    <section class="school-included">
        <div class="school-included-inner">
            <h2>What’s Included in Our School Cleaning Service</h2>

            <div class="school-included-grid">
                <div>
                    <h3>Our School Cleaning Includes</h3>
                    <ul class="styled-list">
                        <li>Regular daily cleaning during term</li>
                        <li>End‑of‑term and holiday deep cleans</li>
                        <li>Communal area and corridor cleaning</li>
                        <li>Washroom and changing‑room sanitising</li>
                        <li>Antiviral disinfection when required</li>
                    </ul>
                </div>
                <div>
                    <h3>Areas We Can Clean</h3>
                    <ul class="styled-list">
                        <li>Classrooms and lecture rooms</li>
                        <li>Offices, staff rooms and reception</li>
                        <li>Assembly halls and sports halls</li>
                        <li>Canteens, kitchens and cafeterias</li>
                        <li>Computer rooms, labs and libraries</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. TAILORED & ECO-FRIENDLY BLOCK -->
    <section class="school-tailored">
        <div class="school-tailored-inner">
            <div class="school-tailored-image">
                <img src="<?php echo BASE_URL . '/includes/image/dinning-clean.jpg'?>" alt="School dining hall">
            </div>
            <div class="school-tailored-text">
                <h2>Tailored and Eco‑Friendly School Cleaning Services</h2>
                <p>
                    Children can be messy and classrooms are busy. Our cleaning plans are designed to match
                    how your school really works, balancing high hygiene standards with practicality.
                </p>
                <p>
                    Eco‑friendly products are available if you prefer a greener option. We have experience
                    with nurseries, primary schools, colleges and universities, and can adapt to any timetable.
                </p>
            </div>
        </div>
    </section>
    <!-- 7. BOOKING STEPS -->
    <section class="school-booking">
        <div class="school-booking-inner">
            <h2>Booking Steps</h2>
            <p class="school-booking-intro">
                Whether you need regular daily school cleaning or a one‑off deep clean, our simple process
                makes it easy to get started.
            </p>

            <div class="school-booking-grid">
                <div class="sb-step">
                    <div class="sb-icon">1</div>
                    <h3>Enquire</h3>
                    <p>Contact us with details of your school, current issues and preferred timings.</p>
                </div>
                <div class="sb-step">
                    <div class="sb-icon">2</div>
                    <h3>Site Visit</h3>
                    <p>We arrange a visit to assess the building, discuss areas and agree frequency.</p>
                </div>
                <div class="sb-step">
                    <div class="sb-icon">3</div>
                    <h3>Confirmation</h3>
                    <p>You receive a detailed proposal and start date for your cleaning contract.</p>
                </div>
            </div>

            <div class="school-booking-buttons">
                <a href="#enquiry" class="btn-outline">Book Now</a>
                <a href="tel:+919999999999" class="btn-solid"><i class="fas fa-phone"></i> Call Us</a>
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