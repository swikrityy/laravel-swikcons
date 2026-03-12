<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Livvic&family=Open+Sans&family=Poppins&family=Rosario&family=Sora&display=swap"
        rel="stylesheet"
    >

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- aos css  -->
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <!-- swiper css  -->
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
            font-weight: 500;
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

        /* -------------------HERO SECTION------------------ */
        /* ===== HERO SECTION ===== */
.hero-wrapper {
    background-color: #fff;
}

.hero-wrapper .row {
    min-height: 80vh;
    align-items: center;
}


/* ===== TEXT SECTION ===== */



.hero-wrapper .text .smaller-text {
    color: #474748e7;
}

.hero-wrapper .text h3 {
    font-size: 50px;
    font-weight: 600;
    color: rgb(26, 26, 97);
}
@media (max-width: 768px) {

    /* Hide overflow */
    .hero-wrapper {
        overflow: hidden;
    }

    /* Center all hero text */
    .hero-wrapper .text {
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }


    .hero-wrapper .text h3 {
        font-size: 27px;
        font-weight: 600;
        color: rgb(26, 26, 97);
    }

    .hero-wrapper .text p {
        font-size: 14px;
        max-width: 90%;
    }
}


/* IMAGE */
.hero-wrapper .image-wrapper {
    /* padding-right: 70px; */
    position: relative;
    animation: float 4s ease-in-out infinite;
}

.image-wrapper img {
    max-width: 100%;
    height: auto;
    position: relative;
    z-index: 5;
    /* left: 20px; */
}

/* FLOAT */
@keyframes float {
    0% { transform: translateY(0); }
    50% { transform: translateY(-15px); }
    100% { transform: translateY(0); }
}

/* SHAPES */
.image-wrapper::after {
    content: '';
    height: 420px;
    width: 400px;
    background-color: rgb(22, 22, 91);
    position: absolute;
    bottom: 1px;
    left: 35px;
    border-radius: 280px 280px 10px 10px;
    z-index: -1;
}

.image-wrapper::before {
   content: '';
        height: 494px;
        width: 430px;
        border: 1px solid rgb(26, 26, 97);
        display: inline-block;
        position: absolute;
        left: 18px;
        z-index: -10;
        border-radius: 280px 280px 10px 10px;
}
@media (max-width: 768px) {

    /* Center the image wrapper */
    .hero-wrapper .image-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        /* margin-top: 0px; */
    }
   
    /* BEFORE shape (outline) */
    .image-wrapper::before {
      height: 342px;
width: 286px;
bottom: 0px;
left: 33px;
       
        
        border-radius: 180px 180px 10px 10px;
    }

    /* AFTER shape (solid) */
    .image-wrapper::after {
       height: 254px;
width: 269px;
       bottom: 0px;
       left: 40px;
          
        border-radius: 180px 180px 10px 10px;
    }

    /* Image centering */
    .image-wrapper img {
        left: 0;
        max-width: 320px;
        
    }

    /* Prevent horizontal scroll */
    .hero-wrapper {
        overflow-x: hidden;
    }
}


/* snackbar */
.inner-content {
     background-color: rgb(26, 26, 97) ;
    
}

    .inner-content h1{
        font-size: 30px;
        color: rgb(255, 255, 255) ;
        padding-top: 12px;
        display: flex;
        justify-content: center;
    }

    /* section of hero after */
    .stats-section{
    display:flex;
    justify-content:center;
    gap:20px;
    padding:50px 20px;
    flex-wrap:wrap;
    text-align:center;
}
.stat-card{
    flex:1 1 150px;
   background-color: rgb(240, 240, 241);
    border-radius:12px;
    padding:5px;
    box-shadow:0 4px 12px rgba(0,0,0,0.1);
}
.stat-card h3{
    font-size:30px;
    color:rgb(26, 26, 97);
    margin-bottom:0px;
}
.stat-card p{
    font-size:14px;
    color:#3a3838;
}
.inner-container-wrapper{
    background-color:rgb(26, 26, 97);
}
@media (max-width: 768px) {

    /* Smaller heading */
    .inner-content h1 {
        font-size: 18px;
        text-align: center;
        padding: 10px 15px;
        line-height: 1.4;
    }

    /* Reduce section padding */
    .stats-section {
        padding: 20px 10px;
    }

    /* Force 2x2 grid */
    .stats-section .row > div {
        flex: 0 0 50%;
        max-width: 50%;
    }

    /* Card styling for mobile */
    .stat-card {
        padding: 10px;
        height: 100%;
    }

    .stat-card h3 {
        font-size: 20px;
    }

    .stat-card p {
        font-size: 12px;
    }
}

/* about us section  */
.about-section {
    
    background-color: #ffffff;
}

.about-container {
    display: flex;
    align-items: center;
   
}

/* LEFT TEXT */
.whole-content-of-goals{
    padding-top: 30px;
    padding-bottom: 60px;

}
.about-text {
    flex: 1;
}

.about-text h2 {
    font-size: 42px;
    color: rgb(26, 26, 97);;
    font-weight: 700;
    
}

.about-desc {
    font-size: 16px;
    color: #555;
    
}

.about-point {
    display: flex;
    gap: 15px;
    
}

.about-point span {
    color:  rgb(26, 26, 97); ;
    font-size: 14px;
    margin-top: 6px;
}

.about-point h4 {
    font-size: 18px;
    color:  rgb(26, 26, 97);;
    
}

.about-point p {
    font-size: 14px;
    color: #555;
    line-height: 1.6;
}
@media (max-width: 768px) {

    /* Image column spacing */
    .about-images {
        position: relative;
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    /* Main image */
    .about-images .img-main {
        width: 90%;
        max-width: 280px;
        border-radius: 10px;
    }

    /* Overlay image */
    .about-images .img-overlay {
        position: absolute;
        width: 55%;
        max-width: 160px;
        bottom: -10px;
        right: 10px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }
}

/* right two images  */
.about-images {
    flex: 1;
    position: relative;
    margin-right: 50px;
}

.about-images img {
    width: 70%;
    border-radius: 14px;
    
}

.img-main {
    max-width: 420px;
    
}

.img-overlay {
    position: absolute;
    bottom: -40px;
    right: -60px;
    width: 100px;              
    height: 200px;              
    border-radius: 14px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.2);
    object-fit: cover;
    
}
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

    .testimonials h3 {
        font-size: 20px;
        margin-bottom: 30px;
        padding: 0 10px;
    }

    .testimonial-card {
        padding: 25px 20px 35px;
    }

    .testimonial-card p {
        font-size: 14px;
    }

    .testimonial-card .quote {
        font-size: 70px;
    }
}


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

    <!-- ================= HERO SECTION ================= -->
    <div class="hero-wrapper">
        <div class="container">
            <div class="row align-items-center">
               
                <div class="col-lg-7">
                    <div class="text">
                       <div data-aos="fade-right"  data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="3000">
                           <p class="smaller-text">Your Path to Global Opportunities</p>
                        <h3>Turning Ambitions into Achievements</h3>
                        <p>
                            We provide expert guidance to help students and professionals achieve
                            their academic and career goals, unlocking global opportunities and
                            turning dreams into achievements.
                        </p>
                       </div>
                        
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="container">
                        <div class="image-wrapper">
                            <div class="circle">
                               <img src="./homeimages/hero.png" alt="">
                            </div>
                         </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ================= snack bar ================= -->
     
    <div class="inner-content">
        <h1>Your academic goals are waiting to be achieved</h1>
        <section class="stats-section">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="stat-card">
          <h3>12,500+</h3>
          <p>Dreams turned into visas!</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-">
        <div class="stat-card">
          <h3>9,000+</h3>
          <p>Universities</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="stat-card">
          <h3>6,000+</h3>
          <p>Satisfied Students</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="stat-card">
          <h3>10+</h3>
          <p>Locations</p>
        </div>
      </div>
    </div>
  </div>
</section>


     </div>
     
                
   

     <!-- LEFT CONTENT -->
      <div class="whole-content-of-goals ">

      <div class="container">
        <div class="row ">
            <div class="col-lg-6  ">
                
                        <div class="about-text">
             <div data-aos="fade-right"  data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="3000">
                <h2>Commence with your goals</h2>
            <p class="about-desc">
                Swik Consultancy offers you the best education consultancy in Nepal.
            </p>

            <div class="about-point">
                <span>▶</span>
                <div>
                    <h4>Visa consultation</h4>
                    <p>
                        We provide professional visa consulting experts to assist you
                        with all details and requirements specific to your goals.
                    </p>
                </div>
            </div>

            <div class="about-point">
                <span>▶</span>
                <div>
                    <h4>Admissions advice</h4>
                    <p>
                        We’ll guide you from the very beginning till you gain admission
                        in a college or university suitable to you.
                    </p>
                </div>
            </div>

            <div class="about-point">
                <span>▶</span>
                <div>
                    <h4>Travel and stay</h4>
                    <p>
                        Need the best accommodation while studying abroad?
                        We’ve got you covered.
                    </p>
                </div>
                
            </div>
        </div>
     

      </div>

             </div>
            
      <!-- RIGHT TWO IMAGES  -->

       <div class="col-lg-6  ">
         <div data-aos="fade-left"   data-aos-duration="3000">
            <div class="about-images">
            <img src="./homeimages/gradurate.jpg" class="img-main" alt="">
            <img src="./homeimages/students.jpg" class="img-overlay" alt="">
        </div>
       </div>

    </div>
           
 </div>
        

</div>

         </div>
          

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
 


 

     <!-- for auto-detect active page  -->
      <script>
  // Automatically add 'active' class to current page link
  const currentPage = window.location.pathname.split("/").pop();
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

  navLinks.forEach(link => {
      const linkPage = link.getAttribute('href');
      if (linkPage === currentPage) {
          link.classList.add('active');
      } else {
          link.classList.remove('active');
      }
  });
</script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FOOTER -->
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
<!-- aos script  -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- aos script initalization -->
<script>
  AOS.init();
</script>
</body>
</html>
