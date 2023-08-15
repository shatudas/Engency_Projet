@extends('frontend.layouts.index')
@section('homepage')

  <!-- ======= Top Section ======= -->
  <section id="about" class="d-flex align-items-center">
   <div class="container" data-aos="zoom-out" data-aos-delay="100" align="center">
    <h1><span>Company</span> About US</h1>
    <ul class="ct-breadcrumb">
     <li>
      <a class="text-dark" href="{{ route('/') }}">Home</a>
     </li>
     <li>
      <span>| About Us</span>
     </li>
    </ul>
   </div>
  </section>


  <!-- ======= About Section ======= -->
  <section id="about" class="about section-bg" style="background-color:#F6F9FE;">
   <div class="container" data-aos="fade-up">
    <div class="row">
    
     <div class="col-lg-6 pt-3 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
      <h3><span> Company </span> About </h3>
      <p class="text-justify">
        {{ $about->discriptsion }}
      </p>
     </div>

     <div class="col-lg-6 justify-content-center p-3" data-aos="fade-left" data-aos-delay="100">
      <img src="{{ url('upload/about_image/'.$about->image) }}" class="p-4" class="img-fluid" alt="" align="right">
     </div>

    </div>
   </div>
  </section>


   <!-- ======= Services Section ======= -->
  <section id="services" class="services">
   <div class="container" data-aos="fade-up">
    
    <div class="section-title">
     <h3>Check Company <span>Services</span></h3> 
    </div>

    <div class="row">
     
     @foreach($cat_sevices as $sevice)
     <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
      <div class="icon-box" id="icon-box">
       <img src="{{ !empty($sevice->image)?url('upload/category_image/'.$sevice->image):url('login_data/image/favicon.png')}}">
       <h4><a href="">{{ $sevice->name }}</a></h4>
       <p>{{ $sevice->title }}</p>
       <a href="{{ Route('service',$sevice->id) }}" class="btn" style="float:right;"> View Detalis <i class="bi bi-arrow-right"></i></a>
      </div>
     </div>
     @endforeach

    </div>
   </div>
  </section>
  <!-- End Services Section -->



 
@endsection