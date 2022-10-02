@extends('layouts.user')

@section('content')
    <div class="container center-form-layout">
    <div class="row justify-content-center align-items-cente mb-5">
        <div class="col-11 col-md-7 col-lg-6 rounded shadow px-4 py-5 border bg-white">
            <h2 class="text-center mb-4">Register</h2>
            <form action="{{ route('register.store') }}" method="post">
                @csrf
                
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
    
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-group">
                            <label for="firstname">Firstname</label>
                            <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Firstname" value="{{ old('firstname') }}" required>
                            @error('firstname')
                                <small class="text-danger fw-normal">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="lastname">Lastname</label>
                            <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Lastname" value="{{ old('lastname') }}" required>
                            @error('lastname')
                                <small class="text-danger fw-normal">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
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
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                            @error('password')
                                <small class="text-danger fw-normal">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
    
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-type Password" required>
                            @error('password_confirmation')
                                <small class="text-danger fw-normal">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <button type="submit" class="btn btn-primary p-3">Register</button>
                    
                    <a class="form-action-link" href="{{ route('login.show') }}"> <small><i class="fa fa-sign-in"></i> Login Here</small></a>
                </div>
    
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection