@php
 $setting= App\Model\genarelSetting::first();
 $category = App\Model\ServicesCategory::where('status',0)->get();
 $brance = App\Model\Brance::where('status',0)->limit(2)->get();

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> {{ $setting->title }} </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{ !empty($setting->favicon)?url('upload/GenarelSetting/'.$setting->favicon):url('login_data/image/favicon.png')}}" rel="icon">
  <link href="{{ !empty($setting->favicon)?url('upload/GenarelSetting/'.$setting->favicon):url('login_data/image/favicon.png')}}" rel="apple-touch-icon">

  <link href="{{ asset('frontend')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('frontend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('frontend')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('frontend')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('frontend')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ asset('frontend')}}/assets/css/style.css" rel="stylesheet">

</head>
 <body>

   @include('frontend.layouts.header')
   @yield('homepage')
   @include('frontend.layouts.footer')


  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('frontend')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('frontend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('frontend')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('frontend')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('frontend')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('frontend')}}/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('frontend')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('frontend')}}/assets/js/main.js"></script>

 </body>
</html>