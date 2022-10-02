@extends('layouts.user')


@section('content')
    <div class="container center-form-layout">
        <div class="row justify-content-center align-items-center">
            <div class="col-11 col-md-7 col-lg-6 rounded shadow px-4 py-5 border bg-white">
                <h2 class="text-primary text-center mb-4">Let's know Educational background</h2>
                <p class="text-center mt-4 mb-5">Enter all educational background details you have at hand so employer.</p>
                <form action="{{ route('education.create', ['cv' => $cv]) }}" method="post">
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
                        <div class="col-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="school_location">School Name</label>
                                    <input class="form-control" type="text" name="school_name" id="school_name" placeholder="School name" value="{{ old('school_name') }}" required>
                                    @error('school_name')
                                        <small class="text-danger fw-normal">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="school_location">School Location</label>
                                    <input class="form-control" type="text" name="school_location" id="school_location" placeholder="School location" value="{{ old('school_location') }}" required>
                                    @error('school_location')
                                        <small class="text-danger fw-normal">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>  
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="degree">Degree</label>
                                    <input class="form-control" type="text" name="degree" id="degree" placeholder="Degree" value="{{ old('degree') }}" required>
                                    @error('degree')
                                        <small class="text-danger fw-normal">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>  
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="field_of_study">Field of study</label>
                                    <input class="form-control" type="text" name="field_of_study" id="field_of_study" placeholder="Field of study" value="{{ old('field_of_study') }}" required>
                                    @error('field_of_study')
                                        <small class="text-danger fw-normal">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>  
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="start_date">Start date</label>
                                    <input class="form-control" type="date" name="start_date" id="start_date" placeholder="Start date" value="{{ old('start_date') }}" required>
                                    @error('start_date')
                                        <small class="text-danger fw-normal">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>  
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="end_date">End date</label>
                                    <input class="form-control" type="date" name="end_date" id="end_date" placeholder="End date" value="{{ old('end_date') }}" required>
                                    @error('end_date')
                                        <small class="text-danger fw-normal">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>  
                        </div>
                    </div>


                    <div class="d-flex justify-content-end align-items-center flex-wrap mt-4 ">
                    <button type="submit" class="btn btn-primary p-3">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection