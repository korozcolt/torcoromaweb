@extends('layouts.page')
@section('content-page')
<!-- Page banner Area -->
<div class="page-banner bg-1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-content">
                    <h2>Acerca de</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Inicio</a></li>
                        <li>Torcoroma S.A.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page banner Area -->

<!-- About Safe Area -->
<div class="about-text-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-safe-text">
                    <h2>Solución segura, rápida y fácil para su transporte</h2>
                    <p>Siempre estamos en la busqueda constante del equilibrio entre la eficiencia y el buen servicio, para llegar a contemplar y entregar lo mejor cada día. </p>
                </div>

                <div class="shipping-card">
                    <div class="shipping-contant">
                        <div class="shipping-sign">
                            <img src="{{ asset('img/sign.png') }}" alt="image">
                        </div>
                        <div class="shipping-image">
                            <img src="{{ asset('img/clients/client1.png') }}" alt="image">
                        </div>
                        <h3>Luis Assia</h3>
                        <span>CEO, Tocoroma S.A.</span>
                        <p>Tampoco hay nadie que ame o persiga o desee.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="safe-image">
                    <img src="{{ asset('img/speciality/speciality2.jpg') }}" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Safe Area -->

<!-- About Info -->
<div class="about-info-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="about-info-card">
                    <h3>Nuestra Misión</h3>
                    <ul>
                        <li>
                            <i class='bx bx-check'></i>
                            We provide  best logistic service worldwide
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            All payment methods we accept
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            We provide proper safety and security.
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            We provide  best logistic service worldwide
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            All payment methods we accept.
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            We provide proper safety and security.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="about-info-card">
                    <h3>Nuestros Principios</h3>
                    <ul>
                        <li>
                            <i class='bx bx-check'></i>
                            We provide  best logistic service worldwide
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            All payment methods we accept
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            We provide proper safety and security.
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            We provide  best logistic service worldwide
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            All payment methods we accept.
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            We provide proper safety and security.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="about-info-card">
                    <h3>Nuestra Visión</h3>
                    <ul>
                        <li>
                            <i class='bx bx-check'></i>
                            We provide  best logistic service worldwide
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            All payment methods we accept
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            We provide proper safety and security.
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            We provide  best logistic service worldwide
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            All payment methods we accept.
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            We provide proper safety and security.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Info -->

<!-- Digital Area -->
<div class="digital-area ptb-100">
    <div class="container">
        <div class="digital-top-contant">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="digital-image">
                        <img src="{{ asset('img/blog/blog7.jpg') }}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="digital-text">
                        <h2>Trusted Digital Shipping From <span>1998</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua cillum dolore eu fugiat nulla pariatur cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="digital-card-contant">
            <div class="row">
                <div class="col-lg-6">
                    <div class="digital-card">
                        <div class="card-text">
                            <i class='bx bx-cart-alt'></i>
                            <h3><span>1998</span> - Company Started</h3>
                            <p>orem ipsum dolor sit amet elit, sed do eiusmod tempor incididunt ut labore et .</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="digital-card">
                        <div class="card-text">
                            <i class='bx bx-map-alt'></i>
                            <h3><span>2008</span> - Office worldwide</h3>
                            <p>orem ipsum dolor sit amet elit, sed do eiusmod tempor incididunt ut labore et .</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="digital-card">
                        <div class="card-text">
                            <i class='bx bxs-truck' ></i>
                            <h3><span>2004</span> - Vehicles Adding</h3>
                            <p>orem ipsum dolor sit amet elit, sed do eiusmod tempor incididunt ut labore et .</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="digital-card">
                        <div class="card-text">
                            <i class='bx bx-award'></i>
                            <h3><span>2012</span> - Award Of The Year Won</h3>
                            <p>orem ipsum dolor sit amet elit, sed do eiusmod tempor incididunt ut labore et .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Digital Area -->

<!-- partner Slider Area -->
<div class="partner-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span>Partner</span>
            <h2>20+ Companies Trusted Us and Getting Result</h2>
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

<!-- Newsletter Area -->
<div class="newsletter-area">
    <div class="container">
        <div class="newsletter-content">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="newsletter-title">
                        <h3>Subscribe to our newsletter:</h3>
                        <p>Focused on the transport and logistic industry</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-form">
                        <form>
                            <input type="email" class="form-control" placeholder="Email Address" required autocomplete="off">
                            <button type="submit" class="btn btn-primary">Subscribe</button>

                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Newsletter Area -->
@endsection
