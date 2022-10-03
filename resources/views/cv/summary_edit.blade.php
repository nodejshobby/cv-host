@extends('layouts.user')


@section('content')
    <div class="container center-form-layout">
        <div class="row justify-content-center align-items-center">
            <div class="col-11 col-md-7 col-lg-6 rounded shadow px-4 py-5 border bg-white">
                <h2 class="text-primary text-center mb-4">Let's know your background</h2>
                <p class="text-center mt-4 mb-5">Put down some little background about you</p>
                <form action="{{ route('summary.update', ['summary'=> $summary]) }}" method="post">
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
                                <label for="summary">Summary</label>
                                <textarea class="form-control" name="summary" id="summary" cols="20" rows="5" placeholder="Enter your bio, description or summary" required>{{ $summary->description }}</textarea>
                                @error('summary')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center flex-wrap mt-4">
                    <button type="submit" class="btn btn-primary p-3">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection