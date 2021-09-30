<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>COOPERATIVA | TORCOROMA</title>
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
    {{--<script defer type="text/javascript" src="https://wl.redbus.com/javascripts/widget.min.js"></script>
    <script src="https://wl.redbus.com/externaljavascript/loadwidget.js"></script>--}}
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
                        <a href="{{ url ('/')}}">
                            <img src="{{ asset('images/logo.png') }}" alt="logo">
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
                                    <li class="nav-item">
                                        <a href="{{ url ('/team')}}" class="nav-link">Equipo</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ url ('/faq')}}" class="nav-link">Preguntas Frecuentes</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ url ('/')}}" class="nav-link">Políticas de seguridad</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ url ('/')}}" class="nav-link">Terminos y condiciones</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Servicios <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ url ('/services')}}" class="nav-link">Servicios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url ('/services')}}" class="nav-link">VIP</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Blog <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ url ('/blog')}}" class="nav-link">Noticias & Novedades</a>
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
                            Troncal, Sincelejo, Sucre
                        </li>
                        <li>
                            <i class='bx bxs-envelope'></i>
                            <a href="mailto:info@torcoromaweb.com">info@torcoromaweb.com</a>
                        </li>
                        <li>
                            <i class='bx bxs-envelope'></i>
                            <a href="mailto:contacto@torcoromaweb.com">contacto@torcoromaweb.com</a>
                        </li>
                        <li>
                            <i class='bx bxs-phone'></i>
                            <a href="tel:+57 301 0000 000">+57 301 0000 000</a>
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
<div class="fixed bottom-0 right-0 flex flex-col items-end ml-6 w-full mr-3 ">
    <div class="chat-modal show mr-5 flex flex-col mb-5 shadow-lg sm:w-1/2 md:w-1/3 lg:w-1/4">
        @livewire('chat-form')
    </div>
    <div class="show-chat hidden mx-10 mb-6 mt-4 text-blue-600 hover:text-blue-800 flex justify-center items-center cursor-pointer ">
        <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
        </svg>
    </div>
</div>

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
<script>
    const chatModal = document.querySelector('.chat-modal');
    const chatServices = document.querySelector('.chat-services');

    const showChat = document.querySelector('.show-chat');
    const closeChat = document.querySelector('.close-chat');

    showChat.addEventListener('click', function (){
        chatModal.classList.add('show')
        showChat.classList.add('hidden')
        setTimeout(() => {
            chatServices.classList.add('expand')
        }, 500);
    });
    closeChat.addEventListener('click',function () {
        setTimeout(() => {
            showChat.classList.remove('hidden')
        }, 820);
        chatServices.classList.remove('expand')
        setTimeout(() => {
            chatModal.classList.remove('show')
        }, 500);
    });
</script>

</body>

</html>
