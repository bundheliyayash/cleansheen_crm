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
  initAccordion();
});

// Accordion functionality

function initAccordion() {
    const accordionButtons = document.querySelectorAll('.accordion-button');
    accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-bs-target');
            const target = document.querySelector(targetId);
            const parentSelector = target.getAttribute('data-bs-parent');
            const parent = document.querySelector(parentSelector);
            // Check if the button is currently collapsed (i.e., the target is hidden)
            const isCollapsed = this.classList.contains('collapsed');
            // If we are opening this item, then we need to close all others in the same parent
            if (isCollapsed && parent) {
                // Close all other open items in this parent
                const openButtons = parent.querySelectorAll('.accordion-button:not(.collapsed)');
                openButtons.forEach(openButton => {
                    if (openButton !== this) {
                        openButton.classList.add('collapsed');
                        const openTargetId = openButton.getAttribute('data-bs-target');
                        const openTarget = document.querySelector(openTargetId);
                        openTarget.classList.remove('show');
                    }
                });
            }
            // Toggle the current button and target
            this.classList.toggle('collapsed');
            target.classList.toggle('show');
        });
    });
}




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


    document.addEventListener('DOMContentLoaded', function() {
        // Get all accordion buttons
        const accordionButtons = document.querySelectorAll('.faq-accordion .accordion-button');
        
        // Initialize: All answers are closed by default
        const allCollapses = document.querySelectorAll('.faq-accordion .accordion-collapse');
        allCollapses.forEach(collapse => {
            collapse.classList.remove('show');
        });
        
        // Add click event to each button
        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const targetCollapse = document.querySelector(targetId);
                
                // Close all other answers in the same category
                const parentAccordion = this.closest('.accordion');
                const allButtonsInCategory = parentAccordion.querySelectorAll('.accordion-button');
                const allCollapsesInCategory = parentAccordion.querySelectorAll('.accordion-collapse');
                
                // If the clicked question is already open, close it
                if (this.classList.contains('active')) {
                    this.classList.remove('active');
                    this.classList.add('collapsed');
                    targetCollapse.classList.remove('show');
                } else {
                    // Close all in this category
                    allButtonsInCategory.forEach(btn => {
                        btn.classList.remove('active');
                        btn.classList.add('collapsed');
                    });
                    
                    allCollapsesInCategory.forEach(collapse => {
                        collapse.classList.remove('show');
                    });
                    
                    // Open the clicked one
                    this.classList.remove('collapsed');
                    this.classList.add('active');
                    targetCollapse.classList.add('show');
                }
            });
        });
        
        // Category Navigation
        document.querySelectorAll('.category-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    // Remove active class from all buttons
                    document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Scroll to target
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Highlight active category on scroll
        const observerOptions = {
            root: null,
            rootMargin: '-100px 0px -50% 0px',
            threshold: 0
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const activeId = entry.target.id;
                    document.querySelectorAll('.category-btn').forEach(btn => {
                        btn.classList.remove('active');
                        if (btn.getAttribute('href') === '#' + activeId) {
                            btn.classList.add('active');
                        }
                    });
                }
            });
        }, observerOptions);
        
        // Observe both FAQ categories
        document.querySelectorAll('.faq-category').forEach(category => {
            observer.observe(category);
        });
    });