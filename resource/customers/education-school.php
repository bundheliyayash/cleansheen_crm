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
    <!-- ================= SCHOOL CLEANING SERVICES ================= -->

    <section class="sector-section">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="<?php echo BASE_URL . 'includes/image/school-cleaning-1.jpg' ?>"
                    alt="School cleaning services in Gujarat">
            </div>
            <div class="sector-text">
                <h2>School Cleaning Services – Gujarat</h2>
                <p>
                    Schools require a clean, safe, and hygienic environment to support
                    students’ health and learning. Across Gujarat, including cities such as
                    Ahmedabad, Surat, and Vadodara, educational institutions depend on
                    professional cleaning services to maintain daily cleanliness standards.
                </p>
                <p>
                    Our school cleaning services focus on creating a healthy atmosphere for
                    students, teachers, and staff by ensuring classrooms, common areas, and
                    facilities are regularly cleaned and well-maintained.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>School Areas & Facilities We Clean</h2>
                <p>
                    School campuses include multiple high-usage areas that require continuous
                    attention to hygiene. Our cleaning scope covers all key spaces used by
                    students and staff throughout the day.
                </p>
                <ul>
                    <li>Classrooms, laboratories, and libraries</li>
                    <li>Corridors, staircases, and assembly areas</li>
                    <li>Washrooms and handwash zones</li>
                    <li>Play areas, auditoriums, and activity rooms</li>
                    <li>Staff rooms, offices, and reception areas</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Daily Cleaning, Sanitisation & AMC Plans</h2>
                <p>
                    Cleaning schedules are planned according to school timings to ensure
                    minimal disruption to academic activities. Daily cleaning, periodic
                    sanitisation, and deep cleaning services are carried out as per school
                    requirements.
                </p>
                <p>
                    AMC (Annual Maintenance Contract) based cleaning services help schools
                    maintain consistent hygiene standards throughout the academic year with
                    reliable manpower and supervisor-led monitoring.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Why Schools Choose Our Cleaning Services</h2>
                <p>
                    We understand the responsibility schools have towards student safety and
                    well-being. Our cleaning services are designed to support a healthy
                    learning environment while meeting institutional expectations.
                </p>
                <ul>
                    <li>Trained and background-verified cleaning staff</li>
                    <li>Use of child-safe and approved cleaning products</li>
                    <li>Supervisor-based quality checks and reporting</li>
                    <li>Flexible schedules aligned with school hours</li>
                    <li>Experience working with primary and secondary schools</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================= END SCHOOL CLEANING SERVICES ================= -->



    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>