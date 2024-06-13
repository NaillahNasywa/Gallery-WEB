@extends('layouts.app')

@section('content')

<section id="hero" class="hero d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-7 d-flex flex-column justify-content-center">

        <h3 data-aos="" class="text-inline">hi, {{ Auth::user()->name }}</h3> 
         <h4> Success, You Have Successfully Logged In</strong></h4>
         <h5><strong> create your photo album and share your stories through stunning images</strong></span></h5>
       
        </div>
      </div>
    </div>

</section>

<section id="portfolio" class="portfolio">

  <div class="container" data-aos="">

    <header class="section-header text-center">
      {{-- <h2>FOTO</h2> --}}
      {{-- <h4><strong> create your photo album <br>and share your stories through stunning images</strong></span></h4> --}}
    </header>

    <div class="row gy-4 portfolio-container" data-aos="" data-aos-delay="200">

    </div>


</section>
<br>
<br>
<br>
<br>
<br>





@endsection
  
