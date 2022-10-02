@extends('layouts.user')


@section('content')
<div class="container my-5">
    <div class="row text-center mb-5">
        <div class="col-12">
            <h1>Choose from our templates</h1>
            <p>We have great free templates to use and we also have premium templates.All are well crafted by our professionals</p>
        </div>
    </div>
    <div class="row justify-content-center align-items-center g-5">
        <div class="col-md-6 col-lg-4">
            <div class="cv-display">
                <span class="cv-display-icon text-yellow"><i class="fas fa-crown"></i></span>
                <div class="img-wrapper">
                    <a href="{{ route('user_detail.index',['template' => 1]) }}">
                        <img class="img-fluid w-100" src="{{ asset('images/CV image.png') }}" alt="">
                    </a>
                    <div class="action">
                        <a href="{{ route('user_detail.index', ['template' => 1]) }}" class="btn btn-primary py-2 px-3"><i class="fa fa-edit"></i> Choose Template</a>
                    </div>
                </div>
                <h3 class="mt-3 mb-2">Cleansy</h3>
                <p>A two column based expressive CV template</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="cv-display">
                <span class="cv-display-icon text-yellow"><i class="fas fa-crown"></i></span>
                <div class="img-wrapper">
                    <a href="#">
                        <img class="img-fluid w-100" src="{{ asset('images/CV image.png') }}" alt="">
                    </a>
                    <div class="action">
                        <a href="#" class="btn btn-primary py-2 px-3"><i class="fa fa-edit"></i> Choose Template</a>
                    </div>
                </div>
                <h3 class="mt-3 mb-2">Cleansy</h3>
                <p>A two column based expressive CV template</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="cv-display">
                <span class="cv-display-icon text-yellow"><i class="fas fa-crown"></i></span>
                <div class="img-wrapper">
                    <a href="#">
                        <img class="img-fluid w-100" src="{{ asset('images/CV image.png') }}" alt="">
                    </a>
                    <div class="action">
                        <a href="#" class="btn btn-primary py-2 px-3"><i class="fa fa-edit"></i> Choose Template</a>
                    </div>
                </div>
                <h3 class="mt-3 mb-2">Cleansy</h3>
                <p>A two column based expressive CV template</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="cv-display">
                <span class="cv-display-icon text-yellow"><i class="fas fa-crown"></i></span>
                <div class="img-wrapper">
                    <a href="#">
                        <img class="img-fluid w-100" src="{{ asset('images/CV image.png') }}" alt="">
                    </a>
                    <div class="action">
                        <a href="#" class="btn btn-primary py-2 px-3"><i class="fa fa-edit"></i> Choose Template</a>
                    </div>
                </div>
                <h3 class="mt-3 mb-2">Cleansy</h3>
                <p>A two column based expressive CV template</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="cv-display">
                <span class="cv-display-icon text-yellow"><i class="fas fa-crown"></i></span>
                <div class="img-wrapper">
                    <a href="#">
                        <img class="img-fluid w-100" src="{{ asset('images/CV image.png') }}" alt="">
                    </a>
                    <div class="action">
                        <a href="#" class="btn btn-primary py-2 px-3"><i class="fa fa-edit"></i> Choose Template</a>
                    </div>
                </div>
                <h3 class="mt-3 mb-2">Cleansy</h3>
                <p>A two column based expressive CV template</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="cv-display">
                <span class="cv-display-icon text-yellow"><i class="fas fa-crown"></i></span>
                <div class="img-wrapper">
                    <a href="#">
                        <img class="img-fluid w-100" src="{{ asset('images/CV image.png') }}" alt="">
                    </a>
                    <div class="action">
                        <a href="#" class="btn btn-primary py-2 px-3"><i class="fa fa-edit"></i> Choose Template</a>
                    </div>
                </div>
                <h3 class="mt-3 mb-2">Cleansy</h3>
                <p>A two column based expressive CV template</p>
            </div>
        </div>
    </div>
</div>
@endsection