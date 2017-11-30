{{-- <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand main-title" href="{{ route('home') }}">
      <image src="images/LogoCamiSiO2.png" alt="Logo" id="LogoImg">
      </a>
    </div>

    <ul class="nav navbar-nav">
      <li class="navbar-brand dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="ArtistasDM"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Artists<span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="ArtistasDM">
          <a class="dropdown-item" href="#">More Rated</a>
          <a class="dropdown-item" href="#">Contact Them</a>
          <a class="dropdown-item" href="#">Coming Soon</a>
        </div>
      </li>

      <li class="navbar-brand dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="ArtistasDM"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Designs<span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="ArtistasDM">
          <a class="dropdown-item" href="#">Top Designs</a>
          <a class="dropdown-item" href="{{ route('designer') }}">Create Your T-Shirt</a>
          <a class="dropdown-item" href="#">Coming Soon</a>
        </div>
      </li>

      <li class="navbar-brand"><a href="#">Prints</a></li>
    </ul>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <a class="button my-2 my-sm-0 navbar-right"  href="{{ route('login-get') }}" role="button" id="SignInBtn"><span>Sign In</span></a>
      <a class="navbar-brand navbar-right" href="{{ route('register-get') }}">Sign Up</a>
      <a class="navbar-brand navbar-right" href="#">About Us</a>

      <a class="navbar-brand navbar-right" href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a>

    </div>

    
  </div>
</nav> --}}

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">
        <image src="images/LogoCamiSiO2.png" alt="Logo" id="LogoImg">
      </a> 
    </div>

    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="ArtistasDM"> Artists<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">More Rated</a></li>
          <li><a href="#">Contact Them</a></li>
          <li><a href="#">Coming Soon</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="ArtistasDM"> Designs<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Top Designs</a></li>
          <li><a href="{{ route('designer') }}">Create Your T-Shirt</a></li>
          <li><a href="#">Coming Soon</a></li>
        </ul>
      </li>
    </ul>

    @if(Auth::check()) <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <a class="button my-2 my-sm-0 navbar-right"  href="#" role="button" id="SignInBtn"><i class="fa fa-user"></i> <span> {{ Auth::user()->name . ' ' . Auth::user()->last_name }}</span></a>
      <a class="navbar-brand navbar-right" href="{{ route('logout') }}">Logout</a>
      <a class="navbar-brand navbar-right" href="#">About Us</a>

      <a class="navbar-brand navbar-right" href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a>

    </div>
    @else <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <a class="button my-2 my-sm-0 navbar-right"  href="{{ route('login-get') }}" role="button" id="SignInBtn"><span>Sign In</span></a>
      <a class="navbar-brand navbar-right" href="{{ route('register-get') }}">Sign Up</a>
      <a class="navbar-brand navbar-right" href="#">About Us</a>

      <a class="navbar-brand navbar-right" href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a>

    </div>
    @endif

  </div>
</nav>

