@extends('backend.layouts.master')
@section('content')

 <!-- Content  page -->
 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> Manage About </h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
       <li class="breadcrumb-item active"> About </li>
      </ol>
     </div>
    </div>
   </div>
  </div>

  <section class="content">
   <div class="container-fluid">
    
     <div class="row justify-content-center">
      <div class="col-8">
       <div class="card">

        <div class="card-header">
         <h3> About Us </h3>
        </div>

        <div class="card-body">
         <form method="POST" action="{{ route('about.update',$editdata->id) }}" enctype="multipart/form-data" id="myForm">
         @csrf

           <div class="form-row">

            <div class="form-group col-md-12">
             <label for="title"> Title </label>
             <input type="text" name="title" class="form-control" value="{{ $editdata->title }}">
             <font style="color:red">{{ ($errors->has('title'))?($errors->first('title')):'' }}</font>
            </div>

            <div class="form-group col-md-12">
             <label for="title"> About Discriptsion </label>
             <textarea id="summernote" name="discriptsion" class="form-control" rows="5">{!! $editdata->discriptsion !!}</textarea>
             <font style="color:red">{{ ($errors->has('discriptsion'))?($errors->first('discriptsion')):'' }}</font>
            </div>

            <div class="form-group col-md-4">
             <label for="image"> Image </label>
             <input type="file" name="image" class="form-control" id="image">
            </div>

            <div class="form-group col-md-8" align="center">
             <img id="showImage" src="{{ !empty($editdata->image)?url('upload/about_image/'.$editdata->image):url('upload/No-image.jpg') }}" style="width:180px; height:150px; margin-top:30px; border:1px solid #ccc;" align="right">
            </div>

            <div class="form-group col-md-12">
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

      discriptsion: {
       required: true,
      },
      },

      messages:{
       title: {
        required: "Please enter Title",
       },
       discriptsion:{
        required: "Please Enter Discriptsion",
        },
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