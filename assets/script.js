console.log("here");

// Hero Slider JavaScript
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');
const totalSlides = slides.length;
let autoSlideInterval;

// Initialize auto-play
function startAutoPlay() {
    autoSlideInterval = setInterval(() => {
        changeSlide(1);
    }, 5000); // Change slide every 5 seconds
}

// Stop auto-play
function stopAutoPlay() {
    clearInterval(autoSlideInterval);
}

// Change slide
function changeSlide(direction) {
    stopAutoPlay();
    
    // Remove active class from current slide
    slides[currentSlide].classList.remove('active');
    dots[currentSlide].classList.remove('active');
    
    // Calculate new slide index
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
    
    // Add active class to new slide
    slides[currentSlide].classList.add('active');
    dots[currentSlide].classList.add('active');
    
    // Reset animations
    resetAnimations();
    
    startAutoPlay();
}

// Go to specific slide
function goToSlide(index) {
    stopAutoPlay();
    
    slides[currentSlide].classList.remove('active');
    dots[currentSlide].classList.remove('active');
    
    currentSlide = index;
    
    slides[currentSlide].classList.add('active');
    dots[currentSlide].classList.add('active');
    
    resetAnimations();
    startAutoPlay();
}

// Reset animations for new slide
function resetAnimations() {
    const activeSlide = slides[currentSlide];
    const elements = activeSlide.querySelectorAll('.promo-text, .orange-dot, .slide-title, .slide-btn');
    
    elements.forEach(el => {
        el.style.animation = 'none';
        el.offsetHeight; // Trigger reflow
        el.style.animation = null;
    });
}

// Start slider on page load
document.addEventListener('DOMContentLoaded', () => {
    startAutoPlay();
});

// Pause on hover (optional)
const heroSlider = document.querySelector('.hero-slider');
heroSlider.addEventListener('mouseenter', stopAutoPlay);
heroSlider.addEventListener('mouseleave', startAutoPlay);


// -- video review section 

// ------- reviews slider -------
document.addEventListener("DOMContentLoaded", () => {
  let currentReview = 0;
  const reviewSlides = document.getElementById('reviewsSlides');
  const reviewDots = document.querySelectorAll('.slider-dots .dot');
  const totalReviews = document.querySelectorAll('.review-card').length;

  function updateReviewSlider() {
    reviewSlides.style.transform = `translateX(-${currentReview * 100}%)`;
    reviewDots.forEach((dot, i) => {
      dot.classList.toggle('active', i === currentReview);
    });
  }

  window.changeReview = function(dir) {
    console.log(dir);
    currentReview = (currentReview + dir + totalReviews) % totalReviews;
    updateReviewSlider();
  }

  window.goToReview = function(i) {
    currentReview = i;
    updateReviewSlider();
  }

  setInterval(() => changeReview(1), 6000);
});


// ------- video play / pause (2 cards) -------
function togglePlay(btn) {
  const video = btn.previousElementSibling;
  document.querySelectorAll('.video-wrapper video').forEach(v => {
    if (v !== video) v.pause();
  });

  if (video.paused) {
    video.play();
    btn.style.opacity = '0';
  } else {
    video.pause();
    btn.style.opacity = '1';
  }

  video.onended = () => { btn.style.opacity = '1'; };
}


// 

// Mobile menu toggle
      const hamburger = document.getElementById("hamburger");
      const navMenu = document.getElementById("navMenu");

      hamburger.addEventListener("click", () => {
        navMenu.classList.toggle("active");
      });

      // Mobile submenu toggle
      const menuItems = document.querySelectorAll(".nav-menu > li");

      menuItems.forEach((item) => {
        item.addEventListener("click", function (e) {
          if (window.innerWidth <= 992) {
            this.classList.toggle("active");
          }
        });
      });


  document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.faq-item');

    items.forEach(item => {
      const btn = item.querySelector('.faq-question');
      btn.addEventListener('click', () => {
        // optional: close others for accordion style
        items.forEach(i => {
          if (i !== item) i.classList.remove('open');
        });
        item.classList.toggle('open');
      });
    });
  });


//   carper tab
document.addEventListener('DOMContentLoaded', function () {
  const tabs = document.querySelectorAll('.cm-tab');
  const panels = document.querySelectorAll('.cm-panel');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      panels.forEach(p => p.classList.remove('active'));

      tab.classList.add('active');
      document.querySelector(tab.dataset.target).classList.add('active');
    });
  });
});
