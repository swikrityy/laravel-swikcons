@extends('layouts.frontend.master')

@section('content')
 
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