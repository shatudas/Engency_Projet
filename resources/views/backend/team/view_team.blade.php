@extends('backend.layouts.master')
@section('content')

 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> Manage Team </h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="#"> Home </a></li>
       <li class="breadcrumb-item active"> Team </li>
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
        <h3> Team List
         <a href="{{route('employer.add')}}" class=" btn btn-success btn-sm float-right">
          <i class="fa fa-plus-circle"></i> Add Team </a>
        </h3>
       </div>

       <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
                  
         <thead>
          <tr align="center"> 
           <th>SL</th>
           <th>Name</th>
           <th>Designation</th>
           <th>Image</th>
           <th>Social Media</th>
           <th>Status</th>
           <th>Action</th>
          </tr>
         </thead>

         <tbody>
          @foreach($alldata as $key => $team)
           <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $team->name }}</td>
            <td>{{ $team->designations }}</td>
            <td align="center">
             <img class="img-fluid" src="{{ !empty($team->image)?url('upload/team_image/'.$team->image):url('upload/No-image.jpg') }}" style="height:70px; width:70px;">
            </td>

            <td  class="social_media " align="center">
             <a href="{{ $team->facebook }}" class="pt-2" target="_blank">
              <i class="fa fa-facebook"></i>
             </a>
             <a href="{{ $team->linkdin }}" class="pt-2" target="_blank">
               <i class="fa fa-linkedin"></i>
             </a>
            </td>

            <td align="center">
             @if($team->status == '0')
              <a href="{{ route('employer.inacative',$team->id) }}" class="btn btn-primary btn-sm">Publish</a>
              @else
              <a href="{{ route('employer.active',$team->id) }}" class="btn btn-danger btn-sm"  > Draft </a>
             @endif 
            </td>

            
            <td align="center">
             <a title="Edit" href="{{ route('employer.edit',$team->id) }}" class="btn btn-sm btn-primary mr-2" >
             <i class="fa fa-edit"></i>
             <a title="Delete" href="{{ route('employer.delete',$team->id) }}" id="delete" class="btn btn-sm btn-danger">
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


  <style type="text/css">
   .social_media{
     margin-top:10px;
    }
   
   .social_media a {
    background-color:#10A7E3;
    padding:10px;
    text-align:
   }

   .social_media i{
    color:#fff;
    font-size:15px;
   }
   
   .social_media a:hover{
    background-color:#111E90;
   }
  </style>



@endsection
