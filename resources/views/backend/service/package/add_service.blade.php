@extends('backend.layouts.master')
@section('content')

 <div class="content-wrapper bg-white">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0">Manage Service</h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="#">Home</a></li>
       <li class="breadcrumb-item active">Service</li>
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
         <h3> Add Service
          <a href="{{ route('services.view') }}" class=" btn btn-success btn-sm float-right"> <i class="fa fa-list"></i> Service List</a>
         </h3>
        </div>
               
        <div class="card-body">
         <form method="POST" action="{{ route('services.store') }}" id="myForm" enctype="multipart/form-data">
          @csrf
          <div class="form-row">

           <div class="form-group col-md-6">
            <label for="category_id"> Category Name <span style="color:red;">*</span></label>
            <select name="category_id"  class="form-control">
             <option value="" >Select Category</option>
             @foreach($service as $value)
              <option value="{{ $value->id }}" > {{ $value->name }} </option>
             @endforeach
            </select>
            <font style="color:red">{{ ($errors->has('category_id'))?($errors->first('category_id')):''  }}</font>
           </div>
           
           <div class="form-group col-md-6">
            <label for="title">Title <span style="color:red;">*</span></label>
            <input type="text" name="title" class="form-control" placeholder="Enter  Service Title">
            <font style="color:red">{{ ($errors->has('title'))?($errors->first('title')):''  }}</font>
           </div>

           <div class="form-group col-md-12">
            <label for="heading">Heading <span style="color:red;">*</span></label>
            <input type="text" name="heading" class="form-control" placeholder="Enter Service Heading">
            <font style="color:red">{{ ($errors->has('heading'))?($errors->first('heading')):'' }}</font>
           </div>

           <div class="form-group col-md-6">
            <label for="short_detalis">Short Detalis</label>
            <textarea type="text" name="short_detalis" class="form-control" placeholder="Enter Short Detalis" rows="5"></textarea>
           </div>

           <div class="form-group col-md-6">
            <label for="description">Description</label>
            <textarea type="text" name="description" class="form-control" placeholder="Enter Service Description" rows="5"></textarea>
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
           </div>

           <div class="form-group col-md-12">
            <img id="showImage" src="{{ url('upload/No-image.jpg') }}" style=" height:150px; width:300px; border:1px solid #ccc;">
           </div>

           <div class="card-body">
            <div class="add_item">
             <div class="form-row">
              <div class="form-group col-md-6" style="padding-top:30px;">
               <h4> Service Point </h4>
              </div>
              <div class="form-group col-md-6 " style="padding-top:30px; float:right;">
               <span class="btn btn-success addeventmore float-right">
                <i class="fa fa-plus-circle"></i>
               </span>
              </div>
             </div>
            </div>
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



  <div class="container" style="visibility: hidden;">
   <div class="whole_extra_item_add w-100" id="whole_extra_item_add">
    <div class="delete_whole_extra_add w-100" id="delete_whole_extra_add">
     <div class="form-row bg-none justify-content-center">

      <div class="form-group col-md-12">
       <input type="text" name="services_point[]" class="form-control">
      </div>
    
      <div class="form-group col-md-12" style="float:right;">
       <div class="form-row float-right">
        <span class="btn btn-success addeventmore">
         <i class="fa fa-plus-circle"></i>
        </span>
        <span class="btn btn-danger removeeventmore" style="margin-left:4px;">
         <i class="fa fa-minus-circle"></i>
        </span>
       </div>
      </div>

     </div>
    </div>
   </div>
  </div>



  <script type="text/javascript">
   $(document).ready(function (){
    var counter = 0;
    $(document).on("click",".addeventmore", function() {
     var whole_extra_item_add = $("#whole_extra_item_add").html();
     $(this).closest(".add_item").append(whole_extra_item_add);
     counter++;
    });
    $(document).on("click", ".removeeventmore", function (event){
     $(this).closest(".delete_whole_extra_add").remove();
     counter -=1
    });
   });
  </script>


<script>
 $(function () {
  $('#myForm').validate({
   rules: {
     category_id: {
     required: true,
    },
    title: {
     required: true,
    },
    heading: {
     required: true,
    },
    status: {
     required: true,
    },
    },

    messages: {
     category_id: {
        required: "Please Category Name",
      },
    title: {
        required: "Please Category Title",
      },
       heading: {
        required: "Please Category Title",
      },
      status: {
        required: "Please Category Status",
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
