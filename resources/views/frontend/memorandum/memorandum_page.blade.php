@extends('frontend.layouts.index')
@section('homepage')

  <!-- ======= Top Section ======= -->
  <section id="about" class="d-flex align-items-center">
   <div class="container" data-aos="zoom-out" data-aos-delay="100" align="center">
    <h2><span style="color:#00A1E1;">Company</span> Memorandum Of Assocication</h2>
    <ul class="ct-breadcrumb">
     <li>
      <a class="text-dark" href="{{ route('/') }}">Home</a>
     </li>
     <li>
      <span>| Memorandum Of Assocication </span>
     </li>
    </ul>
   </div>
  </section>

  <!-- ======= Authority Section ======= -->
 <section id="authority" class="authority">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-center p-2" data-aos="fade-up" data-aos-delay="100">
     <div class="col-lg-10 image">
      <img src="{{ url('upload/memorandum_image/'.$memorandum->image) }}" class="img-fluid">
     </div>
    </div>

    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
     <div class="col-lg-10">
      <h2 class="mt-5 mb-3 heading">{{ $memorandum->heading }}</h2>
      <span class="title">{{ $memorandum->title }}</span>
      <p class="text-justify">{{ $memorandum->discriptsion }}</p>
     </div>
    </div>

     @php
      $datas = json_decode($memorandum->sub_heading );
      $val   = json_decode($memorandum->sub_title);
      $val2  = json_decode($memorandum->sub_discriptsion);
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