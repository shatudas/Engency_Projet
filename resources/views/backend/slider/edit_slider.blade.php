@extends('backend.layouts.master')
@section('content')

 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
     <h1 class="m-0">Manage Slider</h1>
     </div>
      <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Slider</li>
       </ol>
      </div>
     </div>
    </div>
  </div>

  <section class="content">
   <div class="container-fluid">
    <div class="row justify-content-center">
     <div class="col-10 ">

      <div class="card">

       <div class="card-header">
        <h3> Update Slider
         <a href="{{ route('slider.view') }}" class=" btn btn-success btn-sm float-right"> <i class="fa fa-list"></i> User List</a>
        </h3>
       </div>
               
       <div class="card-body">
        <form method="POST" action="{{ route('slider.update',$editdata->id) }}" id="myForm" enctype="multipart/form-data">
        @csrf

         <div class="form-row">

          <div class="form-group col-md-6">
           <label for="name">Title</label>
           <input type="text" name="name" value="{{ $editdata->name }}" class="form-control">
          </div>

          <div class="form-group col-md-6">
           <label for="status"> Status <span style="color:red;">*</span> </label>
           <select name="status" class="form-control">
            <option value=""> Select Status </option>
            <option value="0" {{ $editdata->status=="0"?"selected":"" }}> Publish </option>
            <option value="1" {{ $editdata->status=="1"?"selected":"" }}> Draft </option>
           </select>
           <font style="color:red">{{ ($errors->has('status'))?($errors->first('status')):'' }}</font>
          </div>

          <div class="form-group col-md-6">
           <label for="image"> Image <span style="color:red;">*</span></label>
           <input type="file" name="image" class="form-control" id="image">
          </div>

          <div class="form-group col-md-6" align="center" style="margin-top:30px;">
           <img id="showImage" src="{{!empty($editdata->image)?url('upload/slider_image/'.$editdata->image):url('upload/No-image.jpg')}}" style="width:100%; height:170px; border:1px solid #ccc;">
          </div>

          <div class="form-group col-md-12">
           <input type="submit" value="submit"  class="btn btn-primary">
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
    status: {
    required: true,
    },
   },
    messages: {
     status: {
      required: "Please Select Stastus Type",
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
