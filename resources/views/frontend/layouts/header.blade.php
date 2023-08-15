
 <!---========Top Header========------>
 <section id="topbar" class="d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
   <div class="contact-info d-flex align-items-center">
    <i class="bi bi-envelope d-flex align-items-center">
     <a href="mailto:{{ $setting->email }}" style="text-decoration:none;">&nbsp; {{ $setting->email }} </a>
    </i>
    <i class="bi bi-phone d-flex align-items-center ms-4">
     <a href="tel:{{ $setting->phone }}" style="text-decoration:none;">
      <span>{{ $setting->phone }}</span>
     </a>
    </i>
   </div>
   <div class="social-links d-none d-md-flex align-items-center">
    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
   </div>
  </div>
 </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
   <div class="container d-flex align-items-center justify-content-between">
    
    <h1 class="logo">
     <a href="{{ Route('/') }}"><img src="{{ !empty($setting->logo)?url('upload/GenarelSetting/'.$setting->logo):url('frontend/assets/img/logo.png') }}"></a>
    </h1>

    <nav id="navbar" class="navbar">
     <ul>

      <li><a class="nav-link" href="{{ Route('/') }}">Home</a></li>
      
      <li class="dropdown">
       <a href=""><span>About</span> <i class="bi bi-chevron-down"></i></a>
       <ul>
        <li><a href="{{ Route('about_page') }}">About Us</a></li>
        <li><a href="{{ Route('history') }}">History</a></li>
        <li><a href="{{ Route('vision') }}">Vision</a></li>
        <li><a href="{{ Route('mission') }}">Mission</a></li>
       </ul>
      </li>

      <li class="dropdown">
       <a href="#"><span>Governance</span> <i class="bi bi-chevron-down"></i></a>
       <ul>
        <li><a href="{{ Route('authority') }}">Authority</a></li>
        <li><a href="{{ Route('director') }}">Board of Director</a></li>
        <li><a href="{{ Route('memorandum') }}">Memorandum of Assocication</a></li>
        <li><a href="{{ Route('statutes') }}">Statutes of the Government</a></li>
       </ul>
      </li>

      <li class="dropdown">
       <a href="#"><span>Adminstration</span> <i class="bi bi-chevron-down"></i></a>
       <ul>
        <li><a href="{{ Route('general') }}">General Admistration</a></li>
        <li><a href="{{ Route('finance') }}">Finance Adminstration</a></li>
        <li><a href="{{ Route('hr') }}">HR Administration</a></li>
       </ul>
      </li>


      <li class="dropdown">
       <a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
       <ul>
        @foreach($category as $value)
        <li><a href="{{ Route('service',$value->id) }}" >{{ $value->name }}</a></li>
       @endforeach
       </ul>
      </li>

      <li><a class="nav-link scrollto" href="{{ Route('team') }}">Team</a></li>
      <li><a class="nav-link scrollto" href="{{ Route('contact') }}" >Contact</a></li>
     </ul>
     <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>

   </div>
  </header>