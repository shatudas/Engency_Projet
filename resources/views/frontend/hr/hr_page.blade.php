@extends('frontend.layouts.index')
@section('homepage')


 <!-- ======= Top Section HR ======= -->
 <section id="about" class="d-flex align-items-center">
  <div class="container" data-aos="zoom-out" data-aos-delay="100" align="center">
   <h1><span >Company </span> HR Section </h1>
   <ul class="ct-breadcrumb">
    <li>
     <a class="text-dark" href="{{ route('/') }}">Home</a>
    </li>
    <li>
     <span>| HR Administration</span>
    </li>
   </ul>
  </div>
 </section>

 <!-- ======= HR Section ======= -->
 <section id="authority" class="authority">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-center p-2" data-aos="fade-up" data-aos-delay="100">
     <div class="col-lg-10 image">
      <img src="{{ url('upload/hr_image/'.$hr->image) }}" class="img-fluid">
     </div>
    </div>

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
     <div class="col-lg-10">
      <h2 class="mt-5 mb-3 heading">{{ $hr->heading }}</h2>
      <span class="title">{{ $hr->title }}</span>
      <p class="text-justify">{{ $hr->discriptsion }}</p>
     </div>
    </div>

    @php
     $datas = json_decode($hr->sub_heading);
     $val   = json_decode($hr->sub_title);
     $val2  = json_decode($hr->sub_discriptsion);
    @endphp

    @if( $datas != Null)
    @foreach($datas as $key => $edit)

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
     <div class="col-lg-10">
      <h4 class="mt-3 mb-3 ">{{ $edit }}</h4>
      <span class="title">{{ isset($val[$key]) ? $val[$key] : "" }}</span>
      <p class="text-justify">{{ isset($val2[$key]) ? $val2[$key] : "" }}</p>
     </div>
    </div>

    @endforeach
    @endif

  </div>
 </section>



@endsection