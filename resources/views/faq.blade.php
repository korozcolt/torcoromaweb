@extends('layouts.page')
@section('content-page')
    <!-- Page banner Area -->
    <div class="page-banner bg-2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-content">
                        <h2>PQR's</h2>
                        <ul>
                            <li><a href="{{ url('/')}}">Inicio</a></li>
                            <li>PQR's</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page banner Area -->

    <!-- Star Faq Area -->
    <div class="faq-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>PQR's</span>
                <h2>Preguntas, Peticiones, Quejas y Recursos</h2>
            </div>
            <div class="faq-contant">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="accordion">
                            <li>
                                <h3 class="title">Transport & Logistic Services</h3>
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, </p>
                                </div>
                            </li>
                            <li>
                                <h3 class="title">Safe and Faster Logistic Service Neer You</h3>
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, </p>
                                </div>
                            </li>
                            <li>
                                <h3 class="title">Digital Shipping Solution</h3>
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, </p>
                                </div>
                            </li>
                            <li>
                                <h3 class="title">We Provide Best Logistic Services </h3>
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, </p>
                                </div>
                            </li>
                            <li>
                                <h3 class="title">Modern, Safe And Trusted Logistic Company</h3>
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, </p>
                                </div>
                            </li>
                            <li>
                                <h3 class="title">Our Clients Around </h3>
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, </p>
                                </div>
                            </li>
                            <li>
                                <h3 class="title">The World Makes Us Special</h3>
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <div class="faq-image">
                            <img src="assets/img/about/about1.jpg" alt="image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq-form">
                <form>
                    <div class="section-title">
                        <span>PQR's</span>
                        <h2>Preguntas, Peticiones, Quejas y Recursos</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Su nombre">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Su email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Su teléfono">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Asunto:</label>
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Escriba un breve resumen">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3"
                                  placeholder="Mensaje completo"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="faq-form-btn">Enviar mensaje</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Faq Area -->

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
                        <form class="newsletter-form" data-bs-toggle="validator">
                            <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required="" autocomplete="off">
                            <button type="submit" class="btn btn-primary">Subscribe</button>

                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter Area -->
@endsection
