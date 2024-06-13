@extends('layout.lp')

@section('content')

<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 d-flex flex-column justify-content-center">
        <h3 data-aos="" class="text-inline"> The sky and clouds often ignite imagination and inspiration
         <h4> This gallery can serve as a space for visitors to contemplate and be inspired<br> <p>by the beauty of the sky, 
          as well as to create their own artworks.</p></h4>
         {{-- <form class="form-group w-100 mb-3" method="get" action="">
              <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
              <button type="submit" class="btn btn-primary mb-1">Cari</button>
      </form> --}}

        {{-- <div class="row mt-4 border-top pt-3"> --}}
          <div class="col-4 d-flex">
            {{-- <img src="{{ asset('assets-web/img/icon/kalendar 1 (3).png') }}" class="d-block m-auto"
              style="width: 25%"> --}}
            {{-- <div class="info">
              <h4>20 Juli</h4>
              <small>2022</small>
            </div> --}}
          </div>
          {{-- <div class="col-4 d-flex">
            <img src="{{ asset('assets-web/img/icon/suhu-sekarang 1.png') }}" class="d-block m-auto"
              style="width: 25%">
            <div class="info">
              <h4>23 °</h4>
              <small>Hari Ini</small>
            </div>
          </div> --}}
          {{-- <div class="col-4 d-flex">
            <img src="{{ asset('assets-web/img/icon/suhu-besok 1 (1).png') }}" class="d-block m-auto"
              style="width: 25%">
            <div class="info">
              <h4>30 °</h4>
              <small>Besok</small>
            </div>
          </div> --}}
        </div>
      </div>
      {{-- <div class="col-lg-6 hero-img">
        <img src="{{ asset('assets-web/img/ilustrasi/art1.png') }}" class="d-block m-auto" alt="">
      </div> --}}
    </div>
  </div>

</section>

<section id="values" class="values">
  <header class="section-header text-center">
    <h2>information</h2>
    <p>Browse Through our categories here</p>
  </header>
<div class="container">
  <div class="row">
      <div class="col-md-4 mb-3">
          <div class="card">
              <div class="row no-gutters">
                  <div class="col-md-4">
                      <img src="{{ asset('assets-web/img/ilustrasi/awan.png') }}" class="card-img" alt="Placeholder Image" style="margin-top: 20px; margin-left:10px;">
                  </div>
                  <div class="col-md-8 mt-3">
                      <div class="card-body">
                          <p class="card-title">ILLUSTRATION</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                      </div>
                  </div>
              </div>
          </div>
      </div>

       <div class="col-md-4 mb-3">
          <div class="card">
              <div class="row no-gutters">
                  <div class="col-md-4">
                      <img src="{{ asset('assets-web/img/ilustrasi/awan.png') }}" class="card-img" alt="Placeholder Image" style="margin-top: 20px; margin-left:10px;">
                  </div>
                  <div class="col-md-8 mt-3">
                      <div class="card-body">
                          <p class="card-title">FINE ART</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      <div class="col-md-4 mb-3">
          <div class="card">
              <div class="row no-gutters">
                  <div class="col-md-4">
                      <img src="{{ asset('assets-web/img/ilustrasi/awan.png') }}" class="card-img" alt="Placeholder Image" style="margin-top: 20px; margin-left:10px;">
                  </div>
                  <div class="col-md-8 mt-3">
                      <div class="card-body">
                          <p class="card-title">BEAUTIFUL SCENARY</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-md-4 mb-3">
          <div class="card">
              <div class="row no-gutters">
                  <div class="col-md-4">
                      <img src="{{ asset('assets-web/img/ilustrasi/awan.png') }}" class="card-img" alt="Placeholder Image" style="margin-top: 20px; margin-left:10px;" style="margin-top: 20px; margin-left:10px;">
                  </div>
                  <div class="col-md-8 mt-3">
                      <div class="card-body">
                          <p class="card-title">MUSIC ART</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                      </div>
                  </div>
              </div>
          </div>
      </div>
   
      <div class="col-md-4 mb-3">
          <div class="card">
              <div class="row no-gutters">
                  <div class="col-md-4">
                      <img src="{{ asset('assets-web/img/ilustrasi/awan.png') }}" class="card-img" alt="Placeholder Image" style="margin-top: 20px; margin-left:10px;">
                  </div>
                  <div class="col-md-8 mt-3">
                      <div class="card-body">
                          <p class="card-title">PAINTINGS</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                      </div>
                  </div>
              </div>
          </div>
      </div>

     <div class="col-md-4 mb-3">
          <div class="card">
              <div class="row no-gutters">
                  <div class="col-md-4">
                      <img src="{{ asset('assets-web/img/ilustrasi/awan.png') }}" class="card-img" alt="Placeholder Image" style="margin-top: 20px; margin-left:10px;">
                  </div>
                  <div class="col-md-8 mt-3">
                      <div class="card-body">
                          <p class="card-title">DIGITAL ART</p>
                          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </div>
</div>
</section>

<section id="portfolio" class="portfolio">

  <div class="container" data-aos="">

    <header class="section-header text-center">
      <h2>information</h2>
      <p>Explore Some  Trend Colletion</p>
    </header>

    <div class="row gy-4 portfolio-container" data-aos="" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item foto">
        <div class="portfolio-wrap rounded-sm">
          <div class="img">
            <img src="{{ asset('assets-web/img/ilustrasi/img1.png') }}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <!-- <h4>Fot</h4>
          <p>App</p> -->
            <div class="portfolio-links">
              <a href="{{ asset('assets-web/img/ilustrasi/img1.png') }}" data-gallery="portfolioGallery"
                class="portfokio-lightbox" title="title"><i class="bi bi-plus"></i></a>
              <a href="{{ route('landingpage.detail_foto') }}" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item foto">
        <div class="portfolio-wrap">
          <div class="img">
            <img src="{{ asset('assets-web/img/ilustrasi/img2.png') }}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <!-- <h4>App 2</h4>
          <p>App</p> -->
            <div class="portfolio-links">
              <a href="{{ asset('assets-web/img/ilustrasi/img2.png') }}" data-gallery="portfolioGallery"
                class="portfokio-lightbox" title="title"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item foto">
        <div class="portfolio-wrap">
          <div class="img">
            <img src="{{ asset('assets-web/img/ilustrasi/img3.png') }}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <!-- <h4>App 3</h4>
          <p>App</p> -->
            <div class="portfolio-links">
              <a href="{{ asset('assets-web/img/ilustrasi/img3.png') }}" data-gallery="portfolioGallery"
                class="portfokio-lightbox" title="title"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item video">
        <div class="portfolio-wrap">
          <div class="img">
            <img src="{{ asset('assets-web/img/ilustrasi/img.png') }}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <!-- <h4>Card 2</h4>
          <p>Card</p> -->
            <div class="portfolio-links">
              <a href="{{ asset('assets-web/img/ilustrasi/img.png') }}" data-gallery="portfolioGallery"
                class="portfokio-lightbox" title="title"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item video">
        <div class="portfolio-wrap">
          <div class="img">
            <img src="{{ asset('assets-web/img/ilustrasi/10.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <!-- <h4>Card 1</h4>
          <p>Card</p> -->
            <div class="portfolio-links">
              <a href="{{ asset('assets-web/img/ilustrasi/10.jpg') }}" data-gallery="portfolioGallery"
                class="portfokio-lightbox" title="title"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item video">
        <div class="portfolio-wrap">
          <div class="img">
            <img src="{{ asset('assets-web/img/ilustrasi/img9.png') }}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <!-- <h4>Card 3</h4>
          <p>Card</p> -->
            <div class="portfolio-links">
              <a href="{{ asset('assets-web/img/ilustrasi/img9.png') }}" data-gallery="portfolioGallery"
                class="portfokio-lightbox" title="title"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

</section>

<section id="values" class="values">
  <header class="section-header text-center">
    <h2>information</h2>
    <p>Items Currently in Collection</p>
  </header>
  <a href="{{ route('landingpage.jelajahi') }}" class="btn btn-exs text-decoration-none">Explore Collections</a>
  <div class="container aos-init aos-animate" data-aos="">
    <div class="row">
      <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in"
        data-aos-delay="100">
        <div class="card-alur">
          {{-- <center> --}}
            <div class="img" style="margin-bottom: 12px;">
              <img src="{{ asset('assets-web/img/ilustrasi/art.png') }}" class="img-fluid">
            </div>
            {{-- <center> --}}
              <!-- <h4><a href="">Kelurahan</a></h4> -->
              <div class="sub-text">
                <h4 class="card-title mb-0">  flowers</a></h4>
                <p class="card-title mb-0">6 resources</p>
                {{-- <a href="">10 suka</a>
                <a href="">3 komentar</a> --}}
              </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in"
        data-aos-delay="200">
        <div class="card-alur">
          {{-- <center> --}}
            <div class="img" style="margin-bottom: 12px;">
              <img src="{{ asset('assets-web/img/ilustrasi/art3.png') }}" class="img-fluid">
            </div>
            {{-- <center> --}}
              <div class="sub-text">
                <h4 class="card-title mb-0"><a href="{{ route('landingpage.Beautiful') }}">Beautiful scenery</a></h4>
                <p class="card-title mb-0">6 resources</p>
              </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate" data-aos="zoom-in"
        data-aos-delay="300">
        <div class="card-alur">
          {{-- <center> --}}
            <div class="img" style="margin-bottom: 12px;">
              <img src="{{ asset('assets-web/img/ilustrasi/art4.png') }}" class="img-fluid">
            </div>
            {{-- <center> --}}
              <div class="sub-text">
                <h4 class="card-title mb-0"><a href="{{ route('landingpage.animal') }}">Animals</a></h4>
                <p class="card-title mb-0">6 resources</p>
              </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate" data-aos="zoom-in"
        data-aos-delay="400">
        <div class="card-alur">
          {{-- <center> --}}
            <div class="img" style="margin-bottom: 12px;">
              <img src="{{ asset('assets-web/img/ilustrasi/img7.png') }}" class="img-fluid">
            </div>
            {{-- <center> --}}
              <div class="sub-text">
                <h4 class="card-title mb-0"><a href="{{ route('landingpage.nwjns') }}">NWJNS</a></h4>
                <p class="card-title mb-0">6 resources</p>
              </div>
        </div>
      </div>

    </div>

  </div>
</section>


<div class="container1">
<div class="box">

<span style="--i:1"><img src="{{ asset('assets-web/img/ilustrasi/g.png') }}"></span>
<span style="--i:2"><img src="{{ asset('assets-web/img/ilustrasi/e.png') }}"></span>
<span style="--i:3"><img src="{{ asset('assets-web/img/ilustrasi/7.png') }}"></span>
<span style="--i:4"><img src="{{ asset('assets-web/img/ilustrasi/9.jpg') }}"></span>
<span style="--i:5"><img src="{{ asset('assets-web/img/ilustrasi/10.jpg') }}"></span>
<span style="--i:6"><img src="{{ asset('assets-web/img/ilustrasi/cat1.png') }}"></span>
<span style="--i:7"><img src="{{ asset('assets-web/img/ilustrasi/13.png') }}"></span>
<span style="--i:8"><img src="{{ asset('assets-web/img/ilustrasi/17.png') }}"></span>
<span style="--i:9"><img src="{{ asset('assets-web/img/ilustrasi/14.png') }}"></span>
<span style="--i:10"><img src="{{ asset('assets-web/img/ilustrasi/cat3.png') }}"></span>

</div>
</div>


@endsection
  
