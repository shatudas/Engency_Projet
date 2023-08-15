@extends('frontend.layouts.index')
@section('homepage')

  <!-- ======= Top Mision  ======= -->
  <section id="about" class="d-flex align-items-center">
   <div class="container" data-aos="zoom-out" data-aos-delay="100" align="center">
    <h2><span style="color:#00A1E1;">Company</span>  Mision</h2>
    <ul class="ct-breadcrumb">
     <li>
      <a class="text-dark" href="{{ route('/') }}">Home</a>
     </li>
     <li>
      <span>| Mision</span>
     </li>
    </ul>
   </div>
  </section>

 <!-- ======= Mision Section ======= -->
 <section id="authority" class="authority">
  <div class="container" data-aos="fade-up">

   <div class="row justify-content-center p-2" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-10 image ">
     <img src="{{ url('upload/mision_image/'.$mision->image) }}" class="img-fluid">
    </div>
   </div>

   <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-10">
     <p class="text-justify">{{ $mision->discriptsion }}</p>
    </div>
   </div>

   </div>
 </section>

@endsection