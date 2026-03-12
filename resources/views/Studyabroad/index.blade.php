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
/* ================= BLOG / COUNTRY CARDS ================= */

.blog-heading {
    font-size: 30px;
    font-weight: 700;
    color: rgb(26, 26, 97);
    margin-bottom: 30px;
}

.country {
    display: flex;
    justify-content: space-between;
    gap: 30px;
    flex-wrap: wrap;
    margin-bottom: 50px;
}

.country1 {
    width: 350px;
    background: #fff;
    padding: 18px;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    position: relative;
    transition: 0.3s ease;
}

.country1:hover {
    transform: translateY(-6px);
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.12);
}

.country1 img {
    width: 100%;
    height: 230px;
    object-fit: cover;
    border-radius: 12px;
}

.box1 {
    position: absolute;
    top: 30px;
    right: 30px;
    width: 42px;
    height: 42px;
    background-color: rgb(26, 26, 97);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.box1 i {
    color: #fff;
    font-size: 18px;
}

.country1 h3 {
    margin-top: 16px;
    font-size: 18px;
    font-weight: 600;
}

.country1 p {
    margin-top: 8px;
    font-size: 14px;
    line-height: 1.6;
    color: rgb(90, 90, 90);
}

@media (max-width: 991px) {
    .country1 {
        width: calc(50% - 20px);
    }
}

@media (max-width: 767px) {
    .country1 {
        width: 100%;
    }
}

.container h1{
    color:  rgb(26, 26, 97);
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
/* mobile-responsivness */
/* ================= MOBILE OPTIMIZATION ================= */
@media (max-width: 768px) {

    /* GLOBAL TEXT */
    body {
        font-size: 14px;
        line-height: 1.6;
    }

    p, li {
        font-size: 14px;
        line-height: 1.7;
    }

    /* NAVBAR */
    .nav-item {
        padding-left: 0;
        font-size: 15px;
    }

    .contact-btn {
        width: 100%;
        margin-top: 10px;
        font-size: 14px;
        padding: 10px;
    }

    /* HERO */
    .image-wrapper {
        height: 28vh;
    }

    .hero-text h1 {
        font-size: 26px;
        font-weight: 600;
    }

    /* CONTAINER SPACING */
    .container {
        padding-left: 16px;
        padding-right: 16px;
    }

    .container h1 {
        font-size: 22px;
        margin-top: 20px;
        margin-bottom: 12px;
    }

    .container h2 {
        font-size: 20px;
    }

    /* LISTS */
    ul {
        padding-left: 18px;
    }

    li {
        margin-bottom: 10px;
    }

    /* BLOG / COUNTRY CARDS */
    .blog-heading {
        font-size: 22px;
        margin-bottom: 20px;
    }

    .country {
        gap: 20px;
    }

    .country1 {
        padding: 14px;
        border-radius: 12px;
    }

    .country1 img {
        height: 180px;
    }

    .country1 h3 {
        font-size: 16px;
        margin-top: 12px;
    }

    .country1 p {
        font-size: 13px;
        line-height: 1.6;
    }

    .box1 {
        width: 36px;
        height: 36px;
        top: 20px;
        right: 20px;
    }

    .box1 i {
        font-size: 16px;
    }

    /* FOOTER */
    .footer {
        padding: 35px 16px 16px;
    }

    .footer-section h3 {
        font-size: 15px;
    }

    .footer-section p,
    .footer-section li {
        font-size: 13px;
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
<!-- body -->
 <div class="container">
    <h1>Study Abroad From Nepal</h1>
    <p>f you are a Nepalese student looking to study abroad from Nepal, this will be the ideal time for you. Do you know? Over 82,000 students applied to study abroad in 2022 and the numbers are growing exponentially as many Nepalese students know the advantages of studying abroad. Over 14% of the Nepalese population works abroad, accounting for roughly 3.5 million. Australia and Canada are the top study abroad destinations for Nepalese students as they are budget-friendly, offer outstanding education and have excellent student support systems. The benefits of studying abroad are abundant, and so students consider studying abroad
The best countries to study abroad are Australia, the USA, the UK, Canada and New Zealand, as they are the most popular choices for international students globally. If you are wondering how to study abroad, you can contact AECC Nepal, one of Nepal's leading overseas education consultants. We will help you with the admission process and guide you through the process of choosing the best study abroad destinations. As many Nepalese students are interested in developing their skills and finding better job opportunities, they look for the best study abroad consultants to make their dreams come true. If you are unsure about selecting the right course, we can give you a walkthrough of the best-recommended courses to study abroad based on your preferences.</p>
 </div>


 <div class="container">
    <h1>Why Study Abroad?</h1>
    <ul>
        <li>During your study abroad journey to any of the popular study destination countries like Australia, Canada, the US or UK, you might have been intrigued to experience their culture, people and opportunities further.</li>
        <li>You will start considering yourself as a global citizen instead of being a citizen of a particular country. In fact, you may swap your career dream based on new opportunities.</li>
        <li>Enhance your foreign language proficiency.</li>
        <li>Not just the food, the academic quality of developed countries rises every year, as a result, many universities from the US, UK and Canada are constantly finding their spot in the global educational rankings.</li>
        <li>Many educational institutions worldwide attempt to bring talented international students to their country (irrespective of nationality). As a result, universities provide them scholarships for international students to pursue their higher education dreams seamlessly. </li>
    </ul>
 </div>
 <div class="container">
    <!-- BLOG CARDS -->
<div class="container">
    <h2 class="blog-heading"> <center>STUDY ABROAD</center></h2>
    <div class="country">
        <div class="country1">
            <img src="./Blog/london.jpg" alt="UK" />
            <div class="box1"><i class="ri-heart-3-line"></i></div>
            <h3>UK</h3>
            <p>Studying in the United Kingdom can be a fantastic opportunity. The UK has some of the world's top universities...</p>
        </div>
        <div class="country1">
            <img src="./Blog/studyinusa.jpg" alt="USA" />
            <div class="box1"><i class="ri-heart-3-line"></i></div>
            <h3>USA</h3>
            <p>Studying in the USA can be a transformative experience, offering top-tier education and diverse cultural exposure...</p>
        </div>
        <div class="country1">
            <img src="./Blog/canada.jpg" alt="Canada" />
            <div class="box1"><i class="ri-heart-3-line"></i></div>
            <h3>Canada</h3>
            <p>Studying in Canada provides a safe environment, top-quality institutions, and excellent opportunities...</p>
        </div>
        <div class="country1">
            <img src="./Blog/canada.jpg" alt="Canada" />
            <div class="box1"><i class="ri-heart-3-line"></i></div>
            <h3>Canada</h3>
            <p>Studying in Canada provides a safe environment, top-quality institutions, and excellent opportunities...</p>
        </div>
        <div class="country1">
            <img src="./Blog/canada.jpg" alt="Canada" />
            <div class="box1"><i class="ri-heart-3-line"></i></div>
            <h3>Canada</h3>
            <p>Studying in Canada provides a safe environment, top-quality institutions, and excellent opportunities...</p>
        </div>
        <div class="country1">
            <img src="./Blog/canada.jpg" alt="Canada" />
            <div class="box1"><i class="ri-heart-3-line"></i></div>
            <h3>Canada</h3>
            <p>Studying in Canada provides a safe environment, top-quality institutions, and excellent opportunities...</p>
        </div>
        <div class="country1">
            <img src="./Blog/canada.jpg" alt="Canada" />
            <div class="box1"><i class="ri-heart-3-line"></i></div>
            <h3>Canada</h3>
            <p>Studying in Canada provides a safe environment, top-quality institutions, and excellent opportunities...</p>
        </div>
        <div class="country1">
            <img src="./Blog/canada.jpg" alt="Canada" />
            <div class="box1"><i class="ri-heart-3-line"></i></div>
            <h3>Canada</h3>
            <p>Studying in Canada provides a safe environment, top-quality institutions, and excellent opportunities...</p>
        </div>
        <div class="country1">
            <img src="./Blog/canada.jpg" alt="Canada" />
            <div class="box1"><i class="ri-heart-3-line"></i></div>
            <h3>Canada</h3>
            <p>Studying in Canada provides a safe environment, top-quality institutions, and excellent opportunities...</p>
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