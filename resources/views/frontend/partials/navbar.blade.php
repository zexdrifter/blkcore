<nav class="navbar main-nav fixed-top navbar-expand-lg large">
  <div class="container">
    <a class="navbar-brand" href="index.html"><img src="/images/logo-white.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu text-white"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link scrollTo" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollTo" href="/#product">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollTo" href="/#berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollTo" href="/#testimoni">Testimoni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollTo" href="{{ route('frontend.about_us') }}">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link scrollTo" href="{{ route('frontend.cart') }}"><i class="fas fa-shopping-cart"></i></a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link scrollTo" href="{{ route('frontend.login_register') }}"><i class="fas fa-user"></i></a>
        </li> --}}
        <li class="nav-item dropdown">
          {{-- <div class=""> --}}
            <a href="#" class="nav-link dropdown-toggle" id="accountDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
              <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown">
              @if(Auth::check())
              <div class="dropdown-item" href="#">{{ Auth::user()->name }}</div>
              @else 
              <a class="dropdown-item" href="{{ route('frontend.login_register') }}">Login User</a>
              @endif
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/admin">Dashboard Admin</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('frontend.profile') }}">Profil</a>
              <a class="dropdown-item" href="/logout">Logout</a>
            </div>
          {{-- </div> --}}
          </li>
      </ul>
      
    </div>
  </div>
</nav>