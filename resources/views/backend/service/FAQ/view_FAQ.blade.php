@extends('backend.layouts.master')
@section('content')

 <div class="content-wrapper">
  
  <div class="content-header">
   <div class="container-fluid">
    <div class="row mb-2">
     <div class="col-sm-6">
      <h1 class="m-0"> Manage FAQ </h1>
     </div>
     <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
       <li class="breadcrumb-item"><a href="#"> Home </a></li>
       <li class="breadcrumb-item active"> FAQ </li>
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
        <h3> FAQ List
         <a href="{{route('FAQ.add')}}" class=" btn btn-success btn-sm float-right">
          <i class="fa fa-plus-circle"></i> Add FAQ </a>
        </h3>
       </div>

       <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
                  
         <thead>
          <tr align="center"> 
           <th>SL</th>
           <th>Service</th>
           <th>Question</th>
           <th>Answer</th>
           <th>Status</th>
           <th>Action</th>
          </tr>
         </thead>

         <tbody>
          @foreach($alldata as $key => $value)
           <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $value['service']['name'] }}</td>
            
            <td>
             @php
              $datas = json_decode($value->question);
             @endphp
             @if( $datas != Null)
              @foreach($datas as $edit)
               <span>{{ $edit }}</span><br>
              @endforeach
             @endif
            </td>


            <td>
             @php
              $datas = json_decode($value->anwser);
             @endphp
             @if( $datas != Null)
              @foreach($datas as $edit)
               <span>{{ $edit }}</span><br>
              @endforeach
             @endif
            </td>

            
            <td align="center">
             @if($value->status =='0')
              <a href="{{ route('FAQ.inacative',$value->id) }}" class="btn btn-primary btn-sm">Publish</a>
              @elseif($value->status =='1')
              <a href="{{ route('FAQ.active',$value->id) }}" class="btn btn-danger btn-sm"  > Draft </a>
             @endif 
            </td>

            <td align="center">
             <a title="Edit" href="{{ route('FAQ.edit',$value->id) }}" class="btn btn-sm btn-primary mr-2" >
             <i class="fa fa-edit"></i>
             <a title="Delete" href="{{ route('FAQ.delete',$value->id) }}" id="delete" class="btn btn-sm btn-danger">
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
