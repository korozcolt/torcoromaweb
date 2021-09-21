@extends('layouts.page')
@section('content-page')
    <!-- Page banner Area -->
    <div class="page-banner bg-2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-content">
                        <h2>FAQ</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>FAQ</li>
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
                <span>FAQ</span>
                <h2>Frequently Asked Questions</h2>
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
                        <span>FAQ,s</span>
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" id="phone" placeholder="Your Phone">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="Your Subject">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" id="message" rows="3"
                                  placeholder="Message"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="faq-form-btn">Send Message</button>
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
