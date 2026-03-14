@extends('layouts.frontend.master')

@section('content')

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
@endsection