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
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
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
{{--    <script defer type="text/javascript" src="https://wl.redbus.com/javascripts/widget.min.js"></script>--}}
{{--    <script src="https://wl.redbus.com/externaljavascript/loadwidget.js"></script>--}}
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
                            <a href="mailto:info@torcoromaweb">
                                <i class='bx bxs-envelope'></i>
                                info@torcoromaweb.com
                            </a>
                        </li>
                        <li>
                            <a href="tel:+823-456-879">
                                <i class='bx bxs-phone-call'></i>
                                +57 300 555 5555
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <ul class="right-info">

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
                            <img src="img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="ferry-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/logo.png') }}" width="150" alt="logo torcoroma">
                    </a>

                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">Inicio</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Torcoroma <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about.html" class="nav-link">Acerca de</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="team.html" class="nav-link">Equipo</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">Preguntas Frecuentes</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Políticas de seguridad</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="terms-condition.html" class="nav-link">Terminos y condiciones</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Servicios <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="services.html" class="nav-link">Servicios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-details.html" class="nav-link">VIP</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Blog <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">Noticias & Novedades</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contacto</a>
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
                    <input type="text" class="input-search" placeholder="Busca aquí...">
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
                        <span>Desde 1992</span>
                        <h1>Servicio de Transporte & Logística</h1>
                        <p>Contamos con el personal logístico e idoneo para las tareas de transporte en toda la región caribe.</p>
                        <a href="contact.html" class="default-btn-one me-3">Contactanos</a>
                        <a href="#" class="default-btn-two">Obtener pasajes</a>
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
                        <span>Desde 1992</span>
                        <h1>Transporte por toda<br> la región caribe.</h1>
                        <p>Contamos con recurso humano dispuesto a entregar el mejor servicio posible y manejar las espectativas de nuestros clientes.</p>
                        <a href="contact.html" class="default-btn-one me-3">Contactanos</a>
                        <a href="#" class="default-btn-two">Obtener una cotización</a>
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
                        <span>Desde 1992</span>
                        <h1>Nuestro<br> Equipo de Trabajo</h1>
                        <p>Contando con el personal idoneo para entregale el mejor de los servicios.</p>
                        <a href="contact.html" class="default-btn-one me-3">Contactanos</a>
                        <a href="#" class="default-btn-two">Obtener una cotización</a>
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
                        <h4>Numeros de Contacto</h4>
                        <p>
                            <a href="tel:+4560123987">+57 300 555 5555</a>
                        </p>
                        <p>
                            <a href="tel:+0123456789">  01 8000 365365</a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="contact-card">
                        <i class='bx bxs-location-plus'></i>
                        <h4>Oficinas Principales</h4>
                        <p>Troncal</p>
                        <p>Sincelejo, Sucre</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="contact-card">
                        <i class='bx bx-show'></i>
                        <h4>Abiertos desde</h4>
                        <p>6:00 AM - 10:00 PM</p>
                        <p>Lunes - Domingo</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="contact-card">
                        <i class='bx bxs-envelope'></i>
                        <h4>Nuestro Email</h4>
                        <p>
                            <a href="mailto:info@torcoromaweb.com">info@torcoromaweb.com</a>
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
                        <span>Acerca de Nosotros</span>
                        <h2>Un servicio de transporte seguro y rápido para usted</h2>
                    </div>

                    <div class="about-text">
                        <p>Somos una empresa dedicada al transporte terrestre de pasajeros, con servicios especializados y en distintas modalidades.</p>

                        <p>Como empresa socialmente responsable, promueve entre sus grupos de interés el respeto y fomento de los Derechos Humanos. Es así como se difunde información a través de medios internos y externos..</p>

                        <a href="about.html" class="default-btn-one btn-bs">Aprende más</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="about-image">
                    <img src="{{ asset('images/about-page.jpg') }}" alt="about-image">
                </div>
            </div>

            <div class="col-lg-3">
                <div class="about-tabs">
                    <div class="tab-contant">
                        <h2 class="title">¡Torcoroma somos todos!</h2>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-vision-tab" data-bs-toggle="tab" href="#nav-vision" role="tab" aria-controls="nav-vision" aria-selected="true">Visión</a>
                                <a class="nav-link nav-link-two" id="nav-mission-tab" data-bs-toggle="tab" href="#nav-mission" role="tab" aria-controls="nav-mission" aria-selected="false">Misión</a>
                                <a class="nav-link nav-link-two" id="nav-value-tab" data-bs-toggle="tab" href="#nav-value" role="tab" aria-controls="nav-value" aria-selected="false">Valores</a>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                <div class="vision">
                                    <ul>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Garantizar un optimo servicio de transporte terrestre de pasajeros en la modalidad basica ccoriente y especial.
                                        </li>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Enfocado a la satisfacción de las necesidades y expectativas de sus asociados, clientes y usuarios.
                                        </li>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Contribuir de manera activa al desarrollo sostenible de nuestra región con un servicio de maxima calidad.
                                        </li>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Entregar todo a nuestro alcance para que nuestros usuarios y clientes se sientan satisfechos.
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-mission" role="tabpanel"  aria-labelledby="nav-mission-tab">
                                <div class="vision">
                                    <ul>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Para 2022 ser una empresa que brinde a sus clientes y usuarios la mejor opción de tansporte terrestre.
                                        </li>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            Ademas, ser la mejor opción en modalidad de pasajeros basica, corriente y especial.
                                        </li>
                                        <li>
                                            <i class='bx bx-check'></i>
                                            enfocados en la aplicación de estandares de calidad y seguridad que garantize oportunidad y confort.
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
            <span>Nuestros Servicios</span>
            <h2>Servicios logísticos seguros y rápidos</h2>
        </div>
{{--        <div class="widget" data-widgetid="TORCOROMA" style="position: relative;width: 80%;margin:auto;"></div>--}}
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="service-card">
                    <i class='bx bxs-ship'></i>
                    <h3>Costa caribe</h3>
                    <p>Transporte y conexión por toda la costa caribe y municipios circundantes. Rapidos y seguros.</p>
{{--                    <a href="service-details.html" class="default-btn-two">Read More</a>--}}
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="service-card">
                    <i class='bx bx-store'></i>
                    <h3>Carga suficiente</h3>
                    <p>Contamos con compartimentos especiales para que tus pertenencias y tu vayan comodos.</p>
{{--                    <a href="service-details.html" class="default-btn-two">Read More</a>--}}
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="service-card">
                    <i class='bx bxs-truck'></i>
                    <h3>Mensajería interdepartamental</h3>
                    <p>Entregamos tus paquetes en los diferentes municipios principales de nuestro departamento.</p>
{{--                    <a href="service-details.html" class="default-btn-two">Read More</a>--}}
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="service-card">
                    <i class='bx bx-transfer'></i>
                    <h3>B2B Exchange</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
{{--                    <a href="service-details.html" class="default-btn-two">Read More</a>--}}
                </div>
            </div>
        </div>

        <div class="view-btn">
            <a href="{{ url('/') }}" class="default-btn">Verlos completo</a>
        </div>
    </div>

    <div class="services-shape">

    </div>
</div>
<!-- End Services Area -->

<!-- Choose Area -->
<div class="choose-area ptb-100">
    <div class="shape-one">
        <img src="img/shape/shape5.png" alt="Shape">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="choose-contant">
                    <div class="choose-card">
                        <i class='bx bx-world'></i>
                        <h3>Servicio al instante</h3>
                        <p>Toda una región cubierta y brindando garantías de un servicio impecable.</p>
                    </div>
                </div>

                <div class="choose-contant">
                    <div class="choose-card">
                        <i class='bx bxs-paper-plane'></i>
                        <h3>Servicio de rastreo</h3>
                        <p>Podemos rastrear en tiempo real donde se encuentra su mercancía.</p>
                    </div>
                </div>

                <div class="choose-contant">
                    <div class="choose-card">
                        <i class='bx bxs-truck'></i>
                        <h3>Rapido y totalmente seguro</h3>
                        <p>No tenemos demoras prestando nuestros servicios de transporte.</p>
                    </div>
                </div>

                <div class="choose-contant">
                    <div class="choose-card">
                        <i class='bx bx-support'></i>
                        <h3>Soporte 24/7</h3>
                        <p>Por medio de nuestra web podemos brindarle servicio 24/7.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="choose-text">
                    <div class="section-title">
                        <span>¿Por qué escogernos?</span>
                        <h2>Un servicio logístico seguro y rápido para usted</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>

                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                    <a href="#" class="default-btn-one">Contactanos</a>
                    <div class="shape-image">
                        <img src="{{ asset('images/logo-iso.png') }}" alt="icon">
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
            <span>Nuestros servicios especiales</span>
            <h2>Seguro y rapido, servicio especial</h2>
        </div>

        <div class="speciality-slider owl-carousel owl-theme">
            <div class="speciality-card">
                <a href="service-details.html">
                    <img src="img/speciality/speciality1.jpg" alt="image">
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
                    <img src="img/speciality/speciality2.jpg" alt="image">
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
                    <img src="img/speciality/speciality3.jpg" alt="image">
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
                    <img src="img/speciality/speciality1.jpg" alt="image">
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
                    <img src="img/speciality/speciality2.jpg" alt="image">
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
                    <img src="img/speciality/speciality3.jpg" alt="image">
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

{{--<!-- Testimonials Slider Area -->--}}
{{--<div class="testimonials-area ptb-100">--}}
{{--    <div class="container">--}}
{{--        <div class="shape-two">--}}
{{--            <img src="img/shape/shape6.png" class="shape-1" alt="shape">--}}
{{--            <img src="img/shape/shape3.png" alt="shape">--}}
{{--        </div>--}}
{{--        <div class="section-title">--}}
{{--            <span>Feedback</span>--}}
{{--            <h2>Whats Our Clients Said About Us</h2>--}}
{{--        </div>--}}

{{--        <div class="testimonials-slider owl-carousel owl-theme">--}}
{{--            <div class="testimonials-card">--}}
{{--                <div class="client-img">--}}
{{--                    <img src="img/clients/client6.jpg" alt="image">--}}
{{--                    <h3>Jhon Smith</h3>--}}
{{--                    <span>CEO of LTD company</span>--}}
{{--                </div>--}}

{{--                <div class="rating">--}}
{{--                    <i class='bx bxs-star'></i>--}}
{{--                    <i class='bx bxs-star'></i>--}}
{{--                    <i class='bx bxs-star'></i>--}}
{{--                    <i class='bx bxs-star'></i>--}}
{{--                    <i class='bx bxs-star'></i>--}}
{{--                </div>--}}

{{--                <div class="feedback-text">--}}
{{--                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="testimonials-card">--}}
{{--                <div class="client-img">--}}
{{--                    <img src="img/clients/client5.jpg" alt="image">--}}
{{--                    <h3>William leo</h3>--}}
{{--                    <span>CEO of LTD company</span>--}}
{{--                </div>--}}

{{--                <div class="rating">--}}
{{--                    <i class='bx bxs-star'></i>--}}
{{--                    <i class='bx bxs-star'></i>--}}
{{--                    <i class='bx bxs-star'></i>--}}
{{--                    <i class='bx bxs-star'></i>--}}
{{--                    <i class='bx bxs-star'></i>--}}
{{--                </div>--}}

{{--                <div class="feedback-text">--}}
{{--                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="testimonials-card">--}}
{{--                <div class="client-img">--}}
{{--                    <img src="img/clients/client4.jpg" alt="image">--}}
{{--                    <h3>Benjamin Liam</h3>--}}
{{--                    <span>CEO of LTD company</span>--}}
{{--                </div>--}}

{{--                <div class="rating">--}}
{{--                    <i class='bx bxs-star'></i>--}}
{{--                    <i class='bx bxs-star'></i>--}}
{{--                    <i class='bx bxs-star'></i>--}}
{{--                    <i class='bx bxs-star'></i>--}}
{{--                    <i class='bx bxs-star'></i>--}}
{{--                </div>--}}

{{--                <div class="feedback-text">--}}
{{--                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- End Testimonials Slider Area -->

<!-- partner Slider Area -->
<div class="partner-area pb-100 mt-10">
    <div class="container">
        <div class="section-title">
            <span>Socios comerciales</span>
            <h2>Más de 20 empresas que confiaron en nosotros</h2>
        </div>

        <div class="partner-slider owl-carousel owl-theme">
            <div class="partner-slider-item">
                <a href="#">
                    <img src="img/partner/partner1.png" alt="logo">
                </a>
            </div>

            <div class="partner-slider-item">
                <a href="#">
                    <img src="img/partner/partner2.png" alt="logo">
                </a>
            </div>

            <div class="partner-slider-item">
                <a href="#">
                    <img src="img/partner/partner3.png" alt="logo">
                </a>
            </div>

            <div class="partner-slider-item">
                <a href="#">
                    <img src="img/partner/partner4.png" alt="logo">
                </a>
            </div>

            <div class="partner-slider-item">
                <a href="#">
                    <img src="img/partner/partner5.png" alt="logo">
                </a>
            </div>

            <div class="partner-slider-item">
                <a href="#">
                    <img src="img/partner/partner6.png" alt="logo">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End partner Slider Area -->



<!-- Footer Area-->
<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget">
                    <div class="logo">
                        <img src="{{ asset('images/logo.png') }}" width="220" alt="logo torcoroma">
                    </div>
                    <p>Conoce todo de nosotros, aprende un poco de nuestra historia, nuestros clientes y nuestra forma de ver el futuro.</p>

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
                    <h3>Nosotros</h3>

                    <ul class="footer-text">
                        <li>
                            <a href="about.html">Equipo</a>
                        </li>
                        <li>
                            <a href="services.html">Servicios</a>
                        </li>
                        <li>
                            <a href="#">Acerca de</a>
                        </li>
                        <li>
                            <a href="#">Cotización</a>
                        </li>
                        <li>
                            <a href="#">Últimas noticias</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget pl-50">
                    <h3>Soporte</h3>

                    <ul class="footer-text">
                        <li>
                            <a href="faq.html">Preguntas frecuentes</a>
                        </li>
                        <li>
                            <a href="privacy-policy.html">Políticas de bioseguridad</a>
                        </li>
                        <li>
                            <a href="terms-condition.html">Terminos & condiciones</a>
                        </li>
                        <li>
                            <a href="#">Formatos para transporte especializado</a>
                        </li>
                        <li>
                            <a href="contact.html">Contactanos</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget">
                    <h3>Información de Contacto</h3>
                    <ul class="info-list">
                        <li>
                            <i class='bx bxs-location-plus'></i>
                            Troncal, Sincelejo, Sucre
                        </li>
                        <li>
                            <i class='bx bxs-envelope'></i>
                            <a href="mailto:hello@ferry.com">info@torcoromaweb.com</a>
                        </li>
                        <li>
                            <i class='bx bxs-envelope'></i>
                            <a href="mailto:contact@ferry.com">contacto@torcoromaweb.com</a>
                        </li>
                        <li>
                            <i class='bx bxs-phone'></i>
                            <a href="tel:+0123456789">+57 301 0000 000</a>
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
        <p>Copyright @ {{ date('Y') }} Torcoroma SA. All Rights Reserved. Powered By <a href="https://www.facebook.com/kronnosco.la/" target="_blank">Kronnos</a></p>
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
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Meanmenu JS -->
<script src="{{ asset('js/meanmenu.min.js') }}"></script>
<!-- Owl carousel JS -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- Magnific JS -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<!-- Odometer JS -->
<script src="{{ asset('js/odometer.min.js') }}"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<!-- Form Validator JS -->
<script src="{{ asset('js/form-validator.min.js') }}"></script>
<!-- Contact JS -->
<script src="{{ asset('js/contact-form-script.js') }}"></script>
<!-- Ajaxchimp JS -->
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<!--Animate JS -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('js/custom.js') }}"></script>


</body>

</html>
