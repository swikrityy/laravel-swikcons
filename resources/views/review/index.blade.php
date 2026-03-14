@extends('layouts.frontend.master')

@section('content')
    <!-- ================= TOP NAVBAR ================= -->
    
<!-- HERO -->
<div class="image-wrapper">
    <div class="opacity"></div>
    <img src="./reviewphotos/reviewhero.jpg" alt="Hero Image">
    <div class="hero-text"><h1>REVIEW</h1></div>
</div>
 
<!-- what customer say about us  -->
 <!-- GIRLYPOP ITS TIME FOR FEEDBACKSSS -->
 <div class="testimonials">
<div class="container">
    <h3>What Client Love About Us</h3>
   
 
   <div class="swiper Swiper1">
  <div class="swiper-wrapper">

    <div class="swiper-slide">
      <div class="testimonial-card">
        <span class="quote">“</span>
        <div class="avatar">👤</div>
        <h4 class="name">Ankita Lamichhane</h4>
        <p>
          Swik Consultancy made my study abroad process so easy. From course selection to visa documentation, everything was handled professionally. I felt confident and supported at every step. 💙
        </p>
        <div class="stars">★★★★★</div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="testimonial-card">
        <span class="quote">“</span>
        <div class="avatar">👤</div>
        <h4 class="name">Rohan Adhikari</h4>
        <p>
          I was confused about choosing the right university, but the counselors guided me perfectly. Their honest advice and quick responses really impressed me. Highly recommended! 🙌
        </p>
        <div class="stars">★★★★★</div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="testimonial-card">
        <span class="quote">“</span>
        <div class="avatar">👤</div>
        <h4 class="name">Suman Karki</h4>
        <p>
          Thanks to Swik Consultancy, my Australian student visa was approved without any hassle. Their documentation support was excellent, and the team was very friendly throughout the process. 😊
        </p>
        <div class="stars">★★★★★</div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="testimonial-card">
        <span class="quote">“</span>
        <div class="avatar">👤</div>
        <h4 class="name">Pooja Shrestha</h4>
        <p>
          The team genuinely cares about students. They explained everything clearly and always answered my questions patiently. I’m grateful for their constant support. 🌟
        </p>
        <div class="stars">★★★★★</div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="testimonial-card">
        <span class="quote">“</span>
        <div class="avatar">👤</div>
        <h4 class="name">Nishan Bhandari</h4>
        <p>
          Professional, reliable, and trustworthy. Swik Consultancy helped me choose the right pathway for my future. I couldn’t have done this without their guidance. 🙏
        </p>
        <div class="stars">★★★★★</div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="testimonial-card">
        <span class="quote">“</span>
        <div class="avatar">👤</div>
        <h4 class="name">Aayush Pokhrel</h4>
        <p>
          From IELTS guidance to visa submission, everything was smooth and well-managed. I highly appreciate their dedication and clear communication. 💼✈️
        </p>
        <div class="stars">★★★★★</div>
      </div>
    </div>

  </div>

  <div class="swiper-pagination"></div>
</div>
</div>

<!-- areview us  -->
 <!-- ================= REVIEW US SECTION ================= -->
<section class="review-us-section">
  <div class="container">
    <h2 class="review-title">Review us</h2>

    <div class="row justify-content-center mt-5">

      <!-- Google Review -->
      <div class="col-md-5 text-center mb-5">
        <h5 class="platform-title">Review us on Google</h5>

        <div class="qr-box">
          <img src="./reviewphotos/qr.jpg" alt="Google Review QR">
        </div>

        <p class="scan-text">Scan Me !!</p>

        <a href="https://g.page/your-google-review-link" target="_blank">
          <button class="review-btn">Click to review on Google</button>
        </a>
      </div>

      <!-- Facebook Review -->
      <div class="col-md-5 text-center mb-5">
        <h5 class="platform-title">Review us on Facebook</h5>

        <div class="qr-box">
          <img src="./reviewphotos/qr.jpg" alt="Facebook Review QR">
        </div>

        <p class="scan-text">Scan Me !!</p>

        <a href="https://facebook.com/your-page-reviews" target="_blank">
          <button class="review-btn">Click to review on Facebook</button>
        </a>
      </div>

    </div>
  </div>
</section>

@endsection