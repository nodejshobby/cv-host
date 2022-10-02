@extends('layouts.user')



@section('content')
<div class="container mt-4 mb-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-11 col-md-10 col-lg-8 d-flex justify-content-center alig-items-center flex-wrap mb-3 bg-light rounded pt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#userDetail"><i class="fa fa-user"></i> User Details</a></li>
                  <li class="breadcrumb-item" aria-current="page"><a href="#contactDetail"><i class="fa fa-address-book"></i> Contact Details</a></li>
                  <li class="breadcrumb-item" aria-current="page"><a href="#summary"><i class="fa fa-info"></i> Summary</a></li>
                  <li class="breadcrumb-item" aria-current="page"><a href="#education"><i class="fa fa-certificate"></i> Education</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="#work-history"><i class="fa fa-briefcase"></i> Work History</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="#skill"><i class="fa fa-cogs"></i> Skills</a></li>
                </ol>
              </nav>
        </div>
        <div class="col-11 col-md-10 col-lg-8">
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
        </div>
    </div>

    <div class="row justify-content-center align-items-center mb-4">
        <div class="col-11 col-md-10 col-lg-8 d-flex justify-content-between align-items-center">
            <a href="" class="btn btn-light"><i class="fa fa-eye"></i> Preview</a>
            <a href="" class="btn btn-primary"><i class="fa fa-download"></i> Download</a>
        </div>
    </div>

    <div class="row justify-content-center align-items-center" id="cv-view">
        <div class="col-11 col-md-10 col-lg-8 bg-light p-3 p-md-4 rounded">
            {{-- User Detail --}}
            <div class="mb-4" id="userDetail" class="userDetail">
                <h3 class="text-primary"><i class="fa fa-user"></i> User Details</h3>
                <div class="row mt-3 bg-white px-2 py-3 px-md-3 py-lg-4 rounded">
                <div class="col">
                    <h5>Firstname</h5>
                    <p>{{ $cv->userDetail->firstname }}</p>
                </div>
                <div class="col">
                    <h5>Lastname</h5>
                    <p>{{ $cv->userDetail->lastname }}</p>
                </div>
                <div class="col">
                    <h5>Email</h5>
                    <p>{{ $cv->userDetail->email }}</p>
                </div>
                <div class="col">
                    <h5>Country</h5>
                    <p>{{ $cv->userDetail->country }}</p>
                </div>
                <div class="col">
                    <h5>City</h5>
                    <p>{{ $cv->userDetail->city }}</p>
                </div>
                <div class="col">
                    <h5>Postal Code</h5>
                    <p>{{ $cv->userDetail->postal_code }}</p>
                </div>
                <div class="col">
                    <h5>Profession</h5>
                    <p>{{ $cv->userDetail->profession }}</p>
                </div>
                
                <a href="{{ route('user_detail.edit', ['userDetail'=> $cv->userDetail ]) }}" class="text-primary"> <i class="fa fa-edit"></i> Edit User Details</a>
                </div>
            </div>

            {{-- Contact Detail --}}
            <div class="mb-4" id="contactDetail" class="contactDetail">
                <h3 class="text-primary"><i class="fa fa-address-book"></i> Contact Details</h3>
                @if ($cv->contactDetail)
                <div class="row mt-3 bg-white px-2 py-3 px-md-3 py-lg-4 rounded">
                    <div class="col">
                        <h5>Phone number</h5>
                        <p>{{ $cv->contactDetail->phone_number }}</p>
                    </div>
                    <div class="col">
                        <h5>Linkedin Page</h5>
                        <p>{{ ($cv->contactDetail->linkedin_page) ? $cv->contactDetail->linkedin_page : 'Empty' }}</p>
                    </div>
                    <div class="col">
                        <h5>Twitter Page</h5>
                        <p>{{ ($cv->contactDetail->twitter_page) ? $cv->contactDetail->twitter_page : 'Empty' }}</p>
                    </div>
                    <div class="col">
                        <h5>Website</h5>
                        <p>{{ ($cv->contactDetail->website) ? $cv->contactDetail->website : 'Empty' }}</p>
                    </div>

        
                    <a href="{{ route('contact_detail.edit', ['contactDetail'=> $cv->contactDetail ]) }}" class="text-primary"> <i class="fa fa-edit"></i> Edit Contact Details</a>
                </div>
                @else
                <div class="row">
                    <a href="{{ route('contact_detail.create',['cv'=> $cv ]) }}" class="text-primary"><i class="fa fa-plus"></i> Add Contact Details</a>
                </div>
                @endif
            </div>
            
            {{-- Summary --}}
            <div class="mb-4" id="summary" class="summary">
                <h3 class="text-primary"><i class="fa fa-info"></i> Summary</h3>
                @if ($cv->Summary)
                <div class="row mt-3 bg-white px-2 py-3 px-md-3 py-lg-4 rounded">
                    <p>{{ $cv->Summary->description }}</p>
    
                    <a href="{{ route('summary.edit', ['summary'=> $cv->Summary ]) }}" class="text-primary"> <i class="fa fa-edit"></i> Edit Summary</a>
                </div>
                @else
                <div class="row">
                    <a href="{{ route('summary.create',['cv'=> $cv ]) }}" class="text-primary"><i class="fa fa-plus"></i> Add Summary</a>
                </div>
                @endif
            </div>

            {{-- Education --}}
            <div class="mb-4" id="education" class="education">
                <h3 class="text-primary"><i class="fa fa-certificate"></i> Education</h3>
                @if ($cv->Education()->get()->count())
                <div class="row mt-3 g-3">
                    
                    @foreach ($cv->Education as $education )
                        <div class="col-12">
                            <div class="bg-white rounded p-3" id="education">
                                <p class="mb-1"><i class="fa fa-university"></i> <b>{{ $education->school_name }}</b> - {{ $education->school_location }}</p>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <small><i class="fa fa-graduation-cap"></i> <b>{{ $education->field_of_study }}</b> [{{ $education->degree }}]</small>
                                <small><i class="fa fa-calendar-alt"></i>  {{ $education->start_date }} <b> to </b> {{ $education->end_date }}</small>
                            </div>
                            <div class="action my-2">
                                <a href="{{ route('education.edit', ['education'=> $education]) }}" class="btn btn-sm btn-primary me-2"><i class="fa fa-edit" data-bs-toggle="tooltip" title="Edit Education"></i> Edit</a>

                                <form action="{{ route('education.delete', ['education'=> $education]) }}" class="d-inline-flex" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Delete Education" onclick="return confirm('Are you sure you want to delete')"><i class="fa fa-trash"></i> Delete</a>
                                </form>
                                
                            </div>
                            </div>
                        </div>
                    @endforeach

                    <a href="{{ route('education.create', ['cv'=> $cv ]) }}" class="text-primary"> <i class="fa fa-plus"></i> Add another Education</a>
                </div>
                @else
                <div class="row">
                    <a href="{{ route('education.create',['cv'=> $cv ]) }}" class="text-primary"><i class="fa fa-plus"></i> Add Education<a>
                </div>
                @endif
            </div>

            {{-- Work History --}}
            <div class="mb-4" id="work-history" class="work-history">
                <h3 class="text-primary"><i class="fa fa-briefcase"></i> Work History</h3>
                @if ($cv->WorkHistory()->get()->count())
                <div class="row mt-3 g-3">
                    
                    @foreach ($cv->WorkHistory as $history )
                        <div class="col-12">
                            <div class="bg-white rounded p-3" id="education">
                                <p class="mb-1"><i class="fa fa-university"></i> <b>{{ $history->job_title }}</b> - {{ $history->employer }}</p>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <small><i class="fa fa-graduation-cap"></i> <b>{{ $history->country }}</b> [{{ $history->city }}]</small>
                                <small><i class="fa fa-calendar-alt"></i>  {{ $history->start_date }} <b> to </b> {{ $history->end_date }}</small>
                            </div>
                            <div class="action my-2">
                                <a href="{{ route('history.edit', ['history'=> $history]) }}" class="btn btn-sm btn-primary me-2"><i class="fa fa-edit" data-bs-toggle="tooltip" title="Edit History"></i> Edit</a>

                                <form action="{{ route('history.delete', ['history'=> $history]) }}" class="d-inline-flex" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Delete History" onclick="return confirm('Are you sure you want to delete')"><i class="fa fa-trash"></i> Delete</a>
                                </form>
                                
                            </div>
                            </div>
                        </div>
                    @endforeach

                    <a href="{{ route('history.create', ['cv'=> $cv ]) }}" class="text-primary"> <i class="fa fa-plus"></i> Add another Work History</a>
                </div>
                @else
                <div class="row">
                    <a href="{{ route('history.create',['cv'=> $cv ]) }}" class="text-primary"><i class="fa fa-plus"></i> Add Work History<a>
                </div>
                @endif
            </div>

            <div class="mb-4" id="skill" class="skill">
                <h3 class="text-primary"><i class="fa fa-cogs"></i> Skills</h3>
                @if ($cv->Skill()->get()->count())
                <div class="row mt-3 bg-white px-2 py-3 px-md-3 py-lg-4 rounded">
                    <p>{{ $cv->Summary->description }}</p>
    
                    <a href="{{ route('summary.edit', ['summary'=> $cv->Skill]) }}" class="text-primary"> <i class="fa fa-edit"></i> Edit Summary</a>
                </div>
                @else
                <div class="row">
                    <a href="{{ route('summary.create',['cv'=> $cv ]) }}" class="text-primary"><i class="fa fa-plus"></i> Add Skill</a>
                </div>
                @endif
            </div>
            
        </div>
    </div>
</div>
@endsection