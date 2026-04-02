

<!-- ================= TOP NAVBAR ================= -->
<div class="main-top-nav">
    <div class="container">
        <div class="top-navbar">
            <div class="logo"><i class="ri-facebook-fill"></i><p>Facebook</p></div>
            <div class="logo"><i class="ri-mail-line"></i><p>swikconsul123@gmail.com</p></div>
            <div class="logo"><i class="ri-phone-fill"></i><p>9829158346</p></div>
        </div>
    </div>
</div>

<!-- ================= MAIN NAVBAR ================= -->
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

                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('home') }}">Home</a>
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
                                <a class="nav-link dropdown-toggle" href="{{ route('Studyabroad') }}" data-bs-toggle="dropdown">
                                    Study Abroad
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('Studyabroad') }}">Study in Australia</a></li>
                                    <li><a class="dropdown-item" href="{{ route('Studyabroad') }}">Study in Canada</a></li>
                                    <li><a class="dropdown-item" href="{{ route('Studyabroad') }}">Study in London</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a class="nav-link" href="/university">University</a></li>
                            <li class="nav-item"><a class="nav-link" href="/gallerys">Gallerys</a></li>
                            
                            <li class="nav-item"><a class="nav-link" href="{{ route('blogs') }}">Blogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="/aboutus">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="/review">Review</a></li>
                            

                        </ul>

                       <a href="{{ route('display') }}"><button class="contact-btn">Contact Us</button></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>


