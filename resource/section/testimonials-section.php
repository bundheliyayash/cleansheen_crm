  <!-- TESTIMONIALS SECTION -->
  <section class="testimonials-section">
    <div class="testimonials-container">
      <!-- Heading + Google rating (optional) -->
      <div class="testimonials-header">
        <h2>What Our Customers Say</h2>
        <p>Real reviews from satisfied customers across Gujarat</p>

        <div class="google-rating">
          <img
            src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png"
            alt="Google" />
          <span class="rating-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star"></i><i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </span>
          <span class="rating-text">4.8/5 (120+ Reviews)</span>
        </div>
      </div>

      <!-- 1) REVIEWS SLIDER -->
      <div class="reviews-slider">
        <div class="reviews-track">
          <div class="reviews-slides" id="reviewsSlides">
            <!-- Review 1 -->
            <div class="review-card">
              <div class="review-header">
                <img src="images/reviewer1.jpg" class="reviewer-img" alt="" />
                <div class="reviewer-info">
                  <h4>Amit Shah</h4>
                  <p>Office Manager, Surat</p>
                </div>
              </div>
              <div class="review-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="review-text">
                “Cleansheen keeps our office spotless every week. The team is
                punctual, polite and the quality is excellent.”
              </p>
              <div class="review-source">
                <img src="https://www.google.com/favicon.ico" alt="" />
                <span>Posted on Google</span>
              </div>
            </div>

            <!-- Review 2 -->
            <div class="review-card">
              <div class="review-header">
                <img src="<?php echo BASE_URL . '/includes/images/reviewer2.jpg'?>" class="reviewer-img" alt="" />
                <div class="reviewer-info">
                  <h4>Priya Desai</h4>
                  <p>Temple Trust, Vadodara</p>
                </div>
              </div>
              <div class="review-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="review-text">
                “Very respectful team, worked around our mandir timings and
                cleaned every corner before festival days.”
              </p>
              <div class="review-source">
                <img src="https://www.google.com/favicon.ico" alt="" />
                <span>Posted on Google</span>
              </div>
            </div>

            <!-- Review 3 -->
            <div class="review-card">
              <div class="review-header">
                <img src="images/reviewer3.jpg" class="reviewer-img" alt="" />
                <div class="reviewer-info">
                  <h4>Mehul Joshi</h4>
                  <p>Hospital Admin, Ahmedabad</p>
                </div>
              </div>
              <div class="review-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <p class="review-text">
                “They understand hospital hygiene standards and use safe,
                eco‑friendly products which is very important for us.”
              </p>
              <div class="review-source">
                <img src="https://www.google.com/favicon.ico" alt="" />
                <span>Posted on Google</span>
              </div>
            </div>

            <!-- Review 4 -->
            <div class="review-card">
              <div class="review-header">
                <img src="images/reviewer4.jpg" class="reviewer-img" alt="" />
                <div class="reviewer-info">
                  <h4>Neha Sharma</h4>
                  <p>Homeowner, Surat</p>
                </div>
              </div>
              <div class="review-stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <p class="review-text">
                “Deep cleaning service was amazing. Kitchen and bathrooms look
                like new. Highly recommended.”
              </p>
              <div class="review-source">
                <img src="https://www.facebook.com/favicon.ico" alt="" />
                <span>Posted on Facebook</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Review nav -->
        <div class="slider-nav">
          <div class="slider-dots">
            <button class="dot" onclick="goToReview(0)"></button>
            <button class="dot" onclick="goToReview(1)"></button>
            <button class="dot" onclick="goToReview(2)"></button>
            <button class="dot" onclick="goToReview(3)"></button>
          </div>
          <div class="slider-arrows">
            <button onclick="changeReview(-1)">
              <i class="fas fa-arrow-left"></i>
            </button>
            <button onclick="changeReview(1)">
              <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- 2) VIDEO ROW (2 simple cards) -->
      <div class="video-row">
        <!-- Video 1 -->
        <div class="video-card">
          <div class="video-wrapper">
            <video poster="<?php echo BASE_URL . 'includes/image/main1.jpg'?>">
              <source src="<?php echo BASE_URL . 'includes/video/cleanvideo.mp4'?>" type="video/mp4" />
            </video>
            <button class="video-play" onclick="togglePlay(this)">
              <i class="fas fa-play"></i>
            </button>
          </div>
          <div class="video-meta">
            <h4>Rajesh Patel</h4>
            <p>Hotel Owner, Ahmedabad</p>
          </div>
        </div>

        <!-- Video 2 -->
        <div class="video-card">
          <div class="video-wrapper">
            <video poster="<?php echo BASE_URL . 'includes/image/main1.jpg'?>">
              <source src="<?php echo BASE_URL . 'includes/video/cleanvideo.mp4'?>" type="video/mp4" />
            </video>
            <button class="video-play" onclick="togglePlay(this)">
              <i class="fas fa-play"></i>
            </button>
          </div>
          <div class="video-meta">
            <h4>Priya Desai</h4>
            <p>Temple Trustee, Vadodara</p>
          </div>
        </div>
      </div>
    </div>
  </section>