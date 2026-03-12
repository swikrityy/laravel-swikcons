<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - Swik Consultancy</title>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Remix Icons -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet">
 
<!-- aos link -->
 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
/* ------------------ GLOBAL ------------------ */
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
    font-size: 50px;
    font-weight: 700;
}

/* ---------------- CONTENT SECTIONS ---------------- */
.section {
    padding: 37px 0px;
}

.section h1, .section h2 {
    color: rgb(26, 26, 97);
    font-weight: 500;
    font-size: 28px;
    margin-bottom: 20px;
}

.section p {
    font-size: 15px;
    line-height: 1.7;
}

/* ---------------- STATS ---------------- */
.inner-container-wrapper {
    background-color: rgb(26, 26, 97);
    padding: 40px 0;
}

.inner-content h1 {
    font-size: 28px;
    color: white;
    text-align: center;
    margin-bottom: -22px;
}

/* Stats Section */
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
    padding:15px;
    box-shadow:0 4px 12px rgba(0,0,0,0.1);
}

.stat-card h3{
    font-size:30px;
    color:rgb(26, 26, 97);
    margin-bottom:5px;
}

.stat-card p{
    font-size:14px;
    color:#3a3838;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .inner-content h1 {
        font-size: 18px;
        padding: 10px 15px;
        line-height: 1.4;
    }

    .stats-section {
        padding: 20px 10px;
    }

    .stats-section .row > div {
        flex: 0 0 50%;
        max-width: 50%;
        padding-bottom: 20px;
    }

    .stat-card {
        padding: 10px;
    }

    .stat-card h3 {
        font-size: 20px;
    }

    .stat-card p {
        font-size: 12px;
    }
}


/* ---------------- MISSION & VISION ---------------- */
.mission-vision-box {
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
}

.mission-vision-box h2 {
    font-size: 22px;
    font-weight: 500;
    margin-bottom: 15px;
}

.mission-vision-box p {
    font-size: 15px;
}

/* ---------------- DIRECTOR MESSAGE ---------------- */
.director-section img {
    border-radius: 15px;
    width: 100%;
    max-width: 400px;
}

.director-section h1 {
    font-size: 28px;
    font-weight: 500;
    margin-bottom: 20px;
}

.director-section p {
    font-size: 15px;
    line-height: 1.7;
    white-space: pre-line;
}

/* ---------------- RESPONSIVE ---------------- */
@media (max-width: 768px) {
    .hero-text h1 { font-size: 24px; }
    .section { padding: 50px 15px; }
    .mission-vision-box h2 { font-size: 20px; }
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
/* mediaaquery */
@media (max-width: 768px) {
  .image-wrapper {
    height: 28vh; /* Reduce height on mobile */
  }
  .hero-text h1 {
    font-size: 26px; /* Smaller title */
    padding: 0 15px;
  }
}
@media (max-width: 768px) {
  .stats-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
    padding: 20px 10px;
  }

  .stat-card {
    flex: 0 0 45%; /* Two cards per row */
    margin-bottom: 15px;
    padding: 10px;
  }

  .stat-card h3 {
    font-size: 20px;
  }

  .stat-card p {
    font-size: 12px;
  }
}
@media (max-width: 768px) {
  .mission-vision-box {
    margin-bottom: 20px;
  }
}
@media (max-width: 768px) {
  .director-section .row {
    flex-direction: column;
    text-align: center;
  }

  .director-section img {
    max-width: 80%;
    margin: 0 auto 20px;
  }

  .director-section h1 {
    font-size: 22px;
  }

  .director-section p {
    font-size: 14px;
  }
}
@media (max-width: 768px) {
  .contact-btn {
    width: 100%;
    margin-top: 10px;
  }
}



</style>
</head>
<body>

<!-- ================= TOP NAVBAR ================= -->
<div class="main-top-nav">
    <div class="container">
        <div class="top-navbar">
            <div class="logo"><i class="ri-facebook-fill"></i><p>Facebook</p></div>
            <div class="logo"><i class="ri-mail-line"></i><p>swikconsul123@gmail.com</p></div>
            <div class="logo"><i class="ri-phone-fill"></i><p>9829158346</p></div>
        </div>
    </div>
</div>

<!-- ================= MAIN NAVBAR ================= -->
<div class="second-navbar sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.html">
                    <img src="./homeimages/logo.png" alt="Logo" height="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="home.html">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="testpreperation.html" data-bs-toggle="dropdown">Test Preparation</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="testpreperation.html">IELTS</a></li>
                                <li><a class="dropdown-item" href="testpreperation.html">PTE</a></li>
                                <li><a class="dropdown-item" href="testpreperation.html">TOEFL</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="studyabroad.html" data-bs-toggle="dropdown">Study Abroad</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="studyabroad.html">Australia</a></li>
                                <li><a class="dropdown-item" href="studyabroad.html">Canada</a></li>
                                <li><a class="dropdown-item" href="studyabroad.html">UK</a></li>
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
    <img src="./aboutusimages/abouthero.jpg" alt="Hero Image">
    <div class="hero-text"><h1>ABOUT US</h1></div>
</div>

<!-- ABOUT SECTION -->
 <div class="section">
    <div class="container ">
    <h1>Making Your Journey To Study Abroad Achievable</h1>
    <p>We are a top Education and Visa Consulting Agency with a worldwide presence in 23 countries. We provide reliable, credible, and authentic counselling for students from Nepal who wish to study abroad in the UK, the USA, Canada, or Australia. Our expert team has 22 years of global experience helping students reach their goals.</p>
</div>

<div class="container ">
    <h1>Why Choose Us?</h1>
    <p>Swik Consultancy has highly qualified agents committed to transforming dreams into reality, helping every aspiring international student achieve their goals. Our experts provide personalized guidance based on accurate information and secure, reliable channels.</p>
</div>

 </div>


<!-- STATS -->
<div class="inner-container-wrapper">
  <div class="inner-content">
    <h1>THE VALID REASONS TO CHOOSE US</h1>
    
    <section class="stats-section">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="stat-card">
              <h3>12,500+</h3>
              <p>Dreams turned into visas!</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6">
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
</div>

<!-- MISSIONS AND VESIONS -->
<div class="container section">
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="mission-vision-box">
                <h2>OUR MISSION</h2>
                <p>Empowering individuals and organizations by delivering reliable, innovative, and result-driven consulting solutions. We guide clients toward sustainable growth, informed decisions, and long-term success.</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mission-vision-box">
                <h2>OUR VISION</h2>
                <p>To become a trusted consultancy known for innovative solutions, ethical practices, and measurable success, helping individuals and businesses achieve goals through smart guidance and transparency.</p>
            </div>
        </div>
    </div>
</div>

<!-- DIRECTOR MESSAGE -->
<div class="container section director-section">
    <div class="row align-items-center g-4">
        <div class="col-lg-5">
            <div data-aos="fade-right"   data-aos-duration="3000">
                <img src="./aboutusimages/director.png" alt="Director">

            </div>
            
        </div>
        <div class="col-lg-7">
             <div data-aos="fade-left"   data-aos-duration="3000">
                 <h1>Message from the Director</h1>
            <p>
Welcome to Swik Consultancy.  

At Swik Consultancy, we believe that the right guidance can transform ideas into achievements and challenges into opportunities. Our journey began with a clear purpose: to provide honest, practical, and result-oriented consultancy services that truly make a difference.  

Our team combines expertise, innovation, and a client-first mindset to ensure that every solution aligns with your goals and aspirations. Your success is our responsibility.  

Thank you for choosing Swik Consultancy. We look forward to partnering with you on your journey toward growth and success.  

Warm regards,  
Swikrity Sapkota  
Director, Swik Consultancy
            </p>
             </div>

           
        </div>
    </div>
</div>

<!-- ================= FOOTER ================= -->
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
                <li><a href="gallery.html">gallery</a></li>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
