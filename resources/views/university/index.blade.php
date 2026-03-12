<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog Page</title>

<!-- Remix Icons -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet" />

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

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
    background-color: rgba(25, 14, 63, 0.55);
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
/* university */
.imagecontainers img{
    width:100%;
    height:180px;
    object-fit:cover;
    border-radius:10 10px 0px 0px;
}
.imagecontainers h3{
    font-size:16px;
    text-align:center;
    margin-top:10px;
}
/* university card heading */
.container h1{
    color: rgb(35, 25, 71);
    padding: 10px;
}

/* UNIVERSITY CARD */
/* UNIVERSITY CARD – ULTRA SMOOTH */
/* ================= UNIVERSITY CARD (FINAL) ================= */
.university-card {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    text-align: center;
    padding-bottom: 16px;
    cursor: pointer;

    box-shadow: 0 8px 22px rgba(0,0,0,0.08);
    transform: translateY(0);

    transition:
        transform 0.45s cubic-bezier(0.22, 1, 0.36, 1),
        box-shadow 0.45s cubic-bezier(0.22, 1, 0.36, 1);
}

.university-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;

    transform: scale(1);
    transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
}

.university-card h3 {
    font-size: 16px;
    font-weight: 600;
    margin-top: 14px;
    padding: 0 12px;
    color: #1a1a61;

    transition: color 0.35s ease;
}

/* HOVER */
.university-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 55px rgba(26, 26, 97, 0.22);
}

.university-card:hover img {
    transform: scale(1.06);
}

.university-card:hover h3 {
    color: #14144b;
}
/* ================= MOBILE OPTIMIZATION ================= */
@media (max-width: 768px) {

    /* HERO */
    .image-wrapper {
        height: 28vh;
    }

    .hero-text h1 {
        font-size: 26px;
        letter-spacing: 1px;
    }

    /* SECTION HEADINGS */
    .container h1 {
        font-size: 22px;
        text-align: center;
        margin-top: 25px;
        margin-bottom: 20px;
    }

    /* UNIVERSITY CARD */
    .university-card img {
        height: 160px;
    }

    .university-card h3 {
        font-size: 15px;
    }

    /* GRID SPACING */
    .row {
        row-gap: 18px;
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
    <img src="./universityphotos/e3a1e566a92ed8cf28cdc17ea78c2f35.jpg" alt="Hero Image">
    <div class="hero-text"><h1>UNIVERSITY</h1></div>
</div>

<!-- Australia -->
 <div class="container">
    <h1>AUSTRALIA</h1>
    <div class="imagecontainers">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/catholicuniversity.jpeg" alt="" >
                    <h3>Catholic University</h3>

                </div>
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/melborneinstitudeoftechnology.jpg" alt="" >
                    <h3>Melborne Institude of Technology</h3>

                </div>
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/University_of_Tasmania.png" alt="" >
                    <h3>University of Tasmania</h3>

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/universityofmelborne.jpeg" alt="" >
                    <h3>University of Melborne</h3>

                </div>
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/universityofwesternaustrailia.jpeg" alt="" >
                    <h3>University of Western Australia </h3>

                </div>
                
            </div>
        </div>
        

    </div>
 </div>

 <!-- CANADA -->
 <div class="container">
    <h1>CANADA</h1>
    <div class="imagecontainers">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/trinity-western-university.webp" alt="" >
                    <h3>Trinity Western University</h3>

                </div>
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/universty-of-toronto.jpg" alt="" >
                    <h3>University Of Toronto</h3>

                </div>
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/university-of-naigra-fall-canada.jpeg" alt="" >
                    <h3>University of Naigra Fall</h3>

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/royal-road-university.webp" alt="" >
                    <h3>University of Royal Road</h3>

                </div>
                
            </div>
            
        </div>
        

    </div>
 </div>
 <div class="container">
    <h1>JAPAN</h1>
    <div class="imagecontainers">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/saitamauni.jpg" alt="" >
                    <h3>Saitama University</h3>

                </div>
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/tokyo-uni.jpg" alt="" >
                    <h3>University Of Tokyo</h3>

                </div>
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/hokkaido university.jpeg" alt="" >
                    <h3>University of Hokkaido</h3>

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/KYUSHU UNIVERSITY.jpg" alt="" >
                    <h3>University of Kyushu</h3>

                </div>
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/hiroshima-uni.jpg" alt="" >
                    <h3>University of Hiroshima</h3>

                </div>
                
            </div>
            
        </div>
        

    </div>
 </div>
 <div class="container">
    <h1>USA</h1>
    <div class="imagecontainers">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/Dayton University.jpeg" alt="" >
                    <h3>Dayton University</h3>

                </div>
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/Standford University.jpg" alt="" >
                    <h3>Standford University</h3>

                </div>
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/University Of North Dakota.jpeg" alt="" >
                    <h3>University Of North Dakota</h3>

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/Yale.webp" alt="" >
                    <h3>University of Yale</h3>

                </div>
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/Harvard_University.webp" alt="" >
                    <h3>Harvard University</h3>

                </div>
                
            </div>
            
        </div>
        

    </div>
 </div>
 <!-- uk  -->
  <div class="container">
    <h1>UK</h1>
    <div class="imagecontainers">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/Cambridge University.jpg" alt="" >
                    <h3>Cambridge University</h3>

                </div>
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/Edinburgh university.webp" alt="" >
                    <h3>Edinburgh university</h3>

                </div>
                
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/Oxford University.webp" alt="" >
                    <h3>Oxford University.webp</h3>

                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="university-card">
                    <img src="./universityphotos/Imperial College London.jpg" alt="" >
                    <h3>Imperial College London</h3>

                </div>
                
            </div>
           
        </div>
        

    </div>
 </div>

<!-- FOOTER -->
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>