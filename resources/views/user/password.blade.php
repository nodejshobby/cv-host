@extends('layouts.user')

@section('content')

<div class="container center-form-layout">
    <div class="row justify-content-center align-items-cente mb-5">
        <div class="col-11 col-md-7 col-lg-6 rounded shadow px-4 py-5 border bg-white">
            <h2 class="text-center mb-4">Update Password</h2>
            <form action="{{ route('password.update') }}" method="post">
                @csrf
                @method('PUT')
                
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
                    <div class="col-12">
                        <div class="form-group">
                            <label for="password">Current Password</label>
                            <input class="form-control" type="password" name="current_password" id="current_password" placeholder="Current Password" required>
                            @error('current_password')
                                <small class="text-danger fw-normal">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="New Password" required>
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
                
                <button type="submit" class="btn btn-primary p-3">Update Password</button>
    
                </div>
            </form>
        </div>
    </div>
</div>

@endsection