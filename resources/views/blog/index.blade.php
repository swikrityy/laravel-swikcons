@extends('layouts.frontend.master')

@section('content')
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
                                <a class="nav-link active" href="/home">Home</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/testprep" data-bs-toggle="dropdown">
                                    Test Preparation
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/testprep">IELTS</a></li>
                                    <li><a class="dropdown-item" href="/testprep">PTE</a></li>
                                    <li><a class="dropdown-item" href="/testprep">TOEFL</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="/studyabroad" data-bs-toggle="dropdown">
                                    Study Abroad
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/studyabroad">Study in Australia</a></li>
                                    <li><a class="dropdown-item" href="/studyabroad">Study in Canada</a></li>
                                    <li><a class="dropdown-item" href="/studyabroad">Study in London</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="/university">University</a></li>
                            <li class="nav-item"><a class="nav-link" href="/gallerys">Gallery</a></li>
                            
                            <li class="nav-item"><a class="nav-link" href="/blogs">Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="/aboutus">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="/review">Review</a></li>
                            

                        </ul>

                       <a href="/contact"><button class="contact-btn">Contact Us</button></a>
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
@endsection