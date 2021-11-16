<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{ $info->title }}</title>
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
    <!-- Admin and Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <!-- Icofont CSS -->
    <link rel="stylesheet" href="{{ asset('css/boxicons.min.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css')}}">
    <!-- Magnific CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{ asset('css/odometer.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
    <!-- Stylesheet CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- Stylesheet Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">

    <!-- Add Chat Responsive CSS -->
    <link href="{{ asset('addchat/css/addchat.min.css') }}" rel="stylesheet">

    <script defer type="text/javascript" src="https://wl.redbus.com/javascripts/widget.min.js"></script>
    <script src="https://wl.redbus.com/externaljavascript/loadwidget.js"></script>
</head>
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
<!-- Chat Adding -->
<div id="addchat_app"
     data-baseurl="{{ url('') }}"
     data-csrfname="'X-CSRF-Token'"
     data-csrftoken="{{ csrf_token() }}"
></div>
<!-- End Chat Adding -->
<!-- Heder Area -->
<header class="header-area">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <ul class="left-info">
                        <li>
                            <a href="mailto:{{ $info->email }}">
                                <i class='bx bxs-envelope'></i>
                                {{ $info->email }}
                            </a>
                        </li>
                        <li>
                            <a href="tel:{{ $info->phone }}">
                                <i class='bx bxs-phone-call'></i>
                                {{ $info->phone }}
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <ul class="right-info">

                        <li>
                            <a href="{{ $info->facebook ? $info->facebook : '#'}}" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $info->twitter ? $info->twitter : '#'}}" target="_blank">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $info->linkedin ? $info->linkedin : '#'}}" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $info->instagram ? $info->instagram : '#'}}" target="_blank">
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
                        <a href="{{ url ('/')}}">
                            <img src="{{ asset('images/logo.png') }}" alt="TORCOROMA LOGO">
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
                                <a href="{{ url ('/')}}" class="nav-link active">Inicio</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Torcoroma <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ url ('/about')}}" class="nav-link">Acerca de</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="{{ url ('/team')}}" class="nav-link">Equipo</a>
                                    </li> --}}

                                    <li class="nav-item">
                                        <a href="{{ url ('/faq')}}" class="nav-link">Formatos para transporte especializado</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ url ('/faq')}}" class="nav-link">Preguntas Frecuentes</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Servicios <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ url ('/service#services')}}" class="nav-link">Servicios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url ('/service#buy-ticket')}}" class="nav-link">Compra tu tiquete</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url ('/service#tracking')}}" class="nav-link">Rastrea tu ruta</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Transparencia <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ url ('/policy')}}#rights" class="nav-link">Derechos y Deberes De Los Pasajeros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url ('/policy')}}#security" class="nav-link">Políticas de seguridad</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url ('/policy')}}#terms" class="nav-link">Terminos y condiciones</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url ('/contact')}}" class="nav-link">Contacto</a>
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
@yield('content-page')
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
                            <a href="{{ $info->facebook ? $info->facebook : '#'}}" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $info->twitter ? $info->twitter : '#'}}" target="_blank">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $info->linkedin ? $info->linkedin : '#'}}" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $info->instagram ? $info->instagram : '#'}}" target="_blank">
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
                            <a href="{{ url ('/team')}}">Equipo</a>
                        </li>
                        <li>
                            <a href="{{ url ('/services')}}">Servicios</a>
                        </li>
                        <li>
                            <a href="{{ url ('/about')}}">Acerca de</a>
                        </li>
                        <li>
                            <a href="{{ url ('/#quote')}}">Cotización</a>
                        </li>
                        <li>
                            <a href="{{ url ('/blog')}}">Últimas noticias</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget pl-50">
                    <h3>Soporte</h3>

                    <ul class="footer-text">
                        <li>
                            <a href="{{ url ('/faq')}}">Preguntas frecuentes</a>
                        </li>
                        <li>
                            <a href="{{ url ('/policy-and-term')}}">Políticas de bioseguridad</a>
                        </li>
                        <li>
                            <a href="{{ url ('/policy-and-term')}}">Terminos & condiciones</a>
                        </li>
                        <li>
                            <a href="{{ url ('/faq')}}">Formatos para transporte especializado</a>
                        </li>
                        <li>
                            <a href="{{ url ('/contact')}}">Contactanos</a>
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
                            {{ $info->address }}
                        </li>
                        <li>
                            <i class='bx bxs-envelope'></i>
                            <a href="mailto:{{ $info->email }}">{{ $info->email }}</a>
                        </li>
                        @if($info->email2 != '')
                        <li>
                            <i class='bx bxs-envelope'></i>
                            <a href="mailto:{{ $info->email2 }}">{{ $info->email2 }}</a>
                        </li>
                        @endif
                        <li>
                            <i class='bx bxs-phone'></i>
                            <a href="tel:{{ $info->phone }}">{{ $info->phone }}</a>
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
<!-- App JS -->
<script src="{{ asset('js/app.js')}}"></script>
<!-- AddChat JS -->
{{-- <script src="{{  asset('addchat/js/addchat.min.js') }}"></script> --}}
<!-- Custom JS -->
<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
