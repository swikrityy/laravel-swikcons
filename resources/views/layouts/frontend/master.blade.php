<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - Swik Consultancy</title>

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

<!-- AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Swiper -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>

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
/* ---------------- RESPONSIVE ---------------- */
@media (max-width: 768px) {
    .hero-text h1 { font-size: 24px; }
    .section { padding: 50px 15px; }
    .mission-vision-box h2 { font-size: 20px; }
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
        /* Footer */
              
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

@yield('css')


</head>

<body>

@include('layouts.frontend.header')

@yield('content')

@include('layouts.frontend.footer')


<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<!-- Fancybox -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1/dist/fancybox/fancybox.umd.js"></script>
<script>
Fancybox.bind('[data-fancybox="gallery"]', {});
</script>

<!-- Swiper -->
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper(".Swiper1", {
  slidesPerView: 3,
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
    0: {
      slidesPerView: 1,
      spaceBetween: 15
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30
    }
  }
});
</script>


<!-- Auto active navbar -->
<script>
document.addEventListener("DOMContentLoaded", function(){

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

});
</script>

</body>
</html>