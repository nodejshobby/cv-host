@extends('layouts.user')


@section('content')
    <div class="container center-form-layout">
        <div class="row justify-content-center align-items-center">
            <div class="col-11 col-md-7 col-lg-6 rounded shadow px-4 py-5 border bg-white">
                <h2 class="text-center mb-4">Profile Details</h2>
                <form action="{{ route('profile.update') }}" method="post">
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
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email" value="{{ $user->email }}" disabled>
                                @error('email')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Firstname" value="{{ $user->firstname }}" required>
                                @error('firstname')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Lastname" value="{{ $user->lastname }}" required>
                                @error('lastname')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary p-3">Update Profile</button>
        
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection