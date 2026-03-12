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
    background-color: rgba(5, 1, 18, 0.55);
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

/* ------------------ BLOG CARDS ------------------ */
.blog-heading {
    text-align: center;
    font-size: 32px;
    font-weight: 600;
    margin-top: 60px;
    margin-bottom: 40px;
    color: rgb(26, 26, 97);
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
/* mobile responsivness  */
/* ================= MOBILE TYPOGRAPHY & LAYOUT FIX ================= */
@media (max-width: 768px) {

    /* BASE TEXT */
    body {
        font-size: 14px;
        line-height: 1.7;
    }

    p {
        font-size: 14px;
        line-height: 1.8;
        margin-bottom: 14px;
    }

    li {
        font-size: 14px;
        line-height: 1.7;
        margin-bottom: 10px;
    }

    /* HEADINGS */
    h1 {
        font-size: 22px !important;
        margin-top: 20px;
        margin-bottom: 12px;
    }

    h3 {
        font-size: 18px;
        margin-top: 18px;
        margin-bottom: 10px;
    }

    /* HERO */
    .image-wrapper {
        height: 28vh;
    }

    .hero-text h1 {
        font-size: 26px;
        font-weight: 600;
    }

    /* CONTAINER PADDING */
    .container {
        padding-left: 16px;
        padding-right: 16px;
    }

    /* LIST FIX */
    ul {
        padding-left: 18px;
    }

    /* ================= TABLE MOBILE FIX ================= */
    table {
        display: block;
        width: 100%;
        overflow-x: auto;
        white-space: nowrap;
        font-size: 13px;
    }

    table th {
        font-size: 13px;
        padding: 10px;
    }

    table td {
        font-size: 13px;
        padding: 10px;
    }

    /* NAVBAR */
    .nav-item {
        padding-left: 0;
        font-size: 15px;
    }

    .contact-btn {
        width: 100%;
        font-size: 14px;
        padding: 10px;
        margin-top: 10px;
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


/* ------------------ CONTENT SECTION ------------------ */
.content-section {
    display: flex;
    gap: 40px;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 50px;
}

/* LEFT CONTENT */
.left-content img {
    width: 100%;
    border-radius: 20px;
    object-fit: contain;
    margin-bottom: 20px;
}

.left-content h3 {
    font-size: 30px;
    color: rgb(26, 26, 97);
    padding-bottom: 10px;
    font-weight: bolder;
    border-bottom: 1px solid rgb(26, 26, 97);
}

.left-content p {
    color: rgb(62, 61, 61);
    font-weight: 300;
    font-size: 15px;
    padding-top: 20px;
    line-height: 1.6;
    padding-bottom: 35px;
}

/* RIGHT CONTENT (Sticky Form) */
.right-content {
    position: sticky;
    top: 90px;
    align-self: flex-start;
}

.form-card {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 1px 1px 5px rgb(180, 180, 180);
}

.form-card h3 {
    margin-bottom: 10px;
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
}

.phone-row {
    display: flex;
    gap: 10px;
}

.checkbox {
    display: flex;
    align-items: center;
    margin-top: 15px;
    gap: 10px;
}

.form-card button {
    margin-top: 20px;
    background-color: rgb(26, 26, 97);
    color: white;
    padding: 10px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
}

@media (max-width: 992px) {
    .content-section {
        flex-direction: column;
    }

    .right-content {
        position: relative;
        top: auto;
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

<!-- HERO -->
<div class="image-wrapper">
    <div class="opacity"></div>
    <img src="./Blog/blog.jpg" alt="Hero Image">
    <div class="hero-text"><h1>BLOG</h1></div>
</div>

<!-- BLOG CARDS -->
<div class="container">
    <h2 class="blog-heading">Best Countries for Nepali Students</h2>
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
    </div>
</div>

<!-- CONTENT SECTION -->
<div class="container content-section">
  <div class="row">
    <!-- LEFT CONTENT -->
    <div class="col-lg-8 left-content">
      <img src="./Blog/UKstudentvisa.png" alt="UK Student Visa" />
      <h3>UK Student Visa 2025 Guide: Apply, Cost & Requirements</h3>
      <p>Are you looking to study in the UK? It’s no surprise—it’s one of the world’s top destinationAre you looking to study in the UK? It’s no surprise—it’s one of the world’s top destinations for academic excellence. 
                If you plan to proceed further, you must know about the UK visa process. This visa is your gateway to studying at globally respected universities, 
                meeting students from all over the world, and immersing yourself in a culture rich in history and innovation.

                We’ll explain everything you need to know about applying for a UK student visa, from eligibility requirements and costs to timelines, course options, 
                and handy tips to help make your application a smooth sailing.</p>
      <img src="./Blog/Visaupgrade.png" alt="">
      <h3>Nepal Back in the Game...</h3>
      <p>The celebratory momos! Exciting news for Nepalese studenNepal Back in the Game: Australia Elevates Visa Status to Level 2 After 7 Long Years</h3>
            <p>the celebratory momos! Exciting news for Nepalese students with dreams to study abroad in Australia after seven long years under Assessment Level 3, Australia’s Department of Home Affairs has reclassified Nepal to Assessment Level 2, effective early April 2025. This significant shift promises a smoother, more accessible pathway to quality international education. Australia’s Department of Home Affairs has reclassified Nepal to Assessment Level 2, effective early April 2025. This significant shift promises a smoother, more accessible pathway to quality international educatioHold </p>
    </div>

    <!-- RIGHT CONTENT (Form) -->
    <div class="col-lg-4">
      <div class="right-content">
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

            <label>Current City</label>
            <input type="text" placeholder="E.g. Sydney">

            <label>Country of Residence *</label>
            <select required>
              <option value="">Select</option>
              <option>Nepal</option>
              <option>Australia</option>
              <option>Canada</option>
              <option>USA</option>
              <option>UK</option>
            </select>

            <label>Study Destination *</label>
            <select required>
              <option value="">Select</option>
              <option>Australia</option>
              <option>UK</option>
              <option>Canada</option>
              <option>USA</option>
            </select>

            <label>Last Education *</label>
            <select required>
              <option value="">Select</option>
              <option>10th</option>
              <option>12th</option>
              <option>Bachelor's</option>
              <option>Master's</option>
            </select>

            <div class="checkbox">
              <input type="checkbox" required>
              <span>I agree to the Terms & Privacy Policy</span>
            </div>

            <button type="submit">Submit</button>
          </form>
        </div>
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
