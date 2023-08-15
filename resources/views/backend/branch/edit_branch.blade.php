@extends('backend.layouts.master')
@section('content')

 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0">Manage Branch</h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="#">Home</a></li>
       <li class="breadcrumb-item active">Branch</li>
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
         <h3> Add Branch
          <a href="{{ route('branch.view') }}" class=" btn btn-success btn-sm float-right"> <i class="fa fa-list"></i> View Branch</a>
         </h3>
        </div>
               
        <div class="card-body">
         <form method="POST" action="{{ route('branch.update',$editdata->id) }}" id="myForm" enctype="multipart/form-data">
          @csrf

          <div class="form-row">

           <div class="form-group col-md-6">
            <label for="name">Branch Name <span style="color:red;">*</span></label>
            <input type="text" name="name" class="form-control" value="{{ $editdata->name }}" placeholder="Enter Branch Name">
            <font style="color:red">{{ ($errors->has('name'))?($errors->first('name')):''  }}</font>
           </div>

           <div class="form-group col-md-6">
            <label for="email">Email </label>
            <input type="text" name="email" class="form-control" value="{{ $editdata->email }}" placeholder="Enter Compamy email">
            <font style="color:red">{{ ($errors->has('email'))?($errors->first('email')):'' }}</font>
           </div>

           <div class="form-group col-md-6">
            <label for="phone">Phone <span style="color:red;">*</span></label>
            <input type="text" name="phone" class="form-control" value="{{ $editdata->phone }}" placeholder="Enter Compamy phone">
            <font style="color:red">{{ ($errors->has('phone'))?($errors->first('phone')):'' }}</font>
           </div>

           <div class="form-group col-md-6">
            <label for="address">Address <span style="color:red;">*</span></label>
            <input type="text" name="address" class="form-control" value="{{ $editdata->address }}" placeholder="Branch Address">
            <font style="color:red">{{ ($errors->has('address'))?($errors->first('address')):'' }}</font>
           </div>

           <div class="form-group col-md-6">
            <label for="holiday">Holiday </label>
            <input type="text" name="holiday" class="form-control" value="{{ $editdata->holiday }}" placeholder="Enter Holiday">
            <font style="color:red">{{ ($errors->has('holiday'))?($errors->first('holiday')):'' }}</font>
           </div>

           <div class="form-group col-md-6">
            <label for="opening_time">Opening Time <span style="color:red;">*</span></label>
            <input type="text" name="opening_time" class="form-control" value="{{ $editdata->opening_time }}" placeholder="Opening Time">
            <font style="color:red">{{ ($errors->has('opening_time'))?($errors->first('opening_time')):'' }}</font>
           </div>

           <div class="form-group col-md-6">
            <label for="ending_time">Ending Time <span style="color:red;">*</span></label>
            <input type="text" name="ending_time" class="form-control" value="{{ $editdata->ending_time }}" placeholder="Ending Time">
            <font style="color:red">{{ ($errors->has('ending_time'))?($errors->first('ending_time')):'' }}</font>
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
