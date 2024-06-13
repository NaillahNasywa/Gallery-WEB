<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>CloudScape</title>
    <meta content="" name="description">
  
    <meta content="" name="keywords">
    <link rel="icon" href="{{ asset('assets-web/img/ilustrasi/logo5.png') }}">
    <link rel="stylesheet" href="{{ asset('assets-web/css/style.css') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets-web/img/ilustrasi/logo5.png') }}">
  
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
  
    <!-- LIGHTBOX -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css"> -->

        <!-- Vendor JS Files -->
    {{-- <script src="{{ asset('assets-web/asset/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets-web/asset/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets-web/asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-web/asset/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets-web/asset/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets-web/asset/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets-web/asset/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('assets-web/asset/vendor/splide/js/splide.js') }}"></script>
    <script src="{{ asset('assets-web/asset/vendor/splide/js/splide.min.js') }}"></script> --}}

    <!-- LIGHTBOX -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.0/dist/index.bundle.min.js"></script>

    <!-- hightchart -->
    {{-- <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script> --}}


    <!-- Template Main JS File -->
    {{-- <script src="{{ asset('assets-web/asset/js/main.js') }}"></script> --}}
  
  </head>

  <header id="header" class="header fixed-top">
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top bg-light" style="font-size: 13px !important;">
      <!-- <div class=" d-flex justify-content-between"> -->
      <div class="w-100 row align-items-center justify-content-between">
        <div class="col-md-9 dinas">
          <div class="social-links">
            <a href="#"><i class="ri-building-3-fill px-2"></i> Digital Art Colletion </a>
          </div>
        </div>
        <div class="col-md-3 d-flex justify-content-end">
          <div class="contact-info">
            <a href="mailto:#"><i class="ri-mail-fill"></i> CloudScape@gmail.com</a> |
            {{-- <a href="#"><i class="ri-phone-fill"></i> 02129402281</a> --}}
          </div>
        </div>
      </div>
  
  
      <!-- </div> -->
    </div>
    <br>
    <br>
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  
      <a href="#" class="logo d-flex align-items-center">
        <img src="{{ asset('assets-web/img/ilustrasi/logocp2.png') }}" alt="">
        <!-- <span>FlexStart</span> -->
      </a>
 
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/"><i class="ri-home-smile-2-fill px-2"
                style="color: #119D94"></i></a></li>
          <li class="dropdown"><a href="/landingpage" class="text-decoration-none"><span>Home</span> 
            {{-- <i class="bi bi-chevron-down"></i> --}}
          </a>
            {{-- <ul>
              <li><a class="nav-link scrollto" href="">Tentang CloudScape</a></li>
            </ul> --}}
          </li>
          {{-- <li class="dropdown"><a href="{{ route('landingpage.about') }}" class="text-decoration-none"><span>About</span> 
           
          </a>
          
          </li> --}}
          <li class="dropdown"><a href="{{ route('landingpage.jelajahi') }}" class="text-decoration-none"><span>Explore</span> 
            
          </a>
          </li>

          <li class="dropdown"><a href="{{ route('login') }}" class="text-decoration-none"><span>LOG IN</span> 
            {{-- <i class="bi bi-chevron-down"></i> --}}
          </a>
          </li>
          <li class="dropdown"><a href="{{ route('User.register') }}" class="text-decoration-none"><span>SIGN UP</span> 
            {{-- <i class="bi bi-chevron-down"></i> --}}
          </a>
          </li>
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