<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Page</title>

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
    font-family: Poppins, sans-serif !important;
}

body {
    background-color: #f5f5f5;
}

/* ------------------ TOP NAVBAR ------------------ */
.main-top-nav {
    background: rgb(26, 26, 97);
    color: #fff;
}

.top-navbar {
    display: flex;
    justify-content: flex-end;   
    align-items: center;
    gap: 20px;
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
    }
}

/* ------------------ MAIN NAVBAR ------------------ */
.second-navbar {
    background-color:white;
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

/* Contact button */
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
    background-color: rgba(18, 14, 30, 0.55);
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

/* ------------------ FORM ------------------ */
.form-card {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 1px 1px 8px rgb(180, 180, 180);
    margin-top: 30px;
}

.form-card h3 {
    margin-bottom: 15px;
    color: rgb(26, 26, 97);
}

.form-card .subtitle,
.form-card .note {
    font-size: 14px;
    margin-bottom: 10px;
}

.form-card form {
    display: flex;
    flex-direction: column;
}

.form-card label {
    margin-top: 15px;
    margin-bottom: 5px;
    font-size: 14px;
    font-weight: 500;
}

.form-card input,
.form-card select {
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 14px;
}

.phone-row {
    display: flex;
    gap: 10px;
    margin-top: 5px;
}

.phone-row select {
    flex: 0 0 30%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
}

.phone-row input {
    flex: 1;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
}

.checkbox {
    display: flex;
    align-items: center;
    margin-top: 15px;
    gap: 10px;
    font-size: 14px;
}

.form-card button {
    margin-top: 20px;
    padding: 10px;
    background-color: rgb(26, 26, 97);
    color: white;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    transition: 0.3s;
}

.form-card button:hover {
    background-color: rgb(40, 40, 150);
}

/* ------------------ MAP ------------------ */
.map-container {
    position: sticky;
    top: 110px; 
    align-self: flex-start;
    height: 80vh; 
}

.map-container iframe {
    width: 100%;
    height: 100%;
    border-radius: 15px;
    border: 0;
}

/* ------------------ FLEX ROW ------------------ */
.row-flex {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
}

/* Make form take half width on large screens and full width on smaller */
.form-column {
    flex: 1 1 500px;
}

.map-column {
    flex: 1 1 400px;
}

/* ------------------ RESPONSIVE ------------------ */
@media (max-width: 992px) {
    .hero-text h1 {
        font-size: 40px;
    }
}

@media (max-width: 768px) {
    .hero-text h1 {
        font-size: 30px;
    }
    .map-container {
        position: relative;
        top: auto;
        height: 400px;
        margin-top: 30px;
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
/* ================= FORM UI POLISH ================= */
.form-card input,
.form-card select,
.form-card textarea {
    transition: border 0.3s ease, box-shadow 0.3s ease;
}

.form-card input:focus,
.form-card select:focus,
.form-card textarea:focus {
    outline: none;
    border-color: rgb(26, 26, 97);
    box-shadow: 0 0 0 3px rgba(26, 26, 97, 0.15);
}

/* BUTTON SMOOTHNESS */
.form-card button {
    font-weight: 500;
    letter-spacing: 0.3px;
}

.form-card button:hover {
    transform: translateY(-1px);
    box-shadow: 0 6px 15px rgba(26, 26, 97, 0.25);
}

/* ================= MAP SMOOTH STICKY ================= */
.map-container {
    transition: all 0.3s ease;
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

    /* FORM CARD */
    .form-card {
        padding: 22px;
        border-radius: 12px;
    }

    .form-card h3 {
        font-size: 20px;
    }

    .form-card label {
        font-size: 13px;
    }

    .form-card input,
    .form-card select,
    .form-card textarea {
        font-size: 14px;
        padding: 9px 10px;
    }

    /* PHONE ROW STACK */
    .phone-row {
        flex-direction: column;
        gap: 8px;
    }

    .phone-row select {
        width: 100%;
    }

    /* MAP */
    .map-container {
        height: 320px;
        border-radius: 12px;
    }

    iframe {
        border-radius: 12px;
    }

    /* NAVBAR BUTTON */
    .contact-btn {
        width: 100%;
        margin-top: 10px;
    }
}

</style>
</head>
<body>

<!-- TOP NAVBAR -->
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

<!-- MAIN NAVBAR -->
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
    <img src="./contactimages/herocontact.jpg" alt="Hero Image">
    <div class="hero-text"><h1>CONTACT US</h1></div>
</div>

<!-- FORM & MAP -->
<div class="container mt-5">
    <div class="row-flex">
        <!-- FORM -->
        <div class="form-column">
            <div class="form-card">
                <h3>Interested to Study Abroad?</h3>
                <p class="subtitle">Enter your details below and we'll contact you.</p>
                <p class="note"><span class="asterisk">*</span> indicates required fields</p>

                <form id="studyForm">
                    <label>First Name *</label>
                    <input type="text" placeholder="E.g. Swikrity" required>

                    <label>Last Name *</label>
                    <input type="text" placeholder="E.g. Sapkota" required>

                    <label>Email *</label>
                    <input type="email" placeholder="E.g. swikrity@example.com" required>

                    <label>Mobile *</label>
                    <div class="phone-row">
                        <select>
                            <option>+977</option>
                            <option>+1</option>
                            <option>+44</option>
                            <option>+61</option>
                        </select>
                        <input type="tel" placeholder="81234 56789" required>
                    </div>

                   
                     <label>Message</label>
                     <textarea rows="10" placeholder="Write your message here..."></textarea>


                    

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

        <!-- MAP -->
        <div class="map-column">
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.495243256416!2d84.42996538458455!3d27.671084365748058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb2cf4e503f5%3A0x646e7560d153610d!2sParadise%20Infotech%20Chitwan!5e0!3m2!1sen!2snp!4v1766680818459!5m2!1sen!2snp" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
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
