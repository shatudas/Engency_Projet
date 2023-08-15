@extends('frontend.layouts.index')
@section('homepage')

  <!-- ======= Top Section History ======= -->
  <section id="about" class="d-flex align-items-center">
   <div class="container" data-aos="zoom-out" data-aos-delay="100" align="center">
    <h2><span style="color:#00A1E1;">Compamy</span>  History</h2>
    <ul class="ct-breadcrumb">
     <li>
      <a class="text-dark" href="{{ route('/') }}">Home</a>
     </li>
     <li>
      <span>| History</span>
     </li>
    </ul>
   </div>
  </section>

 <!-- ======= History Section ======= -->
 <section id="authority" class="authority">
  <div class="container" data-aos="fade-up">

   <div class="row justify-content-center p-2" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-10 image ">
     <img src="{{ url('upload/history_image/'.$history->image) }}" class="img-fluid">
    </div>
   </div>

   <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-10">
     <p class="text-justify">{{ $history->discriptsion }}</p>
    </div>
   </div>

  </div>
 </section>

@endsection