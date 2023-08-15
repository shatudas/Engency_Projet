@extends('backend.layouts.master')
@section('content')

 <!-- Content  page -->
 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> Manage Genarel Setting </h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
       <li class="breadcrumb-item active">  Genarel Setting </li>
      </ol>
     </div>
    </div>
   </div>
  </div>

  <!-- Main content -->
  <section class="content">
   <div class="container-fluid">
    
      <div class="row justify-content-center">
       <div class="col-8">
        <div class="card">

         <div class="card-header">
          <h3>  Genarel Setting </h3>
         </div>
         <div class="card-body">
          <form method="POST" action="{{ route('genarelsetting.update',$editData->id) }}" enctype="multipart/form-data" id="myForm">
          @csrf

           <div class="form-row">

            <div class="form-group col-md-12">
             <label for="title"> Title </label>
             <input type="text" name="title" class="form-control" value="{{ $editData->title }}">
             <font style="color:red">{{ ($errors->has('title'))?($errors->first('title')):'' }}</font>
            </div>

            <div class="form-group col-md-12">
             <label for="name"> Company Name </label>
             <input type="text" name="name" class="form-control" value="{{ $editData->name }}">
             <font style="color:red">{{ ($errors->has('name'))?($errors->first('name')):'' }}</font>
            </div>

            <div class="form-group col-md-12">
             <label for="phone"> Phone <small>(Primary)</small></label>
             <input type="text" name="phone" class="form-control" value="{{ $editData->phone }}">
             <font style="color:red">{{ ($errors->has('phone'))?($errors->first('phone')):'' }}</font>
            </div>

            <div class="form-group col-md-12">
             <label for="email"> Email <small>(Primary)</small></label>
             <input type="text" name="email" class="form-control" value="{{ $editData->email }}">
             <font style="color:red">{{ ($errors->has('email'))?($errors->first('email')):'' }}</font>
            </div>

            <div class="form-group col-md-12">
             <label for="address"> Address <small>(Primary)</small></label>
             <input type="text" name="address" class="form-control" value="{{ $editData->address }}">
             <font style="color:red">{{ ($errors->has('address'))?($errors->first('address')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="logo"> Logo </label>
             <input type="file" name="logo" class="form-control" id="image">
            </div>

            <div class="form-group col-md-6" align="justify-content-center">
             <img id="showImage" class="img-fluid" src="{{ !empty($editData->logo)?url('upload/GenarelSetting/'.$editData->logo):url('upload/No-image.jpg') }}" style="width:150px; height:80px; margin-top:30px; border:1px solid #ccc;" >
            </div>

            <div class="form-group col-md-6">
             <label for="favicon"> Favicon </label>
             <input type="file" name="favicon" class="form-control" id="imageOne">
          
            </div>

            <div class="form-group col-md-6" align="justify-content-center">
             <img id="showImageOne" class="img-fluid" src="{{ !empty($editData->favicon)?url('upload/GenarelSetting/'.$editData->favicon):url('upload/No-image.jpg') }}" style="width:70px; height:70px; margin-top:30px; border:1px solid #ccc;" >
            </div>

            <div class="form-group col-md-6">
             <input type="submit" value="Upload"  class="btn btn-primary">
            </div>

           </div>
          </form>
         </div>

        </div>
       </div>
      </div>
     
   </div>
  </section>
  
 </div>

  <script>
   $(function () {
    $('#myForm').validate({
     rules: {
       title: {
       required: true,
       },
       name: {
        required: true,
       },
        phone: {
        required: true,
       },
        email: {
        required: true,
       },
        address: {
        required: true,
       },
      },

      messages:{
      
      },
       errorElement: 'span',
       errorPlacement: function (error, element) {
         error.addClass('invalid-feedback');
         element.closest('.form-group').append(error);
       },
       highlight: function (element, errorClass, validClass) {
         $(element).addClass('is-invalid');
       },
       unhighlight: function (element, errorClass, validClass) {
         $(element).removeClass('is-invalid');
       }
     });
   });
  </script>


  @endsection