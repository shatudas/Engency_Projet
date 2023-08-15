@extends('backend.layouts.master')
@section('content')

 <!-- Content  page -->
 <div class="content-wrapper bg-white" >
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> Manage Authority </h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home </a></li>
       <li class="breadcrumb-item active"> Authority </li>
      </ol>
     </div>
    </div>
   </div>
  </div>

  <section class="content">
   <div class="container-fluid">
    
     <div class="row justify-content-center">
      <div class="col-10">
       <div class="card">

        <div class="card-header">
         <h3> Authority </h3>
        </div>

        <div class="card-body">
         <form method="POST" action="{{ route('authority.update',$editdata->id) }}" enctype="multipart/form-data" id="myForm">
           @csrf

           <div class="form-row">

            <div class="form-group col-md-6">
             <label for="heading"> Heading </label>
             <input type="text" name="heading" class="form-control" value="{{ $editdata->heading }}">
             <font style="color:red">{{ ($errors->has('heading'))?($errors->first('heading')):'' }}</font>
            </div>

            <div class="form-group col-md-6">
             <label for="title"> Title </label>
             <input type="text" name="title" class="form-control" value="{{ $editdata->title }}">
             <font style="color:red">{{ ($errors->has('title'))?($errors->first('title')):'' }}</font>
            </div>

            <div class="form-group col-md-12">
             <label for="title"> Authority Detalis </label>
             <textarea name="discriptsion" class="form-control" rows="5">
              {!! $editdata->discriptsion !!} 
             </textarea>
             <font style="color:red">{{ ($errors->has('discriptsion'))?($errors->first('discriptsion')):'' }}</font>
            </div>

            <div class="form-group col-md-4">
             <label for="image"> Image </label>
             <input type="file" name="image" class="form-control" id="image">
             <font style="color:red">{{ ($errors->has('image'))?($errors->first('image')):'' }}</font>
            </div>

            <div class="form-group col-md-8" align="center">
             <img id="showImage" src="{{ !empty($editdata->image)?url('upload/authority_image/'.$editdata->image):url('upload/No-image.jpg') }}" style="width:200px; height:150px; margin-top:30px; border:1px solid #ccc;" align="center">
            </div>  

           </div>

         @php
          $datas = json_decode($editdata->sub_heading);
          $val   = json_decode($editdata->sub_title);
          $val2  = json_decode($editdata->sub_discriptsion);
         @endphp
         
         @if( $datas != Null)
         @foreach($datas as $key => $edit)

          <div class="delete_whole_extra_add bg-light" id="delete_whole_extra_add" >
           <div class="add_item">
            <div class="form-row">

             <div class="form-group col-md-6">
              <input type="text" name="sub_heading[]" value="{{ $edit }}" class="form-control" placeholder="Enter Amount..">
             </div>

             <div class="form-group col-md-6">
              <input type="text" name="sub_title[]" value="{{ isset($val[$key]) ? $val[$key] : "" }}" class="form-control" placeholder="Enter Amount..">
             </div>

             <div class="form-group col-md-12">
              <textarea name="sub_discriptsion[]" class="form-control" rows="5">
               {{  isset($val2[$key]) ? $val2[$key] : ""  }} 
              </textarea>
             </div>

             <div class="form-group col-md-12">
              <div class="form-row float-right">
               <span class="btn btn-success addeventmore" >
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

         @endforeach
         @else

         <div class="card-body">
          <div class="add_item">
           <div class="form-row">
            <div class="form-group col-md-6" style="padding-top:30px;">
             <h4> Authority Detalis Add </h4>
            </div>
            <div class="form-group col-md-6 " style="padding-top:30px; float:right;">
             <span class="btn btn-success addeventmore float-right">
              <i class="fa fa-plus-circle"></i>
             </span>
            </div>
           </div>
          </div>
         </div>

         @endif

         <div class="form-row">
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


  <div class="container" style="visibility: hidden;">
   <div class="whole_extra_item_add w-100" id="whole_extra_item_add">
    <div class="delete_whole_extra_add w-100" id="delete_whole_extra_add">
     <div class="form-row bg-none justify-content-center">

      <div class="form-group col-md-6">
       <label for="sub_heading">Add Heading </label>
       <input type="text" name="sub_heading[]" class="form-control">
      </div>

      <div class="form-group col-md-6">
       <label for="sub_title">Add Title </label>
       <input type="text" name="sub_title[]" class="form-control">
      </div>

      <div class="form-group col-md-12">
       <label for="sub_discriptsion"> Add  Detalis </label>
       <textarea  name="sub_discriptsion[]" class="form-control" rows="5"></textarea>
      </div>
     
      <div class="form-group col-md-12" style="padding-top:30px; float:right;">
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