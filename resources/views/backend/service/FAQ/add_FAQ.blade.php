@extends('backend.layouts.master')
@section('content')

 <div class="content-wrapper bg-white">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0">Manage FAQ</h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="#">Home</a></li>
       <li class="breadcrumb-item active">FAQ</li>
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
         <h3> Add FAQ
          <a href="{{ route('FAQ.view') }}" class=" btn btn-success btn-sm float-right"> <i class="fa fa-list"></i> Service List</a>
         </h3>
        </div>
               
        <div class="card-body">
         <form method="POST" action="{{ route('FAQ.store') }}" id="myForm" enctype="multipart/form-data">
          @csrf
          <div class="form-row">

           <div class="form-group col-md-12">
            <label for="category_id"> Category Name <span style="color:red;">*</span></label>
            <select name="category_id"  class="form-control">
             <option value="" >Select Category</option>
             @foreach($service as $value)
              <option value="{{ $value->id }}" > {{ $value->name }} </option>
             @endforeach
            </select>
            <font style="color:red">{{ ($errors->has('category_id'))?($errors->first('category_id')):''  }}</font>
           </div>
           
  
           <div class="form-group col-md-12">
            <label for="Question"> Question </label>
            <input type="text" name="question[]" class="form-control" placeholder="Enter Question">
           </div>

           <div class="form-group col-md-12">
            <label for="anwser"> Answer </label>
            <input type="text" name="anwser[]" class="form-control" placeholder="Enter answer">
           </div>


           <div class="form-group col-md-12">
            <label for="status"> Status <span style="color:red;">*</span> </label>
            <select name="status" class="form-control">
             <option value=""> Select Status </option>
             <option value="0"> Publish </option>
             <option value="1"> Draft </option>
            </select>
            <font style="color:red">{{ ($errors->has('status'))?($errors->first('status')):'' }}</font>
           </div>

           <div class="form-group col-md-12 add_item" style="padding-top:30px;">
            <div class="form-row">
              <div class="form-group col-md-12">
               <span class="btn btn-success addeventmore float-right">
                <i class="fa fa-plus-circle"></i>
               </span>
              </div>
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
       <label for="Question">Question</label>
       <input type="text" name="question[]" class="form-control">
      </div>

      <div class="form-group col-md-12">
       <label for="anwser">Answer</label>
       <input type="text" name="anwser[]" class="form-control">
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
    status: {
     required: true,
    },
    },

    messages: {
     category_id: {
        required: "Please Category Name",
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
