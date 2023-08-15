@extends('backend.layouts.master')
@section('content')


 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0">Manage Profile</h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="#">Home</a></li>
       <li class="breadcrumb-item active">Profile</li>
      </ol>
     </div>
    </div>
   </div>
  </div>

  <section class="content">
   <div class="container-fluid">
    <div class="row">
     <div class="col-md-4 offset-md-4">
       <div class="card card-primary card-outline">
        
        <div class="card-body box-profile">
         <div class="text-center">
          <img class="profile-user-img img-fluid img-circle" src="{{ !empty($user->image)?url('upload/user_images/'.$user->image):url('upload/No-image.jpg') }}" alt="User profile picture" style="height:100px; width:100px;">
         </div>
         <h3 class="profile-username text-center">{{ $user->name }}</h3>
         <p class="text-muted text-center">{{ $user->address }}</p>
         <table width="100%;" class="table table-bordered">
          <tbody>
           <tr>
            <td>Mobile</td>
            <td>{{ $user->mobile }}</td>
           </tr>
           <tr>
            <td>Email</td>
            <td>{{ $user->email }}</td>
           </tr>
           <tr>
            @if($user->gender ==!null)
            <td>Gender</td>
            <td>{{ $user->gender }}</td>
            @endif
           </tr>
          </tbody>
         </table><br>
         <a href="{{route('profiles.edit')}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
        </div>


       </div>
     </div>
    </div>
   </div>
  </section>  

 </div>


  @endsection