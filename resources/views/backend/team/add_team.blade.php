@extends('backend.layouts.master')
@section('content')

 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0">Manage Team</h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="#">Home</a></li>
       <li class="breadcrumb-item active">Team</li>
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
         <h3> Add Team
          <a href="{{ route('employer.view') }}" class=" btn btn-success btn-sm float-right"> <i class="fa fa-list"></i> Team List</a>
         </h3>
        </div>
               
        <div class="card-body">
         <form method="POST" action="{{ route('employer.store') }}" id="myForm" enctype="multipart/form-data">
          @csrf
          <div class="form-row">

           <div class="form-group col-md-6">
            <label for="name">Name <span style="color:red;">*</span></label>
            <input type="text" name="name" class="form-control" placeholder="Enter Slider Title">
            <font style="color:red">{{ ($errors->has('name'))?($errors->first('name')):''  }}</font>
           </div>

           <div class="form-group col-md-6">
            <label for="designations">Designation <span style="color:red;">*</span></label>
            <input type="text" name="designations" class="form-control" placeholder="Enter Designation">
            <font style="color:red">{{ ($errors->has('designations'))?($errors->first('designations')):'' }}</font>
           </div>

           <div class="form-group col-md-6">
            <label for="facebook">Facebook URL</label>
            <input type="text" name="facebook" class="form-control" placeholder="Enter facebook URL">
            <font style="color:red">{{ ($errors->has('facebook'))?($errors->first('facebook')):'' }}</font>
           </div>

           <div class="form-group col-md-6">
            <label for="linkdin">Linkdin URL</label>
            <input type="text" name="linkdin" class="form-control" placeholder="Enter linkdin URL">
            <font style="color:red">{{ ($errors->has('linkdin'))?($errors->first('linkdin')):'' }}</font>
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
            <label for="image"> Image </label>
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
    designations: {
     required: true,
    },
    status: {
     required: true,
    },
    },

    messages: {
     name: {
        required: "Please Employer Name",
      },
     designations: {
        required: "Please Employer Designations",
      },
       status: {
        required: "Please Employer Status",
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
