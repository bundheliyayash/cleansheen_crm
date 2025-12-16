console.log("here");

// Hero Slider JavaScript
let currentSlide = 0;
let slides, dots, totalSlides, autoSlideInterval;

// Initialize slider
function initHeroSlider() {
  slides = document.querySelectorAll('.hero-slider .slide');
  dots = document.querySelectorAll('.slider-dots .dot');
  totalSlides = slides.length;

  if (totalSlides > 0) {
    startAutoPlay();

    // Pause on hover
    const heroSlider = document.querySelector('.hero-slider');
    if (heroSlider) {
      heroSlider.addEventListener('mouseenter', stopAutoPlay);
      heroSlider.addEventListener('mouseleave', startAutoPlay);
    }
  }
}

// Initialize auto-play
function startAutoPlay() {
  if (totalSlides <= 1) return;
  stopAutoPlay();
  autoSlideInterval = setInterval(() => {
    changeSlide(1);
  }, 5000); // Change slide every 5 seconds
}

// Stop auto-play
function stopAutoPlay() {
  if (autoSlideInterval) {
    clearInterval(autoSlideInterval);
  }
}

// Change slide
function changeSlide(direction) {
  if (!slides || totalSlides === 0) return;

  stopAutoPlay();

  // Remove active class from current slide
  slides[currentSlide].classList.remove('active');
  if (dots[currentSlide]) dots[currentSlide].classList.remove('active');

  // Calculate new slide index
  currentSlide = (currentSlide + direction + totalSlides) % totalSlides;

  // Add active class to new slide
  slides[currentSlide].classList.add('active');
  if (dots[currentSlide]) dots[currentSlide].classList.add('active');

  // Reset animations
  resetAnimations();

  startAutoPlay();
}

// Go to specific slide
function goToSlide(index) {
  if (!slides || totalSlides === 0 || index < 0 || index >= totalSlides) return;

  stopAutoPlay();

  slides[currentSlide].classList.remove('active');
  if (dots[currentSlide]) dots[currentSlide].classList.remove('active');

  currentSlide = index;

  slides[currentSlide].classList.add('active');
  if (dots[currentSlide]) dots[currentSlide].classList.add('active');

  resetAnimations();
  startAutoPlay();
}

// Reset animations for new slide
function resetAnimations() {
  if (!slides[currentSlide]) return;
  const activeSlide = slides[currentSlide];
  const elements = activeSlide.querySelectorAll('.promo-text, .orange-dot, .yellow-dot, .slide-title, .slide-btn');

  elements.forEach(el => {
    el.style.animation = 'none';
    el.offsetHeight; // Trigger reflow
    el.style.animation = null;
  });
}


// -- video review section 

// ------- reviews slider -------
let reviewAutoInterval;

function initReviewSlider() {
  const reviewSlides = document.getElementById('reviewsSlides');
  if (!reviewSlides) return;

  let currentReview = 0;
  const reviewDots = document.querySelectorAll('.testimonials-section .slider-dots .dot');
  const totalReviews = document.querySelectorAll('.review-card').length;

  function updateReviewSlider() {
    reviewSlides.style.transform = `translateX(-${currentReview * 100}%)`;
    reviewDots.forEach((dot, i) => {
      dot.classList.toggle('active', i === currentReview);
    });
  }

  function startReviewAuto() {
    if (reviewAutoInterval) clearInterval(reviewAutoInterval);
    reviewAutoInterval = setInterval(() => {
      currentReview = (currentReview + 1) % totalReviews;
      updateReviewSlider();
    }, 6000);
  }

  window.changeReview = function (dir) {
    if (reviewAutoInterval) clearInterval(reviewAutoInterval);
    currentReview = (currentReview + dir + totalReviews) % totalReviews;
    updateReviewSlider();
    startReviewAuto();
  }

  window.goToReview = function (i) {
    if (reviewAutoInterval) clearInterval(reviewAutoInterval);
    currentReview = i;
    updateReviewSlider();
    startReviewAuto();
  }

  updateReviewSlider();
  startReviewAuto();
}


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


// Initialize all on DOM load
document.addEventListener('DOMContentLoaded', function () {
  // Initialize hero slider
  initHeroSlider();

  // Initialize review slider
  initReviewSlider();

  // FAQ accordion
  const items = document.querySelectorAll('.faq-item');
  items.forEach(item => {
    const btn = item.querySelector('.faq-question');
    if (btn) {
      btn.addEventListener('click', () => {
        // optional: close others for accordion style
        items.forEach(i => {
          if (i !== item) i.classList.remove('open');
        });
        item.classList.toggle('open');
      });
    }
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


function searchFAQ() {
  const searchTerm = document.getElementById('searchInput').value.toLowerCase();
  const accordionItems = document.querySelectorAll('.accordion-item');

  accordionItems.forEach(item => {
    const question = item.querySelector('.accordion-button').textContent.toLowerCase();
    const answer = item.querySelector('.accordion-body').textContent.toLowerCase();

    if (question.includes(searchTerm) || answer.includes(searchTerm)) {
      item.style.display = 'block';
      if (searchTerm !== '') {
        item.querySelector('.accordion-button').classList.remove('collapsed');
        item.querySelector('.accordion-collapse').classList.add('show');
      }
    } else {
      item.style.display = 'none';
    }
  });
}

// Search on Enter key
document.getElementById('searchInput').addEventListener('keypress', function (e) {
  if (e.key === 'Enter') {
    searchFAQ();
  }
});

// Smooth scroll for category buttons
document.querySelectorAll('.category-btn').forEach(btn => {
  btn.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    target.scrollIntoView({ behavior: 'smooth', block: 'start' });

    // Remove active class from all buttons
    document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
    // Add active class to clicked button
    this.classList.add('active');
  });
});

// Active category on scroll
window.addEventListener('scroll', function () {
  const categories = document.querySelectorAll('.faq-category');
  const navButtons = document.querySelectorAll('.category-btn');

  let current = '';
  categories.forEach(category => {
    const sectionTop = category.offsetTop;
    if (pageYOffset >= sectionTop - 200) {
      current = category.getAttribute('id');
    }
  });

  navButtons.forEach(btn => {
    btn.classList.remove('active');
    if (btn.getAttribute('href') === '#' + current) {
      btn.classList.add('active');
    }
  });
});