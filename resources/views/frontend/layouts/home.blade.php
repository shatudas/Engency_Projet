@extends('frontend.layouts.index')
@section('homepage')

   @php
    $count = 0;
   @endphp

 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  
  <div class="carousel-indicators">
   @foreach($sliders as $key=> $slider)
    <button type="button" data-bs-target="#{{ $key }}" data-bs-slide-to="{{ $key }}" class="@if($count == 0) { active } @endif">
    </button>
   @endforeach
  </div>

  <div class="carousel-inner">
   @foreach($sliders as $slider)
    <div class="carousel-item @if($count == 0) { active } @endif">
     <img src="{{ url('upload/slider_image/'.$slider->image) }}" class="d-block w-100" alt="...">
     <div class="carousel-caption d-none d-md-block"></div>
    </div>
    @php
     $count++
    @endphp
   @endforeach
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Next</span>
  </button>
  
 </div>


 <main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about section-bg" style="background-color:#F6F9FE;">
   <div class="container" data-aos="fade-up">

    <div class="section-title">
     <h3>Find Out More <span>About Us</span></h3>
    </div>

    <div class="row">

     <div class="col-lg-6 justify-content-center pt-3" data-aos="fade-right" data-aos-delay="100">
      <img src="{{ url('upload/about_image/'.$about->image) }}" class="img-fluid" alt="">
     </div>

     <div class="col-lg-6 pt-3 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
      
      <h3><span> Company </span> About </h3>
      @php 
       $About=substr($about->discriptsion,0,468);
      @endphp
      <p class="text-justify">
        {{ $About }}
      </p>
      <div class="btn-section">
       <a href="{{ Route('about_page') }}" class="btn btn-primary btn-sm"> About More </a>
      </div>

     </div>

    </div>
   </div>
  </section>
  <!-- End About Section -->


  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
   <div class="container" data-aos="fade-up">
    
    <div class="section-title">
     <h3> Check Company <span> Services </span></h3> 
    </div>

    <div class="row">

     @foreach($cat_sevices as $val)
       
     <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
      <div class="icon-box" id="icon-box">
       <img src="{{ !empty($val->image)?url('upload/category_image/'.$val->image):url('login_data/image/favicon.png') }}">
       <h4><a href="">{{ $val->name }}</a></h4>
       <p>{{ $val->title }}</p>
       <a href="{{ Route('service',$val->id) }}" class="btn" style="float:right;"> View Detalis <i class="bi bi-arrow-right"></i></a>
      </div>
     </div>
     @endforeach

    </div>
   </div>
  </section>
  <!-- End Services Section -->


  <!-- ======= Team Section ======= -->
  <section class="team section-bg">
   <div class="container" data-aos="fade-up">

    <div class="section-title">
     <h3>Our <span> Team </span></h3>
    </div>

    <div class="row">

     @foreach($team as $teams)

     <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
      <div class="member">
       <div class="member-img">
        <img src="{{ !empty($teams->image)?url('upload/team_image/'.$teams->image):url('upload/team.jpg')}}" class="img-fluid" alt="">
        <div class="social">
         <a href="{{ $teams->facebook }}" target="_blank"><i class="bi bi-facebook"></i></a>
         <a href="{{ $teams->linkdin }}" target="_blank"><i class="bi bi-linkedin"></i></a>
        </div>
       </div>
       <div class="member-info" align="center">
        <h4>{{ $teams->name }}</h4>
        <span>{{ $teams->designations }}</span>
       </div>
      </div>
     </div>

    @endforeach

     <div class="col-12 mt-3">
      <a href="{{ Route('team') }}" class="btn" data-aos="fade-up" data-aos-delay="400" style="float:right;">  Show All Team </a>
     </div>

    </div>
   </div>
  </section>
  <!-- End Team Section -->

  
  <!-- ======= Contact Section ======= -->
  <section  class="contact">
   <div class="container" data-aos="fade-up">

    <div class="section-title">
     <h3>Contact<span> Us</span></h3>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">

     <div class="col-lg-4 col-md-6 mt-2">
      <div class="info-box mb-4">
       <i class="bx bx-map"></i>
       <h3>Our Address</h3>
       <p class="px-2">{{ $contact->address }}</p>
      </div>
     </div>

     <div class="col-lg-4 col-md-6 mt-2">
      <div class="info-box  mb-4">
       <i class="bx bx-envelope"></i>
       <h3>Email Us</h3>
       <p><a href="mailto:{{ $contact->email }}" style="text-decoration:none;">&nbsp; {{ $contact->email }} </a></p>
      </div>
     </div>

     <div class="col-lg-4 col-md-6 mt-2">
      <div class="info-box  mb-4">
       <i class="bx bx-phone-call"></i>
       <h3>Call Us</h3>
       <p> <a href="tel:{{ $contact->phone }}" style="text-decoration:none;"> {{ $contact->phone }}</a> </p>
      </div>
     </div>

    </div>
   </div>
  </section>

  </main>
  <!-- End main -->

@endsection