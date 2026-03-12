<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Review US</title>

    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.css" />

    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- swiper link -->
     <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"
/>


    <style>
        /* ------------------ GLOBAL ------------------ */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Poppins !important;
        }

        body {
            background-color: #f5f5f5;
            /* overflow: hidden; */
        }

        /* ------------------ TOP NAVBAR ------------------ */
        .main-top-nav {
    background: rgb(26, 26, 97);
}

.top-navbar {
    display: flex;
    justify-content: flex-end;   
    align-items: center;
    gap: 20px;
    color: #fff;
    font-size: 14px;
    
}

.top-navbar .logo {
    display: flex;
    align-items: center;
    gap: 6px;
}


.top-navbar p {
    margin: 0;
    line-height: 1;
}
@media (max-width: 768px) {
    .main-top-nav {
        display: none;
        overflow: hidden;
    }
}


        /* ------------------ MAIN NAVBAR ------------------ */
        .second-navbar{
            background-color:white ;
            box-shadow: 1px 1px 3px rgb(165, 164, 164);
        }

        .nav-item {
            padding-left: 20px;
            font-weight: 400;
            font-size: 16px;
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        .nav-link {
            color: black !important;
        }

        /* ------------------ CONTACT BUTTON ------------------ */
        .contact-btn {
            background-color: rgb(26, 26, 97);
            color: white;
            padding: 8px 18px;
            border-radius: 20px;
            border: none;
            
        }

        /* ---------------- HERO SECTION ---------------- */
        /* ------------------ HERO SECTION ------------------ */
.image-wrapper {
    position: relative;
    height: 40vh;
    width: 100%;
}

.image-wrapper img {
    height: 100%;
    width: 100%;
    object-fit: cover;
   
}

.opacity {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(17, 4, 66, 0.55);
    z-index: 10;
}

.hero-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    z-index: 20;
    text-align: center;
}

.hero-text h1 {
    font-size: 48px;
    font-weight: 600;
    letter-spacing: 4px;
}

@media (max-width: 768px) {
    .hero-text h1 {
        font-size: 28px;
        letter-spacing: 2px;
    }
}
@media (max-width: 768px) {
  .image-wrapper {
    height: 28vh;
  }

  .hero-text {
    width: 100%;
    padding: 0 15px;
  }

  .hero-text h1 {
    font-size: 26px;
    letter-spacing: 2px;
  }
}

/* testimonials */
/* TESTIMONIALS  */
/* ================= Testimonials Section ================= */
.testimonials {
    background: #f6f9fc;
    padding: 70px 0;
    text-align: center;
}

.testimonials h3 {
    font-size: 32px;
    color: rgb(26, 26, 97);
    margin-bottom: 50px;
}

/* ================= Swiper ================= */
.Swiper1 {
    padding-bottom: 50px;
}

.swiper-slide {
    height: auto;
    display: flex;
    justify-content: center;
}

/* ================= Testimonial Card ================= */
.testimonial-card {
    background: #fff;
    padding: 40px 30px 50px;
    border-radius: 16px;
    text-align: left;
    position: relative;
    box-shadow: 0 15px 40px rgba(0,0,0,0.06);
    max-width: 360px;
    width: 100%;
}

/* Quote icon */
.testimonial-card .quote {
    font-size: 100px;
    color: rgba(0,0,0,0.05);
    position: absolute;
    bottom: 5px;
    right: 15px;
    line-height: 1;
}

/* Avatar */
.avatar {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
    font-size: 26px;
    color: #fff;
    background-color: rgb(26, 26, 97);
}

/* Name */
.testimonial-card .name {
    color: rgb(26, 26, 97);
    font-size: 18px;
    margin-bottom: 12px;
}

/* Text */
.testimonial-card p {
    font-size: 15px;
    line-height: 1.7;
    color: #5f6c7b;
}

/* Stars */
.stars {
    margin-top: 25px;
    color: #111;
    letter-spacing: 4px;
    font-size: 14px;
}

/* ================= Pagination ================= */
.swiper-pagination-bullet {
    background: rgb(26, 26, 97);
    opacity: 0.3;
}

.swiper-pagination-bullet-active {
    opacity: 1;
}

/* ================= Mobile Responsive ================= */
@media (max-width: 768px) {
  .swiper-slide {
    padding: 0 10px;
  }

  .testimonial-card {
    max-width: 100%;
    padding: 22px 18px;
  }

  .testimonial-card p {
    font-size: 14px;
    line-height: 1.6;
  }

  .avatar {
    width: 42px;
    height: 42px;
    font-size: 20px;
  }

  .testimonial-card .name {
    font-size: 15px;
  }

  .stars {
    font-size: 12px;
    margin-top: 12px;
  }
}
.swiper-wrapper {
  align-items: stretch;
}

.testimonial-card {
  height: 100%;
}

/* ================= REVIEW US ================= */
.review-us-section {
  padding: 90px 0;
  background-color: #fff;
}

.review-title {
  text-align: center;
  font-size: 42px;
  font-weight: 600;
  color:  rgb(26, 26, 97);
}

.platform-title {
  font-size: 18px;
  margin-bottom: 20px;
  color: #333;
}

.qr-box {
  display: inline-block;
  padding: 20px;
  background: #fff;
  
}



.qr-box img {
  width: 170px;
  height: 160px;
}

.scan-text {
  margin-top: 15px;
  font-weight: 500;
  color: #555;
}

.review-btn {
  margin-top: 15px;
  padding: 10px 22px;
  border: none;
  border-radius: 6px;
  background:  rgb(26, 26, 97);
  color: white;
  font-size: 14px;
  cursor: pointer;
}

.review-btn:hover {
  background: rgb(26, 26, 97);
  color: #fff;
  transition: 0.3s ease;
}
/* Force side-by-side QR on mobile */
@media (max-width: 576px) {
  .review-us-section {
    padding: 50px 0;
  }

  .review-title {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .review-us-section .row {
    display: flex;
    flex-wrap: nowrap;
    gap: 12px;
  }

  .review-us-section .col-md-5 {
    flex: 0 0 50%;
    max-width: 50%;
  }

  .qr-box {
    padding: 12px;
  }

  .qr-box img {
    width: 95px;
    height: 95px;
  }

  .platform-title {
    font-size: 13px;
  }

  .scan-text {
    font-size: 11px;
  }

  .review-btn {
    font-size: 11px;
    padding: 7px 10px;
  }
}


/* Mobile */
@media (max-width: 768px) {
  .review-title {
    font-size: 28px;
  }

  .qr-box img {
    width: 140px;
    height: 140px;
  }
}
/* FOOTER  */
 /* Footer */
.footer{
    background-color:rgb(26, 26, 97);
    color:white;
    padding:50px 20px 20px 20px;
}
.footer-container{
    display:flex;
    flex-wrap:wrap;
    justify-content:space-between;
    gap:30px;
    max-width:1200px;
    margin:auto;
}
.footer-section{
    flex:1 1 220px;
}
.footer-section img{
    background-color: white;
}
.footer-logo{
    width:120px;
    margin-bottom:15px;
}
.footer-section h3{
    font-size:16px;
    margin-bottom:15px;
    font-weight:600;
}
.footer-section p, .footer-section li{
    font-size:14px;
    line-height:1.6;
    color:#f0f0f0;
}
.footer-section ul{
    list-style:none;
    padding:0;
}
.footer-section ul li a{
    text-decoration:none;
    color:#f0f0f0;
    transition:0.3s;
}
.footer-section ul li a:hover{
    color:#ffcc00;
}
.social-icons a{
    color:#f0f0f0;
    font-size:18px;
    margin-right:10px;
    transition:0.3s;
}
.social-icons a:hover{
    color:#ffffff;
}


.footer-bottom{
    text-align:center;
    margin-top:20px;
    border-top:1px solid rgba(255,255,255,0.2);
    padding-top:15px;
    font-size:14px;
    color:#ccc;
}
       @media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 25px;
    }
    .footer-section {
        flex: 1 1 100%;
    }
    .social-icons {
        justify-content: center;
    }
    .footer-bottom {
        font-size: 12px;
    }
}


</style>
</head>
<body>
    <!-- ================= TOP NAVBAR ================= -->
    <div class="main-top-nav">
        <div class="container">
            <div class="top-navbar">
                <div class="logo">
                    <i class="ri-facebook-fill"></i>
                    <p>Facebook</p>
                </div>
                <div class="logo">
                    <i class="ri-mail-line"></i>
                    <p>swikconsul123@gmail.com</p>
                </div>
                <div class="logo">
                    <i class="ri-phone-fill"></i>
                    <p>9829158346</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ================= MAIN NAVBAR ================= -->
    <div class="second-navbar sticky-top ">
        <div class="container">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">

                    <!-- Logo -->
                    <a class="navbar-brand" href="home.html">
                        <img src="./homeimages/logo.png" alt="Logo" height="80">
                    </a>

                    <!-- Toggle -->
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Links -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="nav-link active" href="home.html">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="testpreperation.html" data-bs-toggle="dropdown">
                                    Test Preparation
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="testpreperation.html">IELTS</a></li>
                                    <li><a class="dropdown-item" href="testpreperation.html">PTE</a></li>
                                    <li><a class="dropdown-item" href="testpreperation.html">TOEFL</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="studyabroad.html" data-bs-toggle="dropdown">
                                    Study Abroad
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="studyabroad.html">Study in Australia</a></li>
                                    <li><a class="dropdown-item" href="studyabroad.html">Study in Canada</a></li>
                                    <li><a class="dropdown-item" href="studyabroad.html">Study in London</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="university.html">University</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                            
                            <li class="nav-item"><a class="nav-link" href="Blog.html">Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="aboutus.html">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="review.html">Review</a></li>
                            

                        </ul>

                       <a href="contact.html"><button class="contact-btn">Contact Us</button></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

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


<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".Swiper1", {
  slidesPerView: 3,       // Desktop default
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
   autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
  breakpoints: {
    0: {       // Mobile view
      slidesPerView: 1,   // Only 1 card per view
      spaceBetween: 15
    },
    768: {     // Tablet view
      slidesPerView: 2,
      spaceBetween: 20
    },
    1024: {    // Desktop view
      slidesPerView: 3,
      spaceBetween: 30
    },
   
  }
});

       
    
  </script>

 </div>

 <!-- footer  -->
 <footer class="footer">
    <div class="footer-container">
        <div class="footer-section">
            <img src="./homeimages/logo.png" class="footer-logo" alt="">
            <p>Your Ambitions Our Achievements.</p>
        </div>
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li> <a href="home.html">Home</a></li>
                <li> <a href="testpreperation.html">Test preperation</a></li>
                <li> <a href="studyabroad.html">Study Abroad</a></li>
                <li> <a href="university.html">Universities</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="Blog.html">Blogs</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="review.html">Review</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p><i class="ri-map-pin-line"></i> Gaidakot-4, Nawalpur, Nepal</p>
            <p><i class="ri-phone-fill"></i> 9829158346</p>
            <p><i class="ri-mail-line"></i> swikconsul123@gmail.com</p>
        </div>
        <div class="footer-section">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <a href="#"><i class="ri-facebook-fill"></i></a>
                <a href="#"><i class="ri-instagram-line"></i></a>
                <a href="#"><i class="ri-twitter-fill"></i></a>
                <a href="#"><i class="ri-linkedin-fill"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 Swik Consultancy. All rights reserved.</p>
    </div>
</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
