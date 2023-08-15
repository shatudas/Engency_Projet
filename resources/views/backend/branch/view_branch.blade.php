@extends('backend.layouts.master')
@section('content')

 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> Manage branch </h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="#"> Home </a></li>
       <li class="breadcrumb-item active"> branch </li>
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
        <h3> branch List
         <a href="{{route('branch.add')}}" class=" btn btn-success btn-sm float-right">
          <i class="fa fa-plus-circle"></i> Add branch </a>
        </h3>
       </div>

       <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
                  
         <thead>
          <tr align="center"> 
           <th>SL</th>
           <th>Office </th>
           <th>Phone </th>
           <th>Email </th>
           <th>Holyday</th>
           <th>Office Time</th>
           <th>Address</th>
           <th>Status</th>
           <th>Action</th>
          </tr>
         </thead>

         <tbody>
          @foreach($alldata as $key => $branch)
           <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $branch->name }}</td>
            <td>{{ $branch->phone }}</td>
            <td>{{ $branch->email }}</td>
            <td>{{ $branch->holiday }}</td>
            <td>{{ $branch->opening_time }} {{ $branch->ending_time }}</td>
            <td>{{ $branch->address }}</td>
            <td align="center">
             @if($branch->status == '0')
              <a href="{{ route('branch.inacative',$branch->id) }}" class="btn btn-primary btn-sm">Publish</a>
              @else
              <a href="{{ route('branch.active',$branch->id) }}" class="btn btn-danger btn-sm"  > Draft </a>
             @endif 
            </td>
            <td align="center">
             <a title="Edit" href="{{ route('branch.edit',$branch->id) }}" class="btn btn-sm btn-primary mr-2" >
             <i class="fa fa-edit"></i>
             <a title="Delete" href="{{ route('branch.delete',$branch->id) }}" id="delete" class="btn btn-sm btn-danger">
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
