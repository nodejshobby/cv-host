@extends('layouts.user')


@section('content')
    <div class="container center-form-layout">
        <div class="row justify-content-center align-items-center">
            <div class="col-11 col-md-7 col-lg-6 rounded shadow px-4 py-5 border bg-white">
                <h2 class="text-primary text-center mb-4">Let's know about you</h2>
                <p class="text-center mt-4 mb-5">Enter your details till the last information about you so employer can know basic information about you.</p>
                <form action="{{ route('user_detail.update', $userDetail) }}" method="post">
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
                        <div class="col">
                            <div class="form-group">
                                <label for="firstname">Firstname</label>
                                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Firstname" value="{{ $userDetail->firstname }}" required>
                                @error('firstname')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="lastname">Lastname</label>
                                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Lastname" value="{{$userDetail->lastname }}" required>
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
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email" value="{{ $userDetail->email }}">
                                @error('email')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                   
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="city">City</label>
                            <input class="form-control" type="text" name="city" id="city" placeholder="City" value="{{ $userDetail->city }}" required>
                                @error('city')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input class="form-control" type="text" name="country" id="country" placeholder="Country" value="{{ $userDetail->country }}" required>
                                @error('country')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <label for="profession">Profession</label>
                                <input class="form-control" type="text" name="profession" id="profession" placeholder="Profession" value="{{ $userDetail->profession }}">
                                @error('profession')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="postal_code">Postal Code</label>
                                <input class="form-control" type="text" name="postal_code" id="postal_code" placeholder="postal code" value="{{ $userDetail->postal_code }}" required>
                                @error('postal_code')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center flex-wrap mt-4 ">
                    <button type="submit" class="btn btn-primary p-3">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection