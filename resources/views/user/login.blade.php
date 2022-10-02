@extends('layouts.user')

@section('content')
    <div class="container center-form-layout">
        <div class="row justify-content-center align-items-center">
            <div class="col-11 col-md-7 col-lg-6 col-xl-5 rounded shadow px-4 py-5 border bg-white">
                <h2 class="text-center mb-4">Login</h2>
                <form action="{{ route('login.authenticate') }}" method="post">
                    @csrf
        
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    @if (session('info'))
                        <div class="alert alert-info">
                            {{ session('info') }}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
        
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                                @error('email')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
        
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="d-flex justify-content-between align-items-center" for="password">
                                    <span>Password</span>
                                    <a href="#" class="form-action-link"> <small>Forgot Password?</small></a>
                                </label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                                @error('password')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <div class="form-check">
                                <label class="form-check-label" for="remember_me">Remember me</label>
                                <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me">
                            </div>
                        </div>
                    </div>
        
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <button type="submit" class="btn btn-primary p-3">Login</button>
                        
                        <a class="form-action-link" href="{{ route('register.show') }}"> <small><i class="fa fa-user-plus"></i> Register Here</small></a>
                    </div>
        
                    </div>
                </form>
            </div>
            </div>
    </div>
    
@endsection
