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
        <h2 class="text-center mb-4">Login</h2>
        <form action="{{ url('login') }}" method="post">
            @csrf
            
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
                        <label class="d-flex justify-content-between align-items-center" for="password">
                            <span>Password</span>
                            <a href="#" class="form-action-link"> <small>Forgot Password?</small></a>
                        </label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <button class="btn btn-primary py-2 px-3 py-md-3 px-md-4">Login</button>
                
                <a class="form-action-link" href="{{ url('register') }}"> <small><i class="fa fa-user-plus"></i> Register Here</small></a>
            </div>

            </div>
        </form>
    </div>
</div>



@include('partials.user_script')