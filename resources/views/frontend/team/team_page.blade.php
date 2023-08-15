@extends('frontend.layouts.index')
@section('homepage')

  <!-- ======= Top Team ======= -->
	 <section id="about" class="d-flex align-items-center">
	  <div class="container" data-aos="zoom-out" data-aos-delay="100" align="center">
	   <h1><span>Company</span> Professional Team </h1>
	   <ul class="ct-breadcrumb">
	    <li>
	     <a class="text-dark" href="{{ route('/') }}">Home</a>
	    </li>
	    <li>
	     <span>| Team</span>
	    </li>
	   </ul>
	  </div>
	 </section>


  <!-- ======= Team Section ======= -->
  <section class="team section-bg" >
   <div class="container" data-aos="fade-up">

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

    </div>
   </div>
  </section>
  

@endsection
