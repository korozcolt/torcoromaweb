@extends('layouts.page')
@section('content-page')
    <!-- Page banner Area -->
    <div class="page-banner bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-content">
                        <h2>Contact With Us</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page banner Area -->

    <!-- Conatct Info -->
    <div class="pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <i class='bx bxs-phone'></i>
                        <h4>Contact Number</h4>
                        <p> <a href="tel:+0123654987">+0123 654 987</a></p>
                        <p><a href="tel:+0123456789">+0123 456 789</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <i class='bx bxs-location-plus'></i>
                        <h4>Our Location</h4>
                        <p>6th floor, anthina</p>
                        <p>Barbosa Sidney</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="contact-info">
                        <i class='bx bxs-envelope'></i>
                        <h4>Contact Number</h4>
                        <p><a href="mailto:hello@ferry.com">hello@ferry.com</a></p>
                        <p><a href="mailto:info@ferry.com">info@ferry.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Conatct Info -->

    <!-- Contact Area -->
    <div class="contact-form-area pb-100">
        <div class="container">
            <div class="section-title">
                <span>Contact Us</span>
                <h2>Get in Touch</h2>
            </div>

            <div class="contact-form">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form id="contactForm" method="POST" action="{{ route('contactus.send') }}" >
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" required data-error="Por favor, ingrese su correo" placeholder="Su correo">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="subject" id="msg_subject" class="form-control" required data-error="Por favor ingrese el Asunto" placeholder="Su asunto">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Your phone number">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 text-center">
                            <button type="submit" class="default-btn-one">Enviar Mensaje</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Area -->

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
