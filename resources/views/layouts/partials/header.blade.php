<nav class="top-nav">
    <div class="container">
      <p>
        <i class="fa fa-envelope me-3"></i>
        <span>info@foodpoint.com</span>
      </p>
      <p>
        <i class="fa fa-phone me-3"></i>
        <span>(92) 2567-1234</span>
      </p>
    </div>
  </nav>
  <header>
    <div class="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Food Point</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-stream navbar-toggler-icon"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{route('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('menu')}}">Menu</a>
              </li>
              <!----<li class="nav-item">
              <a class="nav-link" href="login.html">Login</a>
              </li>--->
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('blog')}}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('reservation')}}">Reservation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact us</a>
              </li>
            </ul>
            <div class="right">
              <ul>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('login')}}"><button id="submit" class="Btn">login</button></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>