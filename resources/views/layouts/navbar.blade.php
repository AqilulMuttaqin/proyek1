<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="{{ url('/') }}">Butak-Panderman</a></h1>
      <nav id="navbar" class="navbar">
          <ul>
              <li><a class="nav-link clickto {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
              <li class="dropdown"><a href="#"><span>Booking Online</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="{{ url('/cek-kuota') }}">Check Kuota</a></li>
                  <li><a href="{{ url('/booking') }}">Booking</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="">Tentang Kami</a></li>
              @auth
              <li class="dropdown"><a href="#"><span>Halo, {{ auth()->user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
              @endauth
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
  </div>
</header>
