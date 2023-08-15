@extends('frontend.layouts.index')
@section('homepage')

 @if($catservice !=  null)

  <!-- ======= Top Service ======= -->
  <section id="about" class="d-flex align-items-center">
   <div class="container" data-aos="zoom-out" data-aos-delay="100" align="center">
    <h1><span> Company</span> Our Service </h1>
    <ul class="ct-breadcrumb">
     <li>
      <a class="text-dark" href="{{ route('/') }}">Home</a>
     </li>
     <li>
      <span>| {{ $catservice['service']['name'] }} </span>
     </li>
    </ul>
   </div>
  </section>

  <!-- ======= Services Section ======= -->
  <section id="servicesdetalis" class="servicesdetalis d-flex align-items-center">

  	<div class="container">
  		<div class="row">

  			<div class="col-md-6 col-sm-12 p-4" align="center">
  				<img src="{{ url('upload/Service_image/'.$catservice->image) }}" class="img-fluid" alt="" >
  			</div>

  			<div class="col-md-6 col-sm-12 p-4">
      <h3 class="pt-3 text-title">{{ $catservice['service']['name'] }}</h3>
  				<h3 class="pt-3 text-title">{{ $catservice->title }}</h3><br>
      <label> {{ $catservice->heading }}</label><br><br>
  				<span class="pt-2 text-justify text-body">{{ $catservice->short_detalis }}</span>
  			</div>

  			<div class="col-md-12 col-sm-12">
  				<span class="text-body">{{ $catservice->description }}</span><br>
  			</div>

     @if( $catservice->services_point != Null)
   			<div class="col-md-12 col-sm-12 mt-5">
   				<span class="text-title mb-5" style="border-bottom:2px solid #000;"> Services List </span><br>
   				<ul>
        @php
         $datas = json_decode($catservice->services_point);
        @endphp
        @foreach($datas as $edit)
         <li>{{ $edit }}</li>
        @endforeach
   				</ul>
   			</div>
     @endif

  		</div>
  	</div>
  </section>

 @else

  <section class="d-flex align-items-center"  style="height:100vh; background-color:#F9F9F9;">
   <div class="container" data-aos="zoom-out" data-aos-delay="100" align="center">
    <h2 class="py-5"> Page Loading </h2>
    <div class="loader"></div>
   </div>
  </section>

  @endif


  <!-- ======= Frequently Asked Questions Section ======= -->
  {{-- <section id="faq" class="faq section-bg bg-white">
   <div class="container bg-light" data-aos="fade-up">

    <div class="section-title">
     <h3 align="left" class="ml-4">The Art of Identifying <span> Talent</span>
     </h3>
    </div>

    <div class="row justify-content-center">
     <div class="col-xl-10">
      <ul class="faq-list">
       <li>
        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">
         Stage 1 - Resume screening and skill set analysis
         <i class="bi bi-chevron-down icon-show"></i>
         <i class="bi bi-chevron-up icon-close"></i>
        </div>
        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
         <p>Placing recruitment advertisements in print and electronic media with response time lines, search through job portals, company database and head hunting. Upon response, initial filtration of CVs to check on the talent profile. Eligibility, education and experience verification.</p>
        </div>
       </li>
       <li>
        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">
         Stage 2 – Profiling
         <i class="bi bi-chevron-down icon-show"></i>
         <i class="bi bi-chevron-up icon-close"></i>
        </div>
        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
         <p> Short-listed candidates undergo preliminary interviews with our recruitment teams. Telephonic interviews, basic competency checks, language skills, age, sex, personality and presentation skills are assessed.
         </p>
        </div>
       </li>
       <li>
        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">
         Stage 3 - Analytical test
         <i class="bi bi-chevron-down icon-show"></i>
         <i class="bi bi-chevron-up icon-close"></i>
        </div>
        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
         <p>Selected candidates undergo basic level of tests including computer skills, exposure to internet, communication flow and business communication (based on position requested by the employer). All candidates are required to pass our aptitude tests to ensure minimum skills verification on comprehension, mathematics, IQ and general knowledge (based on position requested by the employer).
         </p>
        </div>
       </li>
       <li>
        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">
         Stage 4 - Functional Interview (Process and Role Specific)
         <i class="bi bi-chevron-down icon-show"></i>
         <i class="bi bi-chevron-up icon-close"></i>
        </div>
        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
         <p> Our appointed project manager for the business service conducts functional specific interviews for all short listed candidates. We explain to the candidates the desired functional roles and responsibilities. A thorough assessment is made to check the candidate’s stability attitude, composure and confidence.
         </p>
        </div>
       </li>
       <li>
        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">
         Stage 5 - Final Interview
         <i class="bi bi-chevron-down icon-show"></i>
         <i class="bi bi-chevron-up icon-close"></i>
        </div>
        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
         <p> All screened candidates attend the final interview which is conducted in the presence of a client representative.
         </p>
        </div>
       </li>
       <li>
        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">
         Stage 6 - Offer letter and Induction
         <i class="bi bi-chevron-down icon-show"></i>
         <i class="bi bi-chevron-up icon-close"></i>
        </div>
        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
         <p>Short-listed candidates are issued an offer letter. Initial HR induction is conducted by our recruitment teams for selected candidates explaining the terms and conditions of the employment contract while initiating HR formalities to fulfil joining requirements.
         </p>
        </div>
       </li>
       <li>
        <div data-bs-toggle="collapse" href="#faq7" class="collapsed question">
         Stage 7 - Attestation of Documents
         <i class="bi bi-chevron-down icon-show"></i>
         <i class="bi bi-chevron-up icon-close"></i>
        </div>
        <div id="faq7" class="collapse" data-bs-parent=".faq-list">
         <p>We manage all types of certificate attestations to ensure a smooth recruitment process from various ministries and embassies/consulates.
         </p>
        </div>
       </li>
       <li>
        <div data-bs-toggle="collapse" href="#faq8" class="collapsed question">
         Stage 8 - Visa Processing
         <i class="bi bi-chevron-down icon-show"></i>
         <i class="bi bi-chevron-up icon-close"></i>
        </div>
        <div id="faq8" class="collapse" data-bs-parent=".faq-list">
         <p>We provide Visa processing service (employment visa, work visit visa, visit visa and family visa) and visa consultancy.
         </p>
        </div>
       </li>
       <li>
        <div data-bs-toggle="collapse" href="#faq9" class="collapsed question">
         Stage 9- Ticketing and employer handling.
         <i class="bi bi-chevron-down icon-show"></i>
         <i class="bi bi-chevron-up icon-close"></i>
        </div>
        <div id="faq9" class="collapse" data-bs-parent=".faq-list">
         <p>The employer may send PTA or we arrange through airlines. All information regarding the candidate’s arrival is informed to the employer officially. Once the candidate arrives our representative at the destination and employer’s representative will be present to receive, accommodate and initiate orientation and job deployment.
         </p>
        </div>
       </li>
      </ul>
     </div>
    </div>

   </div>
  </section> --}}


  
<style>
.loader {
  border:8px solid #00A1E1;
  border-radius:50%;
  border-top:8px solid #111E90;
  width: 60px;
  height: 60px;
  -webkit-animation: spin 4s linear infinite; 
  animation: spin 4s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>


@endsection