@extends('layouts.frontend.master')

@section('content')
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
@endsection