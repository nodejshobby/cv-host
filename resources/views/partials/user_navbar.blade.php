@if (Route::is('home.show'))
  @if(session('success'))
  <div class="alert alert-success text-center rounded-0 m-0 fixed-top">
    {{ session('success') }}
  </div>
  @endif
@endif

<nav class="navbar navbar-expand-lg bg-light px-1 px-md-3 bg-white shadow-sm @if (!session('success') || !Route::is('home.show'))
fixed-top
@endif" id="navbar-scroll">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home.show') }}">CVHost</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @if (!Route::is('home.show') && auth()->check())
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('home.show') }}">Dashboard</a>
            </li>
          @endif

          @if (Route::is('home.show'))
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#hero">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#templates">Templates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#reviews">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faq-and-contact">Contact</a>
          </li>
          @endif

          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu shadow">
              <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a></li>
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#cvModal" id="mycv-link">My CVs</a></li>
              <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#paymentModal">Transactions</a></li>
              <li><a class="dropdown-item" href="{{ route('password.index') }}">Change Password</a></li>
            </ul>
          </li>
          @endauth
          
        </ul>
        <div class="d-flex align-items-center mb-3 mb-lg-0">
          @guest
            <a href="{{ route('login.show') }}" class="nav-link me-4">Log In</a>
            <a href="{{ route('register.show') }}" class="btn btn-primary p-3">Register</a>
          @endguest

          @auth
            <a class="nav-link me-4" href="{{ route('login.logout') }}">
              Logout
            </a>
            @if(Route::is('home.show'))
            <a href="{{ route('template.index') }}" class="btn btn-primary p-3">Create CV</a>
            @endif
          @endauth
        </div>
      </div>
    </div>
  </nav>
  
  <!-- CV List Modal -->
  <div class="modal fade" id="cvModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">CV List</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" >
          <div class="table-responsive">
            <table class="table table-striped table-bordered" id="cvlist-table">
              <thead>
                <tr>
                  <th scope="col">Title</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                @if (auth()->user())
                @foreach ( auth()->user()->cvs()->get() as $cv )
                <tr>
                  <td>{{ $cv->userDetail->profession }}</td>
                  <td>
                    <a href="{{ route('cv.index', ['cv'=> $cv]) }}" class="btn btn-primary btn-sm me-2" data-bs-toggle="tooltip" title="Edit CV"><i class="fa fa-edit"></i></a>
                    <form class="d-inline-flex" action="{{ route('cv.delete', ['cv' => $cv]) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" title="Delete CV" onclick="return confirm('Are you sure you want to delete')"><i class="fa fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
                @endif
                
              </tbody>
            </table>
          </div>
         
        </div>
      </div>
    </div>
  </div>

  <!-- Payment Modal -->
  <div class="modal modal-lg fade" id="paymentModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Transaction List</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered" id="payment-table">
              <thead>
                <tr>
                  <th scope="col">Scope</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Status</th> 
                  <th scope="col">Date</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>Template</td>
                  <td>&#8358;3,000</td>
                  <td>Success</td>
                  <td style="white-space: nowrap;">2021-09-25 19:25</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>