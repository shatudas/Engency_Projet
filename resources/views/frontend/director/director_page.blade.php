@extends('frontend.layouts.index')
@section('homepage')

  <!-- ======= Top Section Director ======= -->
	 <section id="about" class="d-flex align-items-center">
	  <div class="container" data-aos="zoom-out" data-aos-delay="100" align="center">
	   <h1><span>Company</span> Board of Director </h1>
	   <ul class="ct-breadcrumb">
	    <li>
	     <a class="text-dark" href="{{ route('/') }}">Home</a>
	    </li>
	    <li>
	     <span>| Director</span>
	    </li>
	   </ul>
	  </div>
	 </section>

  <!-- ======= Team directors ======= -->
  <section id="team" class="team1">
   <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">

    @foreach($director as $directors)

     <div class="col-xl-3 col-md-6 d-flex mb-4" data-aos="zoom-in" data-aos-delay="200">
      <div class="team-member">
       <div class="member-img">
        <img src="{{ !empty($directors->image)?url('upload/director_image/'.$directors->image):url('upload/team.jpg')}}" class="img-fluid" alt="">
       </div>
       <div class="member-info">
        <div class="social">
         <a href="{{ $directors->facebook }}" target="_blank"><i class="bi bi-twitter"></i></a>
         <a href="{{ $directors->linkdin }}" target="_blank"><i class="bi bi-linkedin"></i></a>
        </div>
        <h4>{{ $directors->name }}</h4>
        <span>{{ $directors->designations }}</span>
       </div>
      </div>
     </div>

    @endforeach

    </div>
   </div>
  </section>

@endsection
