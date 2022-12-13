@extends('layouts.page')
@section('content-page')
    <!-- Page banner Area -->
    <div class="page-banner bg-2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-content">
                        <h2>Nuestros Servicios</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Inicio</a></li>
                            <li>Servicios</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page banner Area -->

    <!-- Best Logistic Area -->
    <div class="best-logistic-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="logistic-text">
                        <h2>AQUÍ <span>Puedes comprar tambien</span> Tu Tiquetes</h2>
                        <p>Compra y paga en linea, solo pasa a nuestras oficinas y reclamalo.</p>
                        <div class="widget" data-widgetid="TORCOROMA"></div>
                    </div>
                    {{-- <a href="#" class="default-btn-one">Read More</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End Best Logistic Area -->

    <!-- Our Services Area -->
    {{-- <div class="our-services-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Nuestros Servicios</span>
                <h2>Servicios de Transporte seguros, rápidos y fiables</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card-two">
                        <img src="{{ asset('img/services/services1.jpg') }}" alt="image">
                        <div class="service-caption">
                            <h3>Road Freight</h3>
                            <p>But I must explain to you how all this mistaken idea of denouncing I will give you a complete
                                account of the system.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card-two">
                        <img src="{{ asset('img/services/services2.jpg') }}" alt="image">
                        <div class="service-caption">
                            <h3>Ocean Freight</h3>
                            <p>But I must explain to you how all this mistaken idea of denouncing I will give you a complete
                                account of the system.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card-two">
                        <img src="{{ asset('img/services/services3.jpg') }}" alt="image">
                        <div class="service-caption">
                            <h3>Air Freight</h3>
                            <p>But I must explain to you how all this mistaken idea of denouncing I will give you a complete
                                account of the system.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card-two">
                        <img src="{{ asset('img/services/services4.jpg') }}" alt="image">
                        <div class="service-caption">
                            <h3>B2B Exchange</h3>
                            <p>But I must explain to you how all this mistaken idea of denouncing I will give you a complete
                                account of the system.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card-two">
                        <img src="{{ asset('img/services/services5.jpg') }}" alt="image">
                        <div class="service-caption">
                            <h3>Home Shipping</h3>
                            <p>But I must explain to you how all this mistaken idea of denouncing I will give you a complete
                                account of the system.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card-two">
                        <img src="{{ asset('img/services/services6.jpg') }}" alt="image">
                        <div class="service-caption">
                            <h3>Office Moving</h3>
                            <p>But I must explain to you how all this mistaken idea of denouncing I will give you a complete
                                account of the system.</p>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                 <div class="col-lg-12 col-md-12">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </div> 
            </div>
        </div>
    </div> --}}
    <!-- Our End Services Area -->
@endsection
