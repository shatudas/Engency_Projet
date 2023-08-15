@extends('backend.layouts.master')
@section('content')

 <div class="content-wrapper">

  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0">Dashboard</h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="#">Home</a></li>
       <li class="breadcrumb-item active">WACE</li>
      </ol>
     </div>
    </div>
   </div>
  </div>

   <section class="content">
    <div class="container-fluid">
     <div class="row">

      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
         <div class="inner">
          <h3>{{ $user }}</h3>
          <p>Active User</p>
         </div>
         <div class="icon" >
          <i class="fa fa-user-circle-o text-white"></i>
         </div>
         @if(Auth::user()->user_type !=='User')
         <a href="{{ route('user.view') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         @else
         <a href="#" class="small-box-footer" disable="">More info <i class="fas fa-arrow-circle-right"></i></a>
         @endif
        </div>
       </div>


       <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
         <div class="inner">
           <h3>{{ $team }}</h3>
          <p> Employee</p>
         </div>
         <div class="icon">
          <i class="fa fa-user text-white"></i>
         </div>
         <a href="{{route('employer.view')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
       </div>


       <div class="col-lg-3 col-6"> 
        <div class="small-box bg-warning">
         <div class="inner">
          <h3 style="color: #FFF;" >{{ $director }}</h3>
          <p class="text-white">Director Member</p>
         </div>
         <div class="icon">
          <i class="fa fa-user-circle-o text-white"></i>
         </div>
         <a href="{{route('director.view')}}" class="small-box-footer" style="color:#fff;">More info <i class="fas fa-arrow-circle-right text-white" ></i></a>
        </div>
       </div>

       <div class="col-lg-3 col-6"> 
        <div class="small-box bg-danger">
         <div class="inner">
          <h3>{{ $servicescategory }}</h3>
          <p>Service</p>
         </div>
         <div class="icon">
          <i class="fa fa-cube text-white"></i>
         </div>
         <a href="{{route('category.view')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
       </div> 



     </div>
    </div>
   </section>
   
  </div>

@endsection
