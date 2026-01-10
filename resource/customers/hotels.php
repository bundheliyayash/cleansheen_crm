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

    <section class="sector-section sector-section--alt">
        <div class="sector-inner">
            <div class="sector-image">
                <img src="<?php echo BASE_URL . 'includes/image/hotel-cleaning.jpg' ?>"
                    alt="Hotels and guest house cleaning services">
            </div>
            <div class="sector-text">
                <h2>Hotel &amp; Guest House Cleaning Services</h2>
                <p>
                    Hotels, business hotels, resorts, and guest houses require consistent
                    cleaning standards to maintain guest comfort and brand reputation.
                    Clean rooms, well-presented lobbies, and hygienic washrooms play a
                    crucial role in guest satisfaction and online reviews.
                </p>
                <p>
                    Our cleaning teams work in coordination with in-house housekeeping
                    staff to manage daily room cleaning, check-in and check-out turnaround,
                    banquet halls, dining areas, and public spaces. Services can also include
                    linen handling, mattress care, and deep cleaning of upholstery to meet
                    hospitality-grade hygiene expectations.
                </p>
            </div>
        </div>
    </section>

    <!-- ================= HOTEL CLEANING – ADDITIONAL SECTIONS ================= -->

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Guest Room &amp; Public Area Cleaning</h2>
                <p>
                    Hotel cleanliness directly impacts guest experience and brand perception.
                    Our services focus on maintaining high hygiene standards across guest rooms
                    and commonly accessed public areas.
                </p>
                <ul>
                    <li>Daily cleaning of guest rooms and suites</li>
                    <li>Bathroom sanitation and amenity replenishment</li>
                    <li>Lobby, reception, and waiting area maintenance</li>
                    <li>Corridors, staircases, and lift areas</li>
                    <li>Back-of-house areas and staff zones</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Turnaround Cleaning &amp; Deep Cleaning Services</h2>
                <p>
                    Fast room turnaround is essential during peak occupancy periods.
                    Our teams are trained to handle quick check-in and check-out cleaning
                    without compromising quality.
                </p>
                <p>
                    Periodic deep cleaning services can be scheduled for carpets,
                    mattresses, upholstery, washrooms, and hard-to-reach areas to
                    maintain long-term cleanliness and hygiene standards.
                </p>
            </div>
        </div>
    </section>

    <section class="sector-section">
        <div class="intro-inner">
            <div class="sector-text1 full-width">
                <h2>Why Hotels Choose Our Cleaning Services</h2>
                <p>
                    Hospitality businesses rely on us for consistent service delivery,
                    trained manpower, and attention to detail. We understand the importance
                    of guest comfort, privacy, and service efficiency.
                </p>
                <ul>
                    <li>Trained staff experienced in hospitality environments</li>
                    <li>Use of hotel-safe and approved cleaning chemicals</li>
                    <li>Flexible service hours to match hotel operations</li>
                    <li>Supervisor-led quality checks and reporting</li>
                    <li>Scalable services for single properties or hotel chains</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ================= END HOTEL CLEANING SECTIONS ================= -->




    <?php include ROOT_PATH . 'resource/section/testimonials-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/areas-section.php'; ?>
    <?php include ROOT_PATH . 'resource/section/cta-section.php'; ?>

    <?php include ROOT_PATH . 'resource/footer.php'; ?>

    <script src="<?php echo BASE_URL; ?>assets/script.js"></script>
</body>

</html>