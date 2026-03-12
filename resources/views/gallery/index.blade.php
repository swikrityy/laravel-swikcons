<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery</title>

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
    background-color: rgba(56, 56, 126, 0.55);
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

        /* ---------------- GALLERY ---------------- */
        .gallery-card {
            position: relative;
            overflow: hidden;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            height: 250px;
        }
        .gallery-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .gallery-card:hover img {
            transform: scale(1.1);
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
/* mobile responsivness  */
/* ================= MOBILE GALLERY OPTIMIZATION ================= */
@media (max-width: 768px) {

    /* BASE TEXT */
    body {
        font-size: 14px;
        line-height: 1.7;
    }

    /* HERO */
    .image-wrapper {
        height: 28vh;
    }

    .hero-text h1 {
        font-size: 26px;
        font-weight: 600;
    }

    /* NAVBAR */
    .nav-item {
        padding-left: 0;
        font-size: 15px;
    }

    .contact-btn {
        width: 100%;
        margin-top: 10px;
        padding: 10px;
        font-size: 14px;
    }

    /* CONTAINER SPACING */
    .container {
        padding-left: 16px;
        padding-right: 16px;
    }

    /* GALLERY GRID */
    .row.g-4 {
        gap: 16px;
    }

    /* GALLERY CARD */
    .gallery-card {
        height: 190px;
        border-radius: 12px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    }

    .gallery-card img {
        transition: transform 0.4s ease;
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
    <img src="./Gallery/galleryhero.jpg" alt="Hero Image">
    <div class="hero-text"><h1>Gallery</h1></div>
</div>

<!-- GALLERY -->
<div class="container my-5">
    <div class="row g-4">
        <!-- IMAGE ITEMS -->
        <!-- Repeat for all 11 images -->
        <div class="col-lg-4 col-md-6">
            <a href="./Gallery/photo1.jpg" data-fancybox="gallery" data-caption="Project Handling">
                <div class="gallery-card"><img src="./Gallery/photo1.jpg" alt="Project Handling"></div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="./Gallery/photo2.jpg" data-fancybox="gallery" data-caption="Contract Signing">
                <div class="gallery-card"><img src="./Gallery/photo2.jpg" alt="Contract Signing"></div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="./Gallery/photo3.jpg" data-fancybox="gallery" data-caption="Conference Hall">
                <div class="gallery-card"><img src="./Gallery/photo3.jpg" alt="Conference Hall"></div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="./Gallery/photo4.jpg" data-fancybox="gallery" data-caption="Discussion">
                <div class="gallery-card"><img src="./Gallery/photo4.jpg" alt="Discussion"></div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="./Gallery/photo5.jpg" data-fancybox="gallery" data-caption="Project Management Team">
                <div class="gallery-card"><img src="./Gallery/photo5.jpg" alt="Project Management Team"></div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="./Gallery/photo6.jpg" data-fancybox="gallery" data-caption="Web Handling">
                <div class="gallery-card"><img src="./Gallery/photo6.jpg" alt="Web Handling"></div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="./Gallery/photo7.jpg" data-fancybox="gallery" data-caption="Web Handling">
                <div class="gallery-card"><img src="./Gallery/photo7.jpg" alt="Web Handling"></div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="./Gallery/PHOTO8.jpg" data-fancybox="gallery" data-caption="Web Handling">
                <div class="gallery-card"><img src="./Gallery/PHOTO8.jpg" alt="Web Handling"></div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="./Gallery/photo9.jpg" data-fancybox="gallery" data-caption="Web Handling">
                <div class="gallery-card"><img src="./Gallery/photo9.jpg" alt="Web Handling"></div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="./Gallery/photo10.jpg" data-fancybox="gallery" data-caption="Web Handling">
                <div class="gallery-card"><img src="./Gallery/photo10.jpg" alt="Web Handling"></div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="./Gallery/photo11.jpg" data-fancybox="gallery" data-caption="Web Handling">
                <div class="gallery-card"><img src="./Gallery/photo11.jpg" alt="Web Handling"></div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6">
            <a href="./Gallery/photo12.jpg" data-fancybox="gallery" data-caption="Web Handling">
                <div class="gallery-card"><img src="./Gallery/photo12.jpg" alt="Web Handling"></div>
            </a>
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
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind('[data-fancybox="gallery"]', {});
</script>
</body>
</html>
