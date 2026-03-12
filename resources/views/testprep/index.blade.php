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
/* ================= TABLE DESIGN (SAFE – NO CONTENT CHANGE) ================= */

table {
    width: 100%;
    margin-top: 25px;
    border-collapse: collapse;
    background-color: #ffffff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(26, 26, 97, 0.15);
}

/* Table Header */
table th {
    background-color: rgb(26, 26, 97);
    color: #ffffff;
    padding: 14px;
    font-size: 15px;
    font-weight: 600;
    border: none;
}

/* Table Cells */
table td {
    padding: 14px;
    font-size: 14px;
    color: #333;
    border-bottom: 1px solid #e5e5e5;
}

/* Alternate Row Background */
table tr:nth-child(even) td {
    background-color: #f3f5fb;
}

/* Hover Effect */
table tr:hover td {
    background-color: rgba(26, 26, 97, 0.08);
    transition: 0.3s ease;
}

/* Remove Last Border */
table tr:last-child td {
    border-bottom: none;
}

/* ================= MOBILE SAFE ================= */
@media (max-width: 768px) {
    table {
        font-size: 13px;
    }
}

.container h1{
    padding-top: 20px;
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
    <div class="hero-text"><h1>TEST PREPRATION</h1></div>
</div>
<!-- BODY -->
 <!-- iltest -->
  <div class="container">
    <h1>FOR IELTS</h1>
    <p>IELTS is one of the most trusted English language tests across the globe with more than 10,000 organizations recognizing it internationally. The IELTS certification is recognized by the UK, USA, Australia, Canada, New Zealand, Singapore, Europe and 140 more countries across the globe. The certification is accepted by academic institutions, companies, professional bodies and government organizations. The test is considered the standard for English language testing and their certification is recognized for both academic and immigration purposes. This test assesses the English language skills of a candidate by testing their reading, writing, listening and speaking skills. Tests are available throughout the year in more than 1600 centers in over 140 countries. With IELTS scores, you can study in some of the best universities in Australia, top universities in Canada, USA, UK and New Zealand.
</p>

  </div>

  <div class="container">
    <h3>How to register for the IELTS exam?
</h3>
<p>You can register for the IELTS examination online .</p>

<p>step 1: Visit the official British Council IELTS registration page <br>

Step 2: Register an account with the British council’s IELTS registration page <br>

Step 3: Choose your nearest test centre. <br>

Step 4: Register for your test and make the payment to Nabil bank. <br>

Steps to register for the IELTS examination in-person: <br>

Step 1: Application form for the registration is given by AECC. <br>

Step 2: Fill in all the necessary details carefully <br>

Step 3: Submit your application in-person at the AECC office-Test Prep Department. <br>

Step 4: Pay the IELTS Exam Fee through mobile banking/e-sewa/Khalti or hand cash. <br>

During your registration, ensure that you have your passport handy as you need a passport number at the time of registration. You must also make sure to take your passport with you on the day of your examination.  </p>
  </div>
  <div class="container">
    <table border="1">
        <tr>
            <th>IELTS exam fee in Nepal for different IELTS Test type</th>
            <th>IELTS Exam Fee in Nepal</th>
        </tr>
        <tr>
            <td>IELTS Academic and General Training - IELTS exam fee in Nepal for Paper-Based test</td>
            <td>NPR 36,200</td>
        </tr>
        <tr>
            <td>IELTS Academic and General Training - IELTS exam fee in Nepal for Computer-delivered test</td>
            <td>NPR 33,000</td>
        </tr>
        <tr>
            <td>UKVI</td>
            <td>NPR 34,000</td>
        </tr>
        <tr>
            <td>Life Skills</td>
            <td>NPR 24,000</td>
        </tr>

    </table>
  </div>
  <!-- TOEFL -->
  
  <div class="container">
    <h1>FOR TOFEL</h1>
    <p>The ETS TOEFL exam is a globally accepted, standardised English language test to examine international students’ English proficiency in Reading, Listening, Speaking and Writing as the English Language Test score plays a vital role in the overseas education admission process. The TOEFL test score is accepted in over 150 countries, including Canada, Australia, New Zealand, the United States and the United Kingdom.

Since its inception in 1964, the ETS TOEFL test’s curriculum and test methods have matched universities and institutions’ expectations. The recent revision was in 2005, and the test is renamed the TOEFL iBT test. The test now comprises tasks that test if the candidate’s Reading, Listening, Writing, and Speaking skills meet the demands of top-notch academic environments today. 
</p>

  </div>

  <div class="container">
    <h3>How to register for the TOFEL exam?
</h3>
<p>Steps to register for your TOFEL examination online:</p>
<p>Sign-up on the official ETS website. </p>
    <ul>
        <li>Make sure to enter the name as it is in the identification document to be produced on the day of the TOEFL test.</li>
        <li>After submitting all the necessary information and creating a profile, you will receive a confirmation email.</li>
        <li>After submitting all the necessary information and creating a profile, you will receive a confirmation email.</li>
        <li>Log in using the password and click on the ‘Register for a Test’ button.</li>
        <li>Choose a test date and centre. </li>
        <li>Complete the TOEFL registration process.</li>
    </ul>

  </div>
  <div class="container">
    <table border="1">
        <tr>
            <th>ETS TOEFL Exam Fee in Nepal</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Registration</td>
            <td>Fees vary by testing location</td>
        </tr>
        <tr>
            <td>Rescheduling</td>
            <td>US$60</td>
        </tr>
        <tr>
            <td>Reinstatement of canceled scores</td>
            <td>US$20</td>
        </tr>
        <tr>
            <td>Additional score reports (per institution or agency)</td>
            <td>US$20 each</td>
        </tr>
         <tr>
            <td>Returned payment</td>
            <td>US$30/td>
        </tr>

    </table>
  </div>
 
  <!-- PTE-->
  
  <div class="container">
    <h1>FOR PTE</h1>
    <p>The full form of  PTE is the Pearson Test of English. It is known as an English language test for candidates who are looking to apply to universities or countries where English is the primary medium of communication.

Over the years, an increasing number of professionals and students are opting for the Pearson Test of English (PTE), have opted; a renowned assessments for study abroad programs. The PTE stands as a prominent test for showcasing your English proficiency and facilitating better careers in foreign nations. Test results are quickly delivered upon the completion of the exam, with the PTE setting itself apart by publishing scores within five days, frequently even sooner, as some test-takers have reported obtaining their results within two days. This time frame, from registration to receiving the scorecard, makes the PTE stand out from other conventional admission tests... making it a highly appealing choice among international students. In addition, the PTE employs a computer-based scoring mechanism that ensures precision and impartiality. eligibility criteria for the PTE, and anyone can take the test. If you wish to learn more about the PTE format, PTE exam fee in Nepal, PTE reschedule fee, etc., you can read further.
</p>

  </div>

  <div class="container">
    <h3>How to Register for the PTE Exam?
</h3>
<p>You have to follow a few steps to register for the PTE exam. We have detailed them below.</p>
<p>
   Step 1: Visit the official PTE website and select your preferred test date and purpose for taking the exam. <br>

Step 2: Read and agree to the Terms and Conditions before proceeding. <br>

Step 3: Choose your desired test centre, available date, and time slot. <br>

Step 4: Confirm your details on the displayed window, which includes test type, appointment specifics, and associated fee. <br>

Step 5: Finalise your registration by submitting the PTE exam fee of NPR 26,500 (or equivalent to USD 205). <br>

Upon successful payment, you will receive a confirmation email at your registered email address containing important information for the test day. This information can also be accessed through your PTE dashboard. For the most up-to-date details on PTE registration, it is recommended to visit the official website. <br>
</p>
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
