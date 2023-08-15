@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 
 <div class="content-header">
  <div class="container-fluid">
   <div class="row mb-2">
    <div class="col-sm-6">
     <h1 class="m-0">Client Massage</h1>
    </div>
    <div class="col-sm-6">
     <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Massage</li>
     </ol>
    </div>
   </div>
  </div>
 </div>

 <!-- Main content -->
 <section class="content">
  <div class="container-fluid">
   <div class="row">
    <div class="col-12">

     <div class="card">
      
      <div class="card-header">
       <h3> Client Massagee </h3>
      </div>
              
      <div class="card-body">
       <table id="example1" class="table table-bordered table-striped">
        <thead>
         <tr>
          <th> Name </th>
          <th> Subject </th>
          <th> Email </th>
          <th align="center">Action</th>
         </tr>
        </thead>
        <tbody>
         @foreach($alldata as $massage)
         <tr>
          <td>{{ $massage->name }}</td>
          <td>{{ $massage->subject }}</td>
          <td>{{ $massage->email }}</td>
          <td>    
           <center>
            <a title="view" href="#" class="btn btn-sm btn-primary details" data-id="{{ $massage->id }}"  data-toggle="modal"  data-target="#exampleModal"><i class="fa fa-eye"></i></a>
            <a title="Delete" href="{{ route('user.contact.delete',$massage->id) }}" id="delete" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i>
            </a>
           </center>
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
 

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel"> Client Massage </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">&times;</span>
      </button>
     </div>
     <div class="container">
      <div class="row">
       
       <div class="col-md-4">
        <strong class="p-5">Name</strong>
       </div>
       <div class="col-md-8">
        <span class="p-5" id="nameData"></span>
       </div>
     
       <div class="col-md-4">
        <strong class="p-5">Email</strong>
       </div>
       <div class="col-md-8">
        <span class="p-5" id="emailData"></span>
       </div>

       <div class="col-md-12">
        <strong class="p-5">Subject</strong>
       </div>
       <div class="col-md-12">
        <span class="py-5 pl-5" id="subjectData"></span>
       </div>
    
       <div class="col-md-12">
        <strong  class="p-5">Massage</strong>
       </div>
       <div class="col-md-12">
        <p  class="p-5" id="massageData"></p>
       </div>

      </div>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     </div>
    </div>
   
   </div>
  </div>
 
  @endsection


  @push('js')
   <script>
    $('body').on('click','.details', function(){
    let id = $(this).data('id');
    $.ajax({
     url: "{{ route('get.client.message') }}",
     type: 'GET',
     data: { id: id },
     success: function(data)
      {
       document.getElementById('nameData').innerHTML = data.name;
       document.getElementById('emailData').innerHTML  = data.email;
       document.getElementById('subjectData').innerHTML = data.subject;
       document.getElementById('massageData').innerHTML  = data.message;
      }
     });
    });
   </script>
  @endpush