 <!-- ======= Footer ======= -->
 <footer id="footer">

  <div class="footer-top">
   <div class="container">
    <div class="row">

     <div class="col-lg-3 col-md-6 footer-contact">
      <h4 class="text-white"> {{ $setting->title }}</h4>
      <p>We work with a passion of taking challenges and creating new ones as requirement from our clients.<br>
      </p>
     </div>

     <div class="col-lg-3 col-md-6 footer-links">
      <h4>Our Services</h4>
      <ul>
       @foreach($category as $value)
       <li><i class="bx bx-chevron-right"></i> <a href="{{ Route('service',$value->id) }}">{{ $value->name }}</a></li>
       @endforeach
      </ul>
     </div>

     @foreach($brance as $data)


     <div class="col-lg-3 col-md-6 footer-links">
      <h4>{{ $data->name }}</h4>
      <ul>
       <li class="text-white" style="height:auto;">{{ $data->address }}</li>
       <li class="text-white">{{ $data->opening_time }} - {{ $data->ending_time }}</li>
       <li class="text-white">{{ $data->holiday }} CLOSED</li>
       <li class="text-white">{{ $data->phone }}</li>
      </ul>
     </div>

     @endforeach

    </div>
   </div>
  </div>

  <div class="container my-2 text-light" align="center">
  &copy; {{ date('Y') }} Copyright <span><b>{{ $setting->title }}</b></span>. All Rights Reserved  
  </div>

 </footer>


  <div id="preloader"></div>
  
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
   <i class="bi bi-arrow-up-short"></i>
  </a