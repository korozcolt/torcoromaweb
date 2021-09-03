<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>TORCOROMA SA | Transporte</title>
    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Icofont CSS -->
    <link rel="stylesheet" href="{{asset('css/boxicons.min.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <!-- Magnific CSS -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{asset('css/odometer.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <!-- Stylesheet CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Stylesheet Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>


<body>

<body>
<!-- Preloder -->
<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
</div>
<!-- End Preloder -->

<!-- Heder Area -->
<header class="header-area">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <ul class="left-info">
                        <li>
                            <a href="mailto:hello@ferry.com">
                                <i class='bx bxs-envelope'></i>
                                hello@ferry.com
                            </a>
                        </li>
                        <li>
                            <a href="tel:+823-456-879">
                                <i class='bx bxs-phone-call'></i>
                                +0123 456 789
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <ul class="right-info">
                        <li class="mr-20">
                            <a href="#">Contact</a>
                        </li>
                        <li  class="mr-20">
                            <a href="#">Career</a>
                        </li>
                        <li  class="mr-20">
                            <a href="#">News & Media</a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="ferry-responsive-nav">
            <div class="container">
                <div class="ferry-responsive-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="ferry-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    Home <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link active">Home Demo - 1</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">Home Demo - 2</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="index-3.html" class="nav-link">Home Demo - 3</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Pages <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about.html" class="nav-link">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="team.html" class="nav-link">Team</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="testimonials.html" class="nav-link">Testimonials</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="gallery.html" class="nav-link">Gallery</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">FAQ</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            User <i class='bx bx-chevron-right'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="sign-in.html" class="nav-link">Sign In</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="sign-up.html" class="nav-link">Sign Up</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="terms-condition.html" class="nav-link">Terms & Condition</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="error-404.html" class="nav-link">404 Error Page</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="about.html" class="nav-link">
                                    About Us
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Services <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="services.html" class="nav-link">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-details.html" class="nav-link">Single Services</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Blog <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">Blog</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">Single Blog</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>

                            <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link search-box">
                                    <i class='bx bx-search'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
<!-- End Heder Area -->

<!-- Search Overlay -->
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>

            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>

            <div class="search-overlay-form">
                <form>
                    <input type="text" class="input-search" placeholder="Search here...">
                    <button type="submit"><i class='bx bx-search' ></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Search Overlay -->

<!-- Hero Slider -->
<div class="hero-slider owl-carousel owl-theme">
    <div class="hero-slider-item item-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-content">
                        <span>Since 1992</span>
                        <h1>Transport & Logistic Services</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="contact.html" class="default-btn-one me-3">Contact Us</a>
                        <a href="#" class="default-btn-two">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-slider-item item-bg2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-content">
                        <span>Since 1992</span>
                        <h1>Transport & Logistic<br> Services</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="contact.html" class="default-btn-one me-3">Contact Us</a>
                        <a href="#" class="default-btn-two">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-slider-item item-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-content">
                        <span>Since 1992</span>
                        <h1>Transport & Logistic<br> Services</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="contact.html" class="default-btn-one me-3">Contact Us</a>
                        <a href="#" class="default-btn-two">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Hero Slider -->

<!-- Contact Area -->
<div class="container">
    <div class="contact-area mb-85">
        <div class="contact-content">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="contact-card">
                        <i class='bx bxs-phone'></i>
                        <h4>Contact Number</h4>
                        <p>
                            <a href="tel:+4560123987">+4560 123 987</a>
                        </p>
                        <p>
                            <a href="tel:+0123456789">+0123 456 789</a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="contact-card">
                        <i class='bx bxs-location-plus'></i>
                        <h4>Our Location</h4>
                        <p>Str, First avenue 1</p>
                        <p>Silvy Road, Barbosa </p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="contact-card">
                        <i class='bx bx-show'></i>
                        <h4>Opening Hours</h4>
                        <p>9:00 AM - 6:00 PM</p>
                        <p>Saturday - Thursday</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="contact-card">
                        <i class='bx bxs-envelope'></i>
                        <h4>Our Email</h4>
                        <p>
                            <a href="mailto:hello@ferry.com">hello@ferry.com</a>
                        </p>
                        <p>
                            <a href="mailto:info@gmail.com">info@gmail.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->

<!-- About Area -->
<div class="about-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="about-contant">
                    <div class="section-title">
                        <span>About Us</span>
                        <h2>Safe and Faster Logistic Service Neer You</h2>
                    </div>

                    <div class="about-text">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</p>

                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p>

                        <a href="about.html" class="default-btn-one btn-bs">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="about-image">
                    <img src="assets/img/about/about1.jpg" alt="about-image">
                </div>
            </div>

            <div class="col-lg-3">
                <div class="about-tabs">
                    <div class="tab-contant">
                        <h2 class="title">Our Core Value</h2>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-vision-tab" data-bs-toggle="tab" href="#nav-vision" role="tab" aria-controls="nav-vision" aria-selected="true">Vision</a>

                                <a class="nav-link nav-link-two" id="nav-mission-tab" data-bs-toggle="tab" href="#nav-mission" role="tab" aria-controls="nav-mission" aria-selected="false">Mission</a>

                                <a class="nav-link nav-link-two" id="nav-value-tab" data-bs-toggle="tab" href="#nav-value" role="tab" aria-controls="nav-value" aria-selected="false">Value</a>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <div class="vision">
                                    <ul>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        </li>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        </li>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        </li>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-mission" role="tabpanel"  aria-labelledby="nav-mission-tab">
                                <div class="vision">
                                    <ul>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        </li>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        </li>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        </li>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-value" role="tabpanel" aria-labelledby="nav-value-tab">
                                <div class="vision">
                                    <ul>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        </li>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        </li>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        </li>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->

<!-- Services Area -->
<div class="services-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Our Services</span>
            <h2>Safe and Faster Logistic Services</h2>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="service-card">
                    <i class='bx bxs-ship'></i>
                    <h3>Ocean Cargo</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <a href="service-details.html" class="default-btn-two">Read More</a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="service-card">
                    <i class='bx bx-store'></i>
                    <h3>Cargo Storage</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <a href="service-details.html" class="default-btn-two">Read More</a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="service-card">
                    <i class='bx bxs-truck'></i>
                    <h3>Courier Delivery</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <a href="service-details.html" class="default-btn-two">Read More</a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="service-card">
                    <i class='bx bx-transfer'></i>
                    <h3>B2B Exchange</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <a href="service-details.html" class="default-btn-two">Read More</a>
                </div>
            </div>
        </div>

        <div class="view-btn">
            <a href="services.html" class="default-btn">View All</a>
        </div>
    </div>

    <div class="services-shape">

    </div>
</div>
<!-- End Services Area -->

<!-- Choose Area -->
<div class="choose-area ptb-100">
    <div class="shape-one">
        <img src="assets/img/shape/shape5.png" alt="Shape">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="choose-contant">
                    <div class="choose-card">
                        <i class='bx bx-world'></i>
                        <h3>Worldwide Service</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  magna aliqu.</p>
                    </div>
                </div>

                <div class="choose-contant">
                    <div class="choose-card">
                        <i class='bx bxs-paper-plane'></i>
                        <h3>Tracking Service</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  magna aliqu.</p>
                    </div>
                </div>

                <div class="choose-contant">
                    <div class="choose-card">
                        <i class='bx bxs-truck'></i>
                        <h3>Fast and Reliable</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  magna aliqu.</p>
                    </div>
                </div>

                <div class="choose-contant">
                    <div class="choose-card">
                        <i class='bx bx-support'></i>
                        <h3>24/7 Support</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt  magna aliqu.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="choose-text">
                    <div class="section-title">
                        <span>Why Choose Us</span>
                        <h2>Safe and Faster Logistic Service Neer You</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>

                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                    <a href="#" class="default-btn-one">Contact Us</a>
                    <div class="shape-image">
                        <img src="assets/img/shape/shape2.png" alt="icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Choose Area -->

<!-- Speciality Slider Area -->
<div class="speciality-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Our Speciality</span>
            <h2>Safe and Faster Logistic Services</h2>
        </div>

        <div class="speciality-slider owl-carousel owl-theme">
            <div class="speciality-card">
                <a href="service-details.html">
                    <img src="assets/img/speciality/speciality1.jpg" alt="image">
                </a>
                <div class="speciality-text">
                    <h3>
                        <a href="service-details.html">
                            Office Relocation
                        </a>
                    </h3>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
                </div>
            </div>

            <div class="speciality-card">
                <a href="service-details.html">
                    <img src="assets/img/speciality/speciality2.jpg" alt="image">
                </a>
                <div class="speciality-text">
                    <h3>
                        <a href="service-details.html">
                            House Moving
                        </a>
                    </h3>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
                </div>
            </div>

            <div class="speciality-card">
                <a href="#">
                    <img src="assets/img/speciality/speciality3.jpg" alt="image">
                </a>
                <div class="speciality-text">
                    <h3>
                        <a href="service-details.html">
                            Curier Worldwide
                        </a>
                    </h3>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
                </div>
            </div>

            <div class="speciality-card">
                <a href="service-details.html">
                    <img src="assets/img/speciality/speciality1.jpg" alt="image">
                </a>
                <div class="speciality-text">
                    <h3>
                        <a href="service-details.html">
                            Office Relocation
                        </a>
                    </h3>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
                </div>
            </div>

            <div class="speciality-card">
                <a href="service-details.html">
                    <img src="assets/img/speciality/speciality2.jpg" alt="image">
                </a>
                <div class="speciality-text">
                    <h3>
                        <a href="service-details.html">
                            House Moving
                        </a>
                    </h3>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
                </div>
            </div>

            <div class="speciality-card">
                <a href="service-details.html">
                    <img src="assets/img/speciality/speciality3.jpg" alt="image">
                </a>
                <div class="speciality-text">
                    <h3>
                        <a href="service-details.html">
                            Curier Worldwide
                        </a>
                    </h3>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Speciality Slider Area -->

<!-- Testimonials Slider Area -->
<div class="testimonials-area ptb-100">
    <div class="container">
        <div class="shape-two">
            <img src="assets/img/shape/shape6.png" class="shape-1" alt="shape">
            <img src="assets/img/shape/shape3.png" alt="shape">
        </div>
        <div class="section-title">
            <span>Feedback</span>
            <h2>Whats Our Clients Said About Us</h2>
        </div>

        <div class="testimonials-slider owl-carousel owl-theme">
            <div class="testimonials-card">
                <div class="client-img">
                    <img src="assets/img/clients/client6.jpg" alt="image">
                    <h3>Jhon Smith</h3>
                    <span>CEO of LTD company</span>
                </div>

                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>

                <div class="feedback-text">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>

            <div class="testimonials-card">
                <div class="client-img">
                    <img src="assets/img/clients/client5.jpg" alt="image">
                    <h3>William leo</h3>
                    <span>CEO of LTD company</span>
                </div>

                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>

                <div class="feedback-text">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>

            <div class="testimonials-card">
                <div class="client-img">
                    <img src="assets/img/clients/client4.jpg" alt="image">
                    <h3>Benjamin Liam</h3>
                    <span>CEO of LTD company</span>
                </div>

                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>

                <div class="feedback-text">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials Slider Area -->

<!-- partner Slider Area -->
<div class="partner-area pb-100">
    <div class="container">
        <div class="section-title">
            <span>Partner</span>
            <h2>20+ Companies Trusted us and Getting Result</h2>
        </div>

        <div class="partner-slider owl-carousel owl-theme">
            <div class="partner-slider-item">
                <a href="#">
                    <img src="assets/img/partner/partner1.png" alt="logo">
                </a>
            </div>

            <div class="partner-slider-item">
                <a href="#">
                    <img src="assets/img/partner/partner2.png" alt="logo">
                </a>
            </div>

            <div class="partner-slider-item">
                <a href="#">
                    <img src="assets/img/partner/partner3.png" alt="logo">
                </a>
            </div>

            <div class="partner-slider-item">
                <a href="#">
                    <img src="assets/img/partner/partner4.png" alt="logo">
                </a>
            </div>

            <div class="partner-slider-item">
                <a href="#">
                    <img src="assets/img/partner/partner5.png" alt="logo">
                </a>
            </div>

            <div class="partner-slider-item">
                <a href="#">
                    <img src="assets/img/partner/partner6.png" alt="logo">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End partner Slider Area -->

<!-- Transportation Area -->
<div class="transportation-area">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="transportation-form ptb-100">
                    <div class="section-title">
                        <span>Transportation</span>
                        <h2>Take Your Goods Anywhere</h2>
                    </div>

                    <div class="transportation-shape">
                        <img src="assets/img/shape/shape3.png" alt="icon">
                    </div>

                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Height (CM):">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Weight (KG):">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Width (CM):">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Type of commodity:">
                        </div>

                        <div class="form-group mb-30">
                            <input type="text" class="form-control" placeholder="Distance (KM):">
                        </div>

                        <div class="form-btn">
                            <button type="submit" class="default-btn-one me-4">Cost Calculate</button>
                            <button type="submit" class="default-btn-two">Get A Full Quote</button>
                        </div>
                        <h3>Get a brochure / 10% Discount on first order</h3>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="popup-video video-bg">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="video-btn">
                                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube">
                                    <i class="bx bx-play whiteText"></i>
                                    <span class="ripple pinkBg"></span>
                                    <span class="ripple pinkBg"></span>
                                    <span class="ripple pinkBg"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Transportation Area -->

<!-- Footer Area-->
<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget">
                    <div class="logo">
                        <img src="assets/img/logo.png" alt="logo">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <ul class="footer-socials">
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget pl-80">
                    <h3>Company</h3>

                    <ul class="footer-text">
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li>
                            <a href="#">Features</a>
                        </li>
                        <li>
                            <a href="#">Cost calculator</a>
                        </li>
                        <li>
                            <a href="#">Latest News</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget pl-50">
                    <h3>Support</h3>

                    <ul class="footer-text">
                        <li>
                            <a href="faq.html">FAQ’s</a>
                        </li>
                        <li>
                            <a href="privacy-policy.html">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="terms-condition.html">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="#">Community</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget">
                    <h3>Contact Info</h3>
                    <ul class="info-list">
                        <li>
                            <i class='bx bxs-location-plus'></i>
                            6th Floor, Barbosa, Sidney
                        </li>
                        <li>
                            <i class='bx bxs-envelope'></i>
                            <a href="mailto:hello@ferry.com">hello@ferry.com</a>
                        </li>
                        <li>
                            <i class='bx bxs-envelope'></i>
                            <a href="mailto:contact@ferry.com">contact@ferry.com</a>
                        </li>
                        <li>
                            <i class='bx bxs-phone'></i>
                            <a href="tel:+0123456789">+0123 456 789</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<!-- Footer bottom Area -->
<div class="footer-bottom">
    <div class="container">
        <p>Copyright @2021 Ferry. All Rights Reserved <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
    </div>
</div>
<!-- End Footer bottom Area -->

<!-- Go Top -->
<div class="go-top">
    <i class='bx bx-chevrons-up'></i>
</div>
<!-- End Go Top -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Meanmenu JS -->
<script src="js/meanmenu.min.js"></script>
<!-- Owl carousel JS -->
<script src="js/owl.carousel.min.js"></script>
<!-- Magnific JS -->
<script src="js/jquery.magnific-popup.min.js"></script>
<!-- Odometer JS -->
<script src="js/odometer.min.js"></script>
<script src="js/jquery.appear.js"></script>
<!-- Form Validator JS -->
<script src="js/form-validator.min.js"></script>
<!-- Contact JS -->
<script src="js/contact-form-script.js"></script>
<!-- Ajaxchimp JS -->
<script src="js/jquery.ajaxchimp.min.js"></script>
<!--Animate JS -->
<script src="js/wow.min.js"></script>
<!-- Custom JS -->
<script src="js/custom.js"></script>
</body>

</html>
