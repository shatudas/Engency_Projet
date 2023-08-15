<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ServicesCategory;
use App\Model\Service;
use Auth;
use Image;

class ServicesController extends Controller
{
 
 //______View______//
  public function view()
	  {
	   $data['alldata'] = Service::all();
	   return view ('backend.service.package.view_service',$data); 
	  }


	 //______Add______//
  public function add()
  {
  	$data['service'] = ServicesCategory::where('status',0)->get();
   return view('backend.service.package.add_service',$data); 
  }


  //_______Store________//
  public function store(Request $request)
  {    
    $this->validate($request,[
     'category_id' =>'required|unique:services,category_id',
     'title'       =>'required',
     'heading'     =>'required',
     'status'      =>'required'
    ]); 

    $data = new Service();
    $data->category_id     = $request->category_id;
    $data->title           = $request->title;
    $data->heading         = $request->heading;
    $data->short_detalis   = $request->short_detalis;
    $data->description     = $request->description;
    $data->status          = $request->status;
    $data->services_point  = json_encode($request->services_point);
    $data->created_by      = Auth::user()->id;

    if($request->file('image'))
    {
     $file=$request->file('image');
     $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
     $file->move(public_path('upload/Service_image'),$filename);
     $data['image']=$filename;
     }
     $data->save();
     return redirect()->route('services.view')->with('success','Data Upload Successfully');
  }


  //________edit________//
  public function edit($id)
   {
    $data['service'] = ServicesCategory::where('status',0)->get();
    $data['editdata']=Service::find($id);
    return view('backend.service.package.edit_service',$data);
   }


   //______update________//
   public function update(Request $request,$id)
   {
    
     $this->validate($request,[
     'title'       =>'required',
     'heading'     =>'required',
     'status'      =>'required'
    ]); 

    $data = Service::find($id);
    $data->category_id     = $request->category_id;
    $data->title           = $request->title;
    $data->heading         = $request->heading;
    $data->short_detalis   = $request->short_detalis;
    $data->description     = $request->description;
    $data->status          = $request->status;
    $data->services_point  = json_encode($request->services_point);
    $data->updated_by = Auth::user()->id;

    if($request->file('image')){
     $file = $request->file('image');
     @unlink(public_path('upload/Service_image/'.$data->image));
     $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
     $file->move(public_path('upload/Service_image/'),$filename);
     $data['image'] = $filename;
    }

    $data->save();
    return redirect()->route('services.view')->with('success','data Update Successfully');
   }



  //______inactive_______//
  public function inacative($id)
  {

   Service::find($id)->where('id',$id)->update(['status'=>1]);
   return redirect()->back();
  }
    

  //______active_______//
  public function active($id)
  {

   Service::find($id)->where('id',$id)->update(['status'=>0]);
   return redirect()->back();
  }

  //_____delete______//
  public function delete($id)
  {
   $data=Service::find($id);
   if(file_exists('upload/Service_image/'.$data->image) AND !empty($data->image)){
   unlink('upload/Service_image/'.$data->image);
  }
   $data->delete();
   return redirect()->route('service.view')->with('error','Data Deleted Successfully');
  }
}
