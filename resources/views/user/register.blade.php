@include('partials.user_header')
<style>
    html, body {
        height: 100%;
    }

    body {
        background-color: #0101b3 !important;
    }
</style>

<div class="row justify-content-center align-items-center h-100">
    <div class="col-10 col-md-6 col-lg-5 rounded shadow px-4 py-5 border bg-white my-auto">
        <h2 class="text-center mb-4">Register</h2>
        <form action="{{ url('register') }}" method="post">
            @csrf
            
            <div class="row mb-3">
                <div class="col">
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Firstname">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Lastname">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12">
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input class="form-control" type="password" name="confirm_password" id="confirm_password" placeholder="Re-type Password">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <button class="btn btn-primary py-2 px-3 py-md-3 px-md-4">Register</button>
                
                <a class="form-action-link" href="{{ url('login') }}"> <small><i class="fa fa-sign-in"></i> Login Here</small></a>
            </div>

            </div>
        </form>
    </div>
</div>

@include('partials.user_script')