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
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/chat.css')}}" rel="stylesheet" />
</head>


<body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-4 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="{{asset('assets/img/gallery/logo.png')}}" height="24" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="#home">Home</a></li>
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#aboutUs">About us</a></li>
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#clients">Clients</a></li>
                    <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#faq">FAQ's</a></li>
                </ul>
                <form class="ps-lg-5"><a class="btn btn-primary order-1 order-lg-0" href="#!">CONTACTO</a></form>
            </div>
        </div>
    </nav>
    <section id="home">
        <div class="bg-holder" style="background-image:url({{asset('assets/img/gallery/header-bg.png')}});background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row align-items-center min-vh-50 min-vh-sm-100">
                <div class="col-md-7 col-lg-6 text-md-start text-center">
                    <h1 class="text-light fs-6 fs-xl-8 font-cursive fw-normal mb-5">Your awesome<br />traffic permit <br />consultant.</h1><a class="btn btn-primary" href="#" role="button">GET STARTED
                        <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                        </svg></a>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section id="aboutUs">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center mb-6 mb-md-0 order-0 order-md-1"><img class="w-100" src="assets/img/gallery/about-us.png" alt="..." /></div>
                <div class="col-md-6 text-center text-md-start mb-6">
                    <h4 class="text-danger">ABOUT US</h4>
                    <p class="my-5 fs-1 pe-xl-8">The occupational traffic permit is one of the most important things in the company when carrying out freight transport. In fact, it is a prerequisite for doing business traffic at all. </p>
                    <div class="card card-span bg-soft-primary border-start border-primary border-5 mt-3">
                        <div class="card-body">
                            <h4 class="lh-base px-lg-5 py-3">
                                How do you do when you need to obtain a commercial traffic permit for freight transport
                                to your business?
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center mb-6 mb-md-0"><img class="w-100" src="assets/img/gallery/how-to-apply.png" alt="..." /></div>
                <div class="col-md-6 text-center text-md-start mb-6 px-4">
                    <h4 class="text-danger text-uppercase">How to apply</h4>
                    <p class="my-5 fs-1 pe-xl-7">When applying for a traffic permit, there are certain requirements that you must meet that are included in the examination: requirements for professional knowledge, solid establishment, good reputation and financial resources. Important to remember is to confirm your application for a traffic permit by the company's company signer or CEO.</p>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section class="bg-primary-gradient" id="faq">
        <div class="bg-holder" style="background-image:url(assets/img/gallery/faq-bg.png);background-position:right;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row flex-center">
                <div class="col-md-6">
                    <h4 class="text-danger text-uppercase">faq</h4>
                    <h1 class="font-cursive fw-normal mb-5">Questions and Answers <br class="d-none d-lg-block" />on Professional Traffic<br class="d-none d-lg-block" />Permits:</h1>
                </div>
                <div class="col-md-6"><img class="w-100" src="{{ asset('assets/img/gallery/faq.png') }}" alt="..." /></div>
            </div>
            <div class="row flex-center py-4">
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample1">
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button px-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1"><span class="mb-0 text-start fs-0 text-900 fw-medium">What is a professional traffic permit?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse show" id="collapse1" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">Traffic permits are a requirement for conducting professional traffic.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2"><span class="mb-0 text-start fs-0 text-900 fw-medium">How to check the traffic condition?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">You can issue either partial or full refunds. There are no fees to refund a charge, but the fees from the original charge are not returned.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3"><span class="mb-0 text-start fs-0 text-900 fw-medium">What are the requirements for a professional traffic permit?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse3" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">Disputed payments (also known as chargebacks) incur a $15.00 fee. If the customer’s bank resolves the dispute in your favor, the fee is fully refunded.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4"><span class="mb-0 text-start fs-0 text-900 fw-medium">Are there professional traffic permit training courses at a distance?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse4" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">There are no additional fees for using our mobile SDKs or to accept payments using consumer wallets like Apple Pay or Google Pay.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5"><span class="mb-0 text-start fs-0 text-900 fw-medium">When is a professional traffic permit needed?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse5" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">There are no additional fees for using our mobile SDKs or to accept payments using consumer wallets like Apple Pay or Google Pay.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample2">
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6"><span class="mb-0 text-start fs-0 text-900 fw-medium">Where to look for a traffic permit?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse6" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">There are no additional fees for using our mobile SDKs or to accept payments using consumer wallets like Apple Pay or Google Pay.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading7">
                                <button class="accordion-button px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7"><span class="mb-0 text-start fs-0 text-900 fw-medium">Are there differences between a traffic permit and a professional traffic permit?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse7" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">There are no additional fees for using our mobile SDKs or to accept payments using consumer wallets like Apple Pay or Google Pay.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading8">
                                <button class="accordion-button px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="true" aria-controls="collapse8"><span class="mb-0 text-start fs-0 text-900 fw-medium">How much does a commercial traffic permit cost for goods?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse8" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">There are no additional fees for using our mobile SDKs or to accept payments using consumer wallets like Apple Pay or Google Pay.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading9">
                                <button class="accordion-button px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapse9"><span class="mb-0 text-start fs-0 text-900 fw-medium">How to plug in for the traffic permit test?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse9" aria-labelledby="heading9" data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">There are no additional fees for using our mobile SDKs or to accept payments using consumer wallets like Apple Pay or Google Pay.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading10">
                                <button class="accordion-button px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="true" aria-controls="collapse10"><span class="mb-0 text-start fs-0 text-900 fw-medium">How is the sample for a professional traffic permit booked?</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse10" aria-labelledby="heading10" data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">There are no additional fees for using our mobile SDKs or to accept payments using consumer wallets like Apple Pay or Google Pay.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 rounded overflow-hidden">
                            <h2 class="accordion-header" id="heading11">
                                <button class="accordion-button px-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="true" aria-controls="collapse11"><span class="mb-0 text-start fs-0 text-900 fw-medium">LOAD MORE</span></button>
                            </h2>
                            <div class="accordion-collapse collapse" id="collapse11" aria-labelledby="heading11" data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-primary-gradient px-4">There are no additional fees for using our mobile SDKs or to accept payments using consumer wallets like Apple Pay or Google Pay.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section id="clients">

        <div class="container">
            <div class="row">
                <div class="col-md-11 col-lg-6 col-xl-4 col-xxl-3">
                    <h4 class="text-danger text-uppercase">Testimonial</h4>
                    <h1 class="font-cursive fw-normal mb-5">Our Awesome <br />Clients </h1>
                </div>
                <div class="col-xxl-9">
                    <div class="position-relative offset-9 offset-sm-10 offset-lg-11 mb-3"><a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a></div>
                    <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <div class="row h-100 mx-1 mb-5 mt-3 gx-md-2 gx-lg-4">
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card card-span h-100 shadow-primary">
                                            <div class="card-body my-3">
                                                <p class="mb-0 px-3 px-md-2 px-xxl-3">Yes, you will need to have the land owner sign the permit application as the Permittee, and you sign the permit as the Applicant or Agent for the Permittee.</p>
                                                <div class="align-items-xl-center d-block d-xl-flex px-3 mt-3 align-self-end"><img class="img-fluid me-3 me-md-2 me-lg-3" src="{{asset('assets/img/gallery/isak.png')}}" width="50" alt="" />
                                                    <div class="flex-1 align-items-center pt-2">
                                                        <h6 class="mb-0">Isak Pettersson</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card card-span h-100 shadow-primary">
                                            <div class="card-body my-3">
                                                <p class="mb-0 px-3 px-md-2 px-xxl-3">From most barricade or traffic control companies located in the phone book. They employ certified Traffic Control Supervisors (TCS) who can generate and certify the traffic control plan. </p>
                                                <div class="align-items-xl-center d-block d-xl-flex px-3 mt-3 align-self-end"><img class="img-fluid me-3 me-md-2 me-lg-3" src="{{asset('assets/img/gallery/simon.png')}}" width="50" alt="" />
                                                    <div class="flex-1 align-items-center pt-2">
                                                        <h6 class="mb-0">Simon Sandberg</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card card-span h-100 shadow-primary">
                                            <div class="card-body my-3">
                                                <p class="mb-0 px-3 px-md-2 px-xxl-3">An A-Line, or access restriction deed is a property right that has been obtained by CDOT for the sole purpose of prohibiting direct</p>
                                                <div class="align-items-xl-center d-block d-xl-flex px-3 mt-3 align-self-end"><img class="img-fluid me-3 me-md-2 me-lg-3" src="{{asset('assets/img/gallery/petter.png')}}" width="50" alt="" />
                                                    <div class="flex-1 align-items-center pt-2">
                                                        <h6 class="mb-0">Pettersson</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <div class="row h-100 mx-1 mb-5 mt-3 gx-md-2 gx-lg-4">
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card card-span h-100 shadow-primary">
                                            <div class="card-body my-3">
                                                <p class="mb-0 px-3 px-md-2 px-xxl-3">Yes, you will need to have the land owner sign the permit application as the Permittee, and you sign the permit as the Applicant or Agent for the Permittee.</p>
                                                <div class="align-items-xl-center d-block d-xl-flex px-3 mt-3 align-self-end"><img class="img-fluid me-3 me-md-2 me-lg-3" src="{{asset('assets/img/gallery/isak.png')}}" width="50" alt="" />
                                                    <div class="flex-1 align-items-center pt-2">
                                                        <h6 class="mb-0">Isak Pettersson</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card card-span h-100 shadow-primary">
                                            <div class="card-body my-3">
                                                <p class="mb-0 px-3 px-md-2 px-xxl-3">From most barricade or traffic control companies located in the phone book. They employ certified Traffic Control Supervisors (TCS) who can generate and certify the traffic control plan. </p>
                                                <div class="align-items-xl-center d-block d-xl-flex px-3 mt-3 align-self-end"><img class="img-fluid me-3 me-md-2 me-lg-3" src="assets/img/gallery/simon.png" width="50" alt="" />
                                                    <div class="flex-1 align-items-center pt-2">
                                                        <h6 class="mb-0">Simon Sandberg</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card card-span h-100 shadow-primary">
                                            <div class="card-body my-3">
                                                <p class="mb-0 px-3 px-md-2 px-xxl-3">An A-Line, or access restriction deed is a property right that has been obtained by CDOT for the sole purpose of prohibiting direct</p>
                                                <div class="align-items-xl-center d-block d-xl-flex px-3 mt-3 align-self-end"><img class="img-fluid me-3 me-md-2 me-lg-3" src="assets/img/gallery/petter.png" width="50" alt="" />
                                                    <div class="flex-1 align-items-center pt-2">
                                                        <h6 class="mb-0">Pettersson</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row h-100 mx-1 mb-5 mt-3 gx-md-2 gx-lg-4">
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card card-span h-100 shadow-primary">
                                            <div class="card-body my-3">
                                                <p class="mb-0 px-3 px-md-2 px-xxl-3">Yes, you will need to have the land owner sign the permit application as the Permittee, and you sign the permit as the Applicant or Agent for the Permittee.</p>
                                                <div class="align-items-xl-center d-block d-xl-flex px-3 mt-3 align-self-end"><img class="img-fluid me-3 me-md-2 me-lg-3" src="assets/img/gallery/isak.png" width="50" alt="" />
                                                    <div class="flex-1 align-items-center pt-2">
                                                        <h6 class="mb-0">Isak Pettersson</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card card-span h-100 shadow-primary">
                                            <div class="card-body my-3">
                                                <p class="mb-0 px-3 px-md-2 px-xxl-3">From most barricade or traffic control companies located in the phone book. They employ certified Traffic Control Supervisors (TCS) who can generate and certify the traffic control plan. </p>
                                                <div class="align-items-xl-center d-block d-xl-flex px-3 mt-3 align-self-end"><img class="img-fluid me-3 me-md-2 me-lg-3" src="assets/img/gallery/simon.png" width="50" alt="" />
                                                    <div class="flex-1 align-items-center pt-2">
                                                        <h6 class="mb-0">Simon Sandberg</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-5 mb-md-0">
                                        <div class="card card-span h-100 shadow-primary">
                                            <div class="card-body my-3">
                                                <p class="mb-0 px-3 px-md-2 px-xxl-3">An A-Line, or access restriction deed is a property right that has been obtained by CDOT for the sole purpose of prohibiting direct</p>
                                                <div class="align-items-xl-center d-block d-xl-flex px-3 mt-3 align-self-end"><img class="img-fluid me-3 me-md-2 me-lg-3" src="assets/img/gallery/petter.png" width="50" alt="" />
                                                    <div class="flex-1 align-items-center pt-2">
                                                        <h6 class="mb-0">Pettersson</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section>
        <div class="bg-holder" style="background-image:url({{asset('assets/img/gallery/footer-bg.png')}});background-position:left;background-size:contain;padding:5px 3px;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row min-vh-lg-50 min-vh-xl-75">
                <div class="col-lg-6 col-xl-5 my-2 py-9 d-none d-lg-block">
                    <div class="card card-span bg-transparent border-start border-primary border-5 mt-3">
                        <div class="card-body">
                            <p class="text-light fs-2 lh-lg px-lg-3">We provide traffic management consultants so you get started quickly, contact us for a quote today!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 mb-3">
                    <div class="card card-span shadow py-4 px-5">
                        <div class="card-body">
                            <form class="row g-3 align-items-center">
                                <div class="mb-3">
                                    <label class="form-label" for="formGroupExampleInput">Name</label>
                                    <input class="form-control form-traffico-control" id="formGroupExampleInput" type="text" placeholder="Name" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="formGroupExampleInput2">Email address</label>
                                    <input class="form-control form-traffico-control" id="formGroupExampleInput2" type="text" placeholder="Your email address" />
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">GET STARTED
                                        <svg class="bi bi-arrow-right ms-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-5">

        <div class="container">
            <div class="row flex-center">
                <div class="col-md-6 col-xl-8 order-0">
                    <p class="text-center text-md-start">Todos los derechos reservador &copy; Torcoroma, 2021</p>
                </div>
                <div class="col-md-6 col-xl-3 order-1">
                    <p class="text-center text-md-end text-xl-start">Hecho con&nbsp;
                        <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#EE4D47" viewBox="0 0 16 16">
                            <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                        </svg>&nbsp;by&nbsp;<a class="text-1000 fw-bold" href="https://themewagon.com/" target="_blank">Kronnos Dev </a>
                    </p>
                    <ul class="list-unstyled list-inline mb-6 mb-md-0 text-center text-md-end text-xl-start">
                        <li class="list-inline-item mr-2"><a class="text-decoration-none" href="#!"><img class="list-social-icon" src="assets/img/icons/i.png" alt="..." /></a></li>
                        <li class="list-inline-item mr-2"><a class="text-decoration-none" href="#!"><img class="list-social-icon" src="assets/img/icons/t.png" alt="..." /></a></li>
                        <li class="list-inline-item mr-2"><a class="text-decoration-none" href="#!"><img class="list-social-icon" src="assets/img/icons/f.png" alt="..." /></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
    <input type="checkbox" id="check"> <label class="chat-btn" for="check"> <i class="fa fa-commenting-o comment"></i> <i class="fa fa-close close"></i> </label>
    <div class="wrapper">
        <div class="chat-header">
            <h6>Let's Chat - Online</h6>
        </div>
        <div class="text-center p-2"> <span>Please fill out the form to start chat!</span> </div>
        <div class="chat-form"> <input type="text" class="form-control" placeholder="Name"> <input type="text" class="form-control" placeholder="Email"> <textarea class="form-control" placeholder="Your Text Message"></textarea> <button class="btn btn-success btn-block">Submit</button> </div>
    </div>

</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->




<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="vendors/@popperjs/popper.min.js"></script>
<script src="vendors/bootstrap/bootstrap.min.js"></script>
<script src="vendors/is/is.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="vendors/fontawesome/all.min.js"></script>
<script src="assets/js/theme.js"></script>

<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
</body>

</html>
