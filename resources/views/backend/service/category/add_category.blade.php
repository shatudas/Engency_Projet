@extends('backend.layouts.master')
@section('content')

 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0">Manage Category</h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="#">Home</a></li>
       <li class="breadcrumb-item active">Category</li>
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
         <h3> Add Category
          <a href="{{ route('category.view') }}" class=" btn btn-success btn-sm float-right"> <i class="fa fa-list"></i> Category List</a>
         </h3>
        </div>
               
        <div class="card-body">
         <form method="POST" action="{{ route('category.store') }}" id="myForm" enctype="multipart/form-data">
          @csrf
          <div class="form-row">

           <div class="form-group col-md-6">
            <label for="name">Name <span style="color:red;">*</span></label>
            <input type="text" name="name" class="form-control" placeholder="Enter Slider Title">
            <font style="color:red">{{ ($errors->has('name'))?($errors->first('name')):''  }}</font>
           </div>

           <div class="form-group col-md-6">
            <label for="title">Title <span style="color:red;">*</span></label>
            <input type="text" name="title" class="form-control" placeholder="Enter Designation">
            <font style="color:red">{{ ($errors->has('title'))?($errors->first('title')):'' }}</font>
           </div>

           <div class="form-group col-md-6">
            <label for="status"> Status <span style="color:red;">*</span> </label>
            <select name="status" class="form-control">
             <option value=""> Select Status </option>
             <option value="0"> Publish </option>
             <option value="1"> Draft </option>
            </select>
            <font style="color:red">{{ ($errors->has('status'))?($errors->first('status')):'' }}</font>
           </div>

           <div class="form-group col-md-6">
            <label for="image"> Image <span style="color:red;">*</span> </label>
            <input type="file" name="image" class="form-control" id="image">
            <font style="color:red">{{ ($errors->has('image'))?($errors->first('image')):'' }}</font>
           </div>

           <div class="form-group col-md-6">
            <img id="showImage" src="{{ url('upload/No-image.jpg') }}" style=" height:120px; border:1px solid #ccc;">
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
     name: {
     required: true,
    },
    title: {
     required: true,
    },
    status: {
     required: true,
    },
    image: {
     required: true,
    },
    },

    messages: {
     name: {
        required: "Please Category Name",
      },
     title: {
        required: "Please Category Title",
      },
       status: {
        required: "Please Category Status",
      },
      image: {
        required: "Please Category Image",
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
