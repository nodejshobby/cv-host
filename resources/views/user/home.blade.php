@extends('layouts.user')

@section('content')
<div data-bs-spy="scroll" data-bs-target="#navbar-scroll">
<header class="container-fluid py-3" id="hero">
    <div class="row justify-content-center align-items-center px-1 px-md-3">
        <div class="col-md-10 col-lg-8 text-center">
            <h1 class="mb-3">Get a professional CV crafted in less than <span class="text-orange">10 minutes</span>.</h1>
            <p class="mb-4">Effortlessly design and build a professional CV that get HR talking and higher chance of winning a job.</p>
            @guest
                <a href="{{ route('register.show') }}" class="btn btn-primary" id="hero-button">Get Started <span><i class="fa fa-arrow-right"></i></span> </a>
            @endguest

            @auth
                <a href="{{ route('template.index') }}" class="btn btn-primary" id="hero-button"><span><i class="fa fa-plus-circle"></i></span> Create CV</a>
            @endauth
        </div>
    </div>
</header>

<section class="container section-padding" id="cv-process">
    <div class="row justify-content-center align-items-center mb-5" id="section-header">
        <div class="col-12 text-center">
            <h5 class="text-orange">How it works</h5>
            <h2 class="mt-2">It only takes you few steps</h2>
        </div>
    </div>
    <div class="row justify-content-center align-items-center g-5">
            <div class="col-11 col-md-6 col-lg-4">
                <div class="process p-4 text-center shadow-sm rounded">
                    <i class="fas fa-clone"></i>
                    <h3>Choose Template</h3>
                    <p>Choose one of our premade templates that fit you most professionally</p>
                </div>
            </div>
            <div class="col-11 col-md-6 col-lg-4">
                <div class="process shadow-sm p-4 text-center rounded">
                    <i class="fas fa-edit"></i>
                    <h3>Fill your Details</h3>
                    <p>Input all your details till the last information about you</p>
                </div>
            </div>
            <div class="col-11 col-md-6 col-lg-4">
                <div class="process step shadow-sm p-4 text-center rounded">
                    <i class="fas fa-palette"></i>
                    <h3>Customize your CV</h3>
                    <p>Make your CV unique with design by customizing its page elements</p>
                </div>
            </div>
    </div>
</section>

<section class="container section-padding" id="services">
    <div class="row justify-content-center align-items-center mb-5" id="section-header">
        <div class="col-12 text-center">
            <h5 class="text-orange">Our Benefits</h5>
            <h2 class="mt-2">We make building CV easy and fast</h2>
        </div>
    </div>

    <div class="row justify-content-center align-items-center g-4">
        <div class="col-11 col-md-6 col-lg-3">
            <div class="service d-flex shadow-sm py-4 px-3 align-items-center justify-content-center rounded">
                <span class="service-icon me-3"><i class="fa fa-clone"></i></span>
                <h4>Professional Templates</h4>
            </div>
        </div>
        <div class="col-11 col-md-6 col-lg-3">
            <div class="service d-flex shadow-sm py-4 px-3 align-items-center justify-content-center rounded">
                <span class="service-icon me-3"><i class="fa fa-lock-open"></i></span>
                <h4>Easy and Accessible</h4>
            </div>
        </div>
        <div class="col-11 col-md-6 col-lg-3">
            <div class="service d-flex shadow-sm py-4 px-4 align-items-center justify-content-center rounded">
                <span class="service-icon me-3"><i class="fas fa-palette"></i></span>
                <h4>Customizable Designs</h4>
            </div>
        </div>
        <div class="col-11 col-md-6 col-lg-3">
            <div class="service d-flex shadow-sm py-4 px-3 align-items-center justify-content-center rounded">
                <span class="service-icon me-3"><i class="fa fa-credit-card"></i></span>
                <h4>Affordable Prices</h4>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light" id="templates">
    <div class="row justify-content-center align-items-center mb-5" id="section-header">
        <div class="col-12 text-center">
            <h5 class="text-orange">Our Templates</h5>
            <h2 class="mt-2">Pick from our well crafted templates</h2>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-11 col-md-10 mx-auto">
            <div class="owl-carousel owl-theme" id="template-carousel">
                <div class="template">
                    <span class="template-icon text-yellow"><i class="fas fa-crown"></i></span>
                    <a href="#">
                        <img src="{{ asset('images/CV image.png') }}" alt="" class="img-fluid">
                    </a>
                    <div class="action">
                        <a href="#" class="btn btn-primary py-2 px-3"><i class="fa fa-edit fa-2x"></i></a>
                    </div>
                </div>
                <div class="template">
                    <span class="template-icon text-yellow"><i class="fas fa-crown"></i></span>
                    <a href="#">
                        <img src="{{ asset('images/CV image.png') }}" alt="" class="img-fluid">
                    </a>
                    <div class="action">
                        <a href="#" class="btn btn-primary py-2 px-3"><i class="fa fa-edit fa-2x"></i></a>
                    </div>
                </div>
                <div class="template">
                    <span class="template-icon text-yellow"><i class="fas fa-crown"></i></span>
                    <a href="#">
                        <img src="{{ asset('images/CV image.png') }}" alt="" class="img-fluid">
                    </a>
                    <div class="action">
                        <a href="#" class="btn btn-primary py-2 px-3"><i class="fa fa-edit fa-2x"></i></a>
                    </div>
                </div>
                <div class="template">
                    <a href="#">
                        <img src="{{ asset('images/CV image.png') }}" alt="" class="img-fluid">
                    </a>
                    <div class="action">
                        <a href="#" class="btn btn-primary py-2 px-3"><i class="fa fa-edit fa-2x"></i></a>
                    </div>
                </div>
                <div class="template">
                    <a href="#">
                        <img src="{{ asset('images/CV image.png') }}" alt="" class="img-fluid">
                    </a>
                    <div class="action">
                        <a href="#" class="btn btn-primary py-2 px-3"><i class="fa fa-edit fa-2x"></i></a>
                    </div>
                </div>
                <div class="template">
                    <a href="#">
                        <img src="{{ asset('images/CV image.png') }}" alt="" class="img-fluid">
                    </a>
                    <div class="action">
                        <a href="#" class="btn btn-primary py-2 px-3"><i class="fa fa-edit fa-2x"></i></a>
                    </div>
                </div>
                <div class="template">
                    <a href="#">
                        <img src="{{ asset('images/CV image.png') }}" alt="" class="img-fluid">
                    </a>
                    <div class="action">
                        <a href="#" class="btn btn-primary py-2 px-3"><i class="fa fa-edit fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding" id="reviews">
    <div class="row justify-content-center align-items-center mb-5" id="section-header">
        <div class="col-12 text-center">
            <h5 class="text-orange">Our Reviews</h5>
            <h2 class="mt-2">What our customers are saying</h2>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-11 col-md-10 col-lg-7">
            <div class="owl-carousel owl-theme" id="review-carousel">
                <div class="review bg-light text-center p-5 rounded">
                    <div class="review-icon"><span><i class="fas fa-quote-left text-orange"></i></span> </div>
                    <div class="rating mb-2">
                        <span class="fw-bold">(5.0)</span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                    </div>
                    <div class="review-comment">
                        <p>I love to use CVHost because of its simplicity and easy to access solutions to building a professional CV in no time.</p>
                    </div>
                    <div class="review-owner">
                        <h4>- Faruq Abdullahi</h4>
                    </div>
                </div>
                <div class="review bg-light text-center p-5 rounded">
                    <div class="review-icon"><span><i class="fas fa-quote-left text-orange"></i></span> </div>
                    <div class="rating mb-2">
                        <span class="fw-bold">(5.0)</span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                    </div>
                    <div class="review-comment">
                        <p>I love to use CVHost because of its simplicity and easy to access solutions to building a professional CV in no time.</p>
                    </div>
                    <div class="review-owner">
                        <h4>- Faruq Abdullahi</h4>
                    </div>
                </div>
                <div class="review bg-light text-center p-5 rounded">
                    <div class="review-icon"><span><i class="fas fa-quote-left text-orange"></i></span> </div>
                    <div class="rating mb-2">
                        <span class="fw-bold">(5.0)</span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                    </div>
                    <div class="review-comment">
                        <p>I love to use CVHost because of its simplicity and easy to access solutions to building a professional CV in no time.</p>
                    </div>
                    <div class="review-owner">
                        <h4>- Faruq Abdullahi</h4>
                    </div>
                </div>
                <div class="review bg-light text-center p-5 rounded">
                    <div class="review-icon"><span><i class="fas fa-quote-left text-orange"></i></span> </div>
                    <div class="rating mb-2">
                        <span class="fw-bold">(5.0)</span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                    </div>
                    <div class="review-comment">
                        <p>I love to use CVHost because of its simplicity and easy to access solutions to building a professional CV in no time.</p>
                    </div>
                    <div class="review-owner">
                        <h4>- Faruq Abdullahi</h4>
                    </div>
                </div>
                <div class="review bg-light text-center p-5 rounded">
                    <div class="review-icon"><span><i class="fas fa-quote-left text-orange"></i></span> </div>
                    <div class="rating mb-2">
                        <span class="fw-bold">(5.0)</span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                        <span><i class="fa fa-star text-yellow"></i></span>
                    </div>
                    <div class="review-comment">
                        <p>I love to use CVHost because of its simplicity and easy to access solutions to building a professional CV in no time.</p>
                    </div>
                    <div class="review-owner">
                        <h4>- Faruq Abdullahi</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding" id="faq-and-contact">
    <div class="row justify-content-center align-items-center mb-5" id="section-header">
        <div class="col-12 text-center">
            <h5 class="text-orange">Any Question</h5>
            <h2 class="mt-2">Enquire with our FAQ or Contact Us</h2>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center g-5 px-lg-4">
            <div class="col-11 col-md-6 bg-light rounded p-1">
                <div class="accordion m-0" id="faq">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expnaded="true" aria-controls="collapseOne">How do I use CVHost?</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#faq">
                            <div class="accordion-body">
                                <ul>
                                    <li>Select a template that best suites your professionality and personlaity.</li>
                                    <li>Fill in your details like Personal Details, Skills, Employment History, Hobbies</li>
                                    <li>Select a downloadable format of your CV either word or pdf format.
                                         <b>Note:</b> Choose a word format so you can edit your CV offline but choose pdf format as the recommended file format to share with companies you are applying for.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expnaded="true" aria-controls="collapseTwo">How does CVHost accept payment?</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#faq">
                            <div class="accordion-body">
                                We accept payment through an authorized payment gateway that makes the process of accepting payments through different means easy and seamless experience.<b>Note:</b> We only request payment from any of our premium templates.Though, there are three to four free templates to use that can serve your Job hunting purpose but it is recommended you choose one of our affordable paid templates.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expnaded="true" aria-controls="collapseThree">How much does CVHost charge for their premium templates?</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#faq">
                            <div class="accordion-body">
                               <p>We charge a transparent fee of <b>&#8358;3,000</b> for any of our premium templates.All our premium templates has equal price of <b>&#8358;3,000</b>, So you can choose any of our premium templates that intrests you since they carry equal charges. <b>Note:</b> It is advisable you use any of our paid templates.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expnaded="true" aria-controls="collapseFour">Which template should I choose?</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#faq">
                            <div class="accordion-body">
                               <p>It is your choice to choose the template that best fit you professionally and as per whether you are to choose between free or paid templates it is your choice but we recommend you use one of our paid templates with tailored keywords and designs expected from hiring managers</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-11 col-md-6 pe-md-0">
                <div class="bg-primary text-white p-4 rounded m-0" id="contact-box">
                    <h2 class="mb-2">We are a message away from you.</h2>
                    <p>We are always ready to help you so feel free to check our FAQ or contact us.</p>
                    <a href="#" class="btn btn-primary mt-1" id="contact-cta">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

@endsection