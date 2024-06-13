@extends('layout.lp')

@section('content')
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
            <img src="{{ asset('assets-web/img/ilustrasi/cat1.png') }}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <!-- <h4>Fot</h4>
          <p>App</p> -->
            <div class="portfolio-links">
              <a href="{{ asset('assets-web/img/ilustrasi/cat1.png') }}" data-gallery="portfolioGallery"
                class="portfokio-lightbox" title="title"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item foto">
        <div class="portfolio-wrap">
          <div class="img">
            <img src="{{ asset('assets-web/img/ilustrasi/cat2.png') }}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <!-- <h4>App 2</h4>
          <p>App</p> -->
            <div class="portfolio-links">
              <a href="{{ asset('assets-web/img/ilustrasi/cat2.png') }}" data-gallery="portfolioGallery"
                class="portfokio-lightbox" title="title"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item foto">
        <div class="portfolio-wrap">
          <div class="img">
            <img src="{{ asset('assets-web/img/ilustrasi/cat3.png') }}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <!-- <h4>App 3</h4>
          <p>App</p> -->
            <div class="portfolio-links">
              <a href="{{ asset('assets-web/img/ilustrasi/cat3.png') }}" data-gallery="portfolioGallery"
                class="portfokio-lightbox" title="title"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item video">
        <div class="portfolio-wrap">
          <div class="img">
            <img src="{{ asset('assets-web/img/ilustrasi/cat1.png') }}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <!-- <h4>Card 2</h4>
          <p>Card</p> -->
            <div class="portfolio-links">
              <a href="{{ asset('assets-web/img/ilustrasi/cat1.png') }}" data-gallery="portfolioGallery"
                class="portfokio-lightbox" title="title"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item video">
        <div class="portfolio-wrap">
          <div class="img">
            <img src="{{ asset('assets-web/img/ilustrasi/cat2.png') }}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <!-- <h4>Card 1</h4>
          <p>Card</p> -->
            <div class="portfolio-links">
              <a href="{{ asset('assets-web/img/ilustrasi/cat2.png') }}" data-gallery="portfolioGallery"
                class="portfokio-lightbox" title="title"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item video">
        <div class="portfolio-wrap">
          <div class="img">
            <img src="{{ asset('assets-web/img/ilustrasi/cat3.png') }}" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <!-- <h4>Card 3</h4>
          <p>Card</p> -->
            <div class="portfolio-links">
              <a href="{{ asset('assets-web/img/ilustrasi/cat3.png') }}" data-gallery="portfolioGallery"
                class="portfokio-lightbox" title="title"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

</section>
    
@endsection