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
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Icons + CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/style.css" />
</head>

<body>

    <?php include ROOT_PATH . 'resource/header.php'; ?>

    <!-- ================= EDUCATION INSTITUTE CLEANING SERVICES ================= -->

    <section class="sector-section">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="<?php echo BASE_URL . 'includes/image/education-institute-cleaning.jpg' ?>"
                    alt="Educational institutes and colleges cleaning services in Gujarat">
            </div>
            <div class="sector-text">
                <h1>Education Institute Cleaning Services – Gujarat</h1>
                <p>
                    Educational institutes such as colleges, universities, coaching centres,
                    and training academies require a clean and organised environment to support
                    focused learning and daily academic operations. Across Gujarat, institutes
                    in cities like Ahmedabad, Surat, Vadodara, and Rajkot rely on professional
                    cleaning services to maintain hygiene standards.
                </p>
                <p>
                    Our education institute cleaning services are designed to ensure classrooms,
                    laboratories, libraries, and common areas remain clean, safe, and
                    presentable throughout the day.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Institute Areas & Facilities We Cover</h2>
                <p>
                    Educational campuses include multiple high-traffic areas that need regular
                    cleaning and sanitisation. Our cleaning scope is structured to cover all
                    essential academic and administrative spaces.
                </p>
                <ul>
                    <li>Lecture halls, classrooms, and seminar rooms</li>
                    <li>Laboratories, workshops, and research areas</li>
                    <li>Libraries, reading rooms, and computer labs</li>
                    <li>Washrooms, corridors, staircases, and lift lobbies</li>
                    <li>Faculty rooms, administrative offices, and reception areas</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Flexible Cleaning Schedules & AMC Support</h2>
                <p>
                    Cleaning schedules are planned to match institute timetables, ensuring
                    minimal disruption to lectures, examinations, and student activities.
                    Services can be scheduled daily, weekly, or periodically based on campus
                    size and usage.
                </p>
                <p>
                    AMC (Annual Maintenance Contract) based cleaning solutions provide
                    consistency, trained manpower, and supervisor-led quality monitoring for
                    long-term institutional requirements.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Why Choose Us for Institute Cleaning</h2>
                <p>
                    Educational institutions trust us for our professional approach, attention
                    to hygiene, and ability to manage large campuses efficiently. We understand
                    the importance of cleanliness in academic environments.
                </p>
                <ul>
                    <li>Trained and background-verified cleaning personnel</li>
                    <li>Use of safe and approved cleaning chemicals</li>
                    <li>Supervisor-based inspections and service reporting</li>
                    <li>Flexible service timing aligned with academic schedules</li>
                    <li>Experience with colleges, universities, and coaching institutes</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================= END EDUCATION INSTITUTE CLEANING SERVICES ================= -->


    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>