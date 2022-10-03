@extends('layouts.user')


@section('content')
    <div class="container center-form-layout">
        <div class="row justify-content-center align-items-center">
            <div class="col-11 col-md-7 col-lg-6 rounded shadow px-4 py-5 border bg-white">
                <h2 class="text-primary text-center mb-4">Let's know about your skills</h2>
                <p class="text-center mt-4 mb-5">Put down your skill and your proficiency level</p>
                <form action="{{ route('skill.create', ['cv'=> $cv]) }}" method="post">
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
                                <label for="skill_name">Skill</label>
                                <input type="text" class="form-control" name="skill_name" id="skill_name" placeholder="Skill Name"  value="{{ old('skill_name') }}" required>
                                @error('skill_name')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="skill_level">Skill Level</label>
                                <select class="form-select form-select-lg" name="skill_level" id="skill_level" placeholder="Skil Level" required>
                                    <option value="good" @if (old('skill_level') == "good")
                                        selected
                                    @endif>Good</option>
                                    <option value="very good" @if (old('skill_level') == "very good")
                                    selected
                                @endif>Very Good</option>
                                    <option value="excellent" @if (old('skill_level') == "excellent")
                                    selected
                                @endif>Excellent</option>
                                </select>
                                @error('skill_level')
                                    <small class="text-danger fw-normal">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end align-items-center flex-wrap mt-4">
                    <button type="submit" class="btn btn-primary p-3">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection