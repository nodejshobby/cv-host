@extends('layouts.user')


@section('content')
    <div class="container center-form-layout">
        <div class="row justify-content-center align-items-center">
            <div class="col-11 col-md-7 col-lg-6 rounded shadow px-4 py-5 border bg-white">
                <h2 class="text-primary text-center mb-4">Let's know about your past work experiences</h2>
                <p class="text-center mt-4 mb-5">Enter all your past job work experiences with employer.</p>
                <form action="{{ route('history.update', ['history' => $history]) }}" method="post">
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
                                <div class="form-group">
                                    <label for="job_title">Job Title</label>
                                    <input class="form-control" type="text" name="job_title" id="job_title" placeholder="Job Title" value="{{ $history->job_title }}" required>
                                    @error('job_title')
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
                                    <label for="employer">Employer</label>
                                    <input class="form-control" type="text" name="employer" id="employer" placeholder="Employer" value="{{ $history->employer }}" required>
                                    @error('employer')
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
                                    <label for="city">City</label>
                                    <input class="form-control" type="text" name="city" id="city" placeholder="City" value="{{ $history->city }}" required>
                                    @error('city')
                                        <small class="text-danger fw-normal">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>  
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input class="form-control" type="text" name="country" id="country" placeholder="Country" value="{{ $history->country }}" required>
                                    @error('country')
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
                                    <input class="form-control" type="date" name="start_date" id="start_date" placeholder="Start date" value="{{ $history->start_date }}" required>
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
                                    <input class="form-control" type="date" name="end_date" id="end_date" placeholder="End date" value="{{ $history->end_date }}" required>
                                    @error('end_date')
                                        <small class="text-danger fw-normal">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>  
                        </div>
                    </div>


                    <div class="d-flex justify-content-end align-items-center flex-wrap mt-4 ">
                    <button type="submit" class="btn btn-primary p-3">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection