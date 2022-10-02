@extends('layouts.user')


@section('content')
    <div class="container center-form-layout">
        <div class="row justify-content-center align-items-center">
            <div class="col-11 col-md-7 col-lg-6 rounded shadow px-4 py-5 border bg-white">
                <h2 class="text-primary text-center mb-4">Your contact details</h2>
                <p class="text-center mt-4 mb-5">Enter all contact details you have presently so employer can contact anytime.</p>
                <form action="{{ route('contact_detail.create', ['cv' => $cv]) }}" method="post">
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
                                <label for="phone_number">Phone number</label>
                                <input class="form-control" type="text" name="phone_number" id="phone_number" placeholder="Phone number" value="{{ old('phone_number') }}" required>
                                @error('phone_number')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input class="form-control" type="text" name="website" id="website" placeholder="Website" value="{{ old('website') }}">
                                @error('website')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="linkedin">Linkedin</label>
                                <input class="form-control" type="linkedin" name="linkedin" id="linkedin" placeholder="Linkedin" value="{{ old('linkedin') }}">
                                @error('linkedin')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input class="form-control" type="twitter" name="twitter" id="twitter" placeholder="Twitter" value="{{ old('twitter') }}">
                                @error('twitter')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                   
                  
                    <div class="d-flex justify-content-end align-items-center flex-wrap mt-4">
                        <button type="submit" class="btn btn-primary p-3 ms-auto">Save</button>
                    </div>
        
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection