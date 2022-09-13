@extends('layouts.user')

@section('content')
<header class="container-fluid py-3" id="hero">
    <div class="row justify-content-center align-items-center px-1 px-md-3">
        <div class="col-md-10 col-lg-8 text-center">
            <h1 class="mb-3">Get a professional CV crafted in less than <span class="text-orange">10 minutes</span>.</h1>
            <p class="mb-4">Effortlessly design and build a professional CV that get HR talking and higher chance of winning a job.</p>
            <a href="#" class="btn btn-primary" id="hero-button">Get Started <span><i class="fa fa-arrow-right"></i></span> </a>
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
                <div class="box p-3 text-center shadow-sm rounded">
                    <i class="fas fa-clone"></i>
                    <h3>Choose Template</h3>
                    <p>Choose one of our premade templates that fit you most professionally</p>
                </div>
            </div>
            <div class="col-11 col-md-6 col-lg-4">
                <div class="box shadow-sm p-3 text-center rounded">
                    <i class="fas fa-edit"></i>
                    <h3>Fill your Details</h3>
                    <p>Input all your details till the last information about you</p>
                </div>
            </div>
            <div class="col-11 col-md-6 col-lg-4">
                <div class="box step shadow-sm p-3 text-center rounded">
                    <i class="fas fa-palette"></i>
                    <h3>Customize your CV</h3>
                    <p>Make your CV unique with design by customizing its page elements</p>
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
    <div class="row justify-content-center alogn-items-center">
        <div class="col-11 col-md-10 mx-auto">
            <div class="owl-carousel owl-theme">
                <div>
                    <a href="#">
                        <img src="{{ asset('images/CV image.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('images/CV image.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('images/CV image.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('images/CV image.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('images/CV image.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('images/CV image.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="{{ asset('images/CV image.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section-padding" id="templates">
    <div class="row justify-content-center align-items-center mb-5" id="section-header">
        <div class="col-12 text-center">
            <h5 class="text-orange">Our Reviews</h5>
            <h2 class="mt-2">What our customers are saying</h2>
        </div>
    </div>
</section>
@endsection