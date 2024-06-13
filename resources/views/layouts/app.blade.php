<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>CloudScape</title>
    <meta content="" name="description">
  
    <meta content="" name="keywords">
    <link rel="icon" href="{{ asset('assets-web/img/ilustrasi/logo3.png') }}">
    <link rel="stylesheet" href="{{ asset('assets-web/css/auth.css') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets-web/img/ilustrasi/logo3.png') }}">
    
  
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
  
  
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets-web/asset/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-web/asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-web/asset/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-web/asset/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-web/asset/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-web/asset/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  
    <!-- icon -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.0/dist/index.bundle.min.js"></script>
  </head>

<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  
      <a href="#" class="logo d-flex align-items-center">
        <img src="{{ asset('assets-web/img/ilustrasi/logocp2.png') }}" alt="">
        <!-- <span>FlexStart</span> -->
      </a>
 
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/"><i class="ri-home-smile-2-fill px-2"
                style="color: #119D94"></i></a></li>

          <li class="dropdown"><a href="{{ route('fotos.index') }}" class="text-decoration-none"><span>Home</span> <i class="bi bi-chevron-down"></i></a>
            {{-- <ul>
              <li><a class="nav-link scrollto" href="">Tentang CloudScape</a></li>
            </ul> --}}
          </li>

          {{-- <li class="dropdown"><a href="{{ route('albums.index') }}" class="text-decoration-none"><span>Album</span> <i class="bi bi-chevron-down"></i></a> --}}
            {{-- <ul>
              <li><a class="nav-link scrollto" href="">Tentang CloudScape</a></li>
            </ul> --}}
          </li>

          {{-- <li class="dropdown"><a href="{{ route('fotos.index') }}" class="text-decoration-none"><span>Explore</span> 
          </a>
          </li> --}}
          <li class="dropdown"><a href="" class="text-decoration-none"><span>Export</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="{{ route('landingpage.dataTable') }}">Photo</a></li>
              <li><a class="nav-link scrollto" href="{{ route('landingpage.export') }}">Album</a></li>
            </ul>
          </li>
        
          <li class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                {{-- @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif --}}

                {{-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif --}}
            @else
              
              <li class="dropdown"><a href="" class="text-decoration-none"><span> {{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a class="nav-link scrollto" href="{{ route('profile.index') }}">Profile</a></li>
                  <li><a class="nav-link scrollto" href="{{ route('fotos.create') }}">Create Photo</a></li>
                  <li><a class="nav-link scrollto" href="{{ route('albums.index') }}">Create Album</a></li>
                  <li><a class="nav-link scrollto" href="{{ route('report.index') }}">Report Data</a></li>
                </ul>
              </li>

            @endguest
              </li>

        <li class="dropdown"><a href="{{ route('logout') }}" class="text-decoration-none"><span>Logout</span> <i class="bi bi-chevron-down"></i></a>
        </li>

          {{-- <li class="dropdown"><a href="{{ route('login') }}" class="text-decoration-none"><span>login</span> <i class="bi bi-chevron-down"></i></a>
          </li>
          <li class="dropdown"><a href="{{ route('User.register') }}" class="text-decoration-none"><span>Register</span> <i class="bi bi-chevron-down"></i></a>
          </li> --}}
          <!-- Authentication Links -->
          
      </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
  
    </div>
  </header>

  @yield('content')

{{-- 
  <footer class="card2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-3 mb-md-0">
                <div class="card2-info">
                    <img src="{{ asset('assets-web/img/ilustrasi/logo.png') }}" width= "250px" height="50px" alt="">
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <div class="social-icons">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer> --}}


    <!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-5 footer-info">
            {{-- <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{ asset('assets-web/img/ilustrasi/logo.png') }}" alt="">
            </a> --}}
            {{-- <h4>tentang CloudScape</h4>
            <p>tujuan CloudScape</p> --}}

            {{-- <div class="social-links col-md-6 d-flex justify-content-end">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div> --}}

            {{-- <div class="col-md-6 d-flex justify-content-end">
                <div class="social-icons">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div> --}}
          </div>
  
          {{-- <div class="col-lg-4 col-md-4 footer-links">
            <h4>Data Pengunjung Website</h4>
            <p>Published : Thursday, 13-01-2022</p>
            <hr>
            <div class="visitor d-flex">
              <div class="today" style="padding-right: 10px">
                <h4>Hari Ini : <span data-toggle="counter-up" class="span">850</span></h4>
              </div>
              <div class="weekday" style="padding-right: 10px">
                <h4>Minggu Ini : <span data-toggle="counter-up" class="span">1,150</span></h4>
              </div>
            </div>
            <div class="visitor d-flex">
              <div class="month" style="padding-right: 10px">
                <h4>Bulan Ini : <span data-toggle="counter-up" class="span">2,950</span></h4>
              </div>
              <div class="year" style="padding-right: 10px">
                <h4>Tahun Ini : <span data-toggle="counter-up" class="span">11,850</span></h4>
              </div>
            </div>
          </div> --}}
  
  
  
        </div>
      </div>
    </div>
  
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CloudScape</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      {{-- </div>
    </div> --}}
  </footer><!-- End Footer -->
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
