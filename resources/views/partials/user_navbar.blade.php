<nav class="navbar navbar-expand-lg bg-light px-1 px-md-3 bg-white shadow-sm fixed-top" id="navbar-scroll">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">CVHost</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
        </ul>
        <div class="d-flex align-items-center mb-3 mb-md-0">
          <a href="{{ url('login') }}" class="nav-link me-4">Log In</a>
          <a href="{{ url('register') }}" class="btn btn-primary py-2 px-3">Register</a>
        </div>
      </div>
    </div>
  </nav>