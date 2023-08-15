<!doctype html>
<html lang="en">
 <head>
  <title> Login || WACE </title>
  <link href="{{ asset('login_data/image/favicon.png') }}" rel="icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('login_data/css/style.css') }}">
 </head>
 <body>


  <section class="ftco-section">
   <div class="container">
    
    <div class="row justify-content-center">
     <div class="col-md-6 col-lg-4">
      <div class="login-wrap pt-3 pb-2">
       <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{ asset('login_data/image/favicon.png') }});"></div>

       <form method="POST" action="{{ route('login') }}">
       @csrf

       @if($errors->any())
        <div class="alert alert-danger alert-dismissible">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
         @foreach($errors->all() as $error)
          <strong>{{$error}}</strong><br>
         @endforeach
        </div>
       @endif

       <div class="form-group">
        <div class="icon d-flex align-items-center justify-content-center">
         <span class="fa fa-user"></span>
        </div>
        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Name" required>
       </div>

       <div class="form-group">
        <div class="icon d-flex align-items-center justify-content-center">
         <span class="fa fa-lock"></span>
        </div>
        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password" required>
       </div>

       <div class="form-group d-md-flex">
        <div class="w-100 text-md-right">
         <br>
        </div>
       </div>

       <div class="form-group">
        <button type="submit" name="button" class="btn form-control btn-primary rounded submit px-3">Login</button>
       </div>

       </form>
      </div>
     </div>
    </div>

   </div>
  </section>

  <script src="{{ asset('login_data/js/jquery.min.js') }}"></script>
  <script src="{{ asset('login_data/js/popper.js') }}"></script>
  <script src="{{ asset('login_data/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('login_data/js/main.js') }}"></script>

  </body>
</html>

