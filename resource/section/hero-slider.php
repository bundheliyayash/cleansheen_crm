<!-- Hero Slider Section -->
<section class="hero-slider">
    <div class="slider-container">
        <!-- Slide 1 -->
        <div class="slide active">
            <img src="<?php echo BASE_URL . 'includes/image/hero-slider-1.png' ?>" alt="Cleaning Service"
                class="slide-image" />
            <div class="slide-content">
                <div class="yellow-dot"></div>
                <h1 class="slide-title">We Clean, You Relax.</h1>
                <a href="<?php echo BASE_URL . 'resource/about/contact-us.php' ?>" class="slide-btn">Get a Quote</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide">
            <img src="<?php echo BASE_URL . 'includes/image/hero-slider-2.jpeg' ?>" alt="Deep Cleaning"
                class="slide-image" />
            <div class="slide-content">
                <div class="yellow-dot"></div>
                <h1 class="slide-title">Spotless Spaces, Happy Faces.</h1>
                <a href="<?php echo BASE_URL . 'resource/about/contact-us.php' ?>" class="slide-btn">Get a Quote</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide">
            <img src="<?php echo BASE_URL . 'includes/image/hero-slider-3.jpg' ?>" alt="Office Cleaning"
                class="slide-image" />
            <div class="slide-content">
                <div class="yellow-dot"></div>
                <h1 class="slide-title">Professional Clean, Every Time.</h1>
                <a href="<?php echo BASE_URL . 'resource/about/contact-us.php' ?>" class="slide-btn">Get a Quote</a>
            </div>
        </div>
    </div>

    <!-- Navigation Arrows -->
    <button class="slider-arrow prev" onclick="changeSlide(-1)">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="slider-arrow next" onclick="changeSlide(1)">
        <i class="fas fa-chevron-right"></i>
    </button>

    <!-- Dots Navigation -->
    <div class="slider-dots">
        <button class="dot active" onclick="goToSlide(0)"></button>
        <button class="dot" onclick="goToSlide(1)"></button>
        <button class="dot" onclick="goToSlide(2)"></button>
    </div>
</section>