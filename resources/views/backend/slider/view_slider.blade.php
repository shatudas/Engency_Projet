@extends('backend.layouts.master')
@section('content')

 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> Manage Slider </h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="#"> Home </a></li>
       <li class="breadcrumb-item active"> Slider </li>
      </ol>
     </div>
    </div>
   </div>
  </div>

  <section class="content">
   <div class="container-fluid">
    <div class="row">
     <div class="col-12">
      <div class="card">

       <div class="card-header">
        <h3> Slider List
         <a href="{{route('slider.add')}}" class=" btn btn-success btn-sm float-right">
          <i class="fa fa-plus-circle"></i> Add Slider </a>
        </h3>
       </div>

       <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
                  
         <thead>
          <tr align="center"> 
           <th>SL</th>
           <th>Title</th>
           <th>Image</th>
           <th>Status</th>
           <th>Action</th>
          </tr>
         </thead>

         <tbody>
          @foreach($alldata as $key => $slider)
           <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $slider->name }}</td>
            <td align="center">
             <img class="img-fluid" src="{{ !empty($slider->image)?url('upload/slider_image/'.$slider->image):url('upload/No-image.jpg') }}" alt="User profile picture" style="height:100px; width:170px;">
            </td>

            <td align="center">
             @if($slider->status == '0')
              <a href="{{ route('slider.inacative',$slider->id) }}" class="btn btn-primary btn-sm">Publish</a>
              @else
              <a href="{{ route('slider.active',$slider->id) }}" class="btn btn-danger btn-sm"  > Draft </a>
             @endif 
            </td>
                 
            <td align="center">
             <a title="Edit" href="{{ route('slider.edit',$slider->id) }}" class="btn btn-sm btn-primary mr-2" >
             <i class="fa fa-edit"></i>
             <a title="Delete" href="{{ route('slider.delete',$slider->id) }}" id="delete" class="btn btn-sm btn-danger">
             <i class="fa fa-trash"></i>
            </td>
   
           </tr>
          @endforeach
         </tbody>

        </table>
       </div>
       
      </div>
     </div> 
    </div>
   </div> 
  </section>
    
 </div>

@endsection
