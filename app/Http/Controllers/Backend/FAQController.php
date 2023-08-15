<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ServicesCategory;
use App\Model\Service;
use App\Model\FAQ;
use Auth;
use Image;


class FAQController extends Controller
{
  

  //______View______//
  public function view()
	  {
	   $data['alldata'] = FAQ::all();
	   return view ('backend.service.FAQ.view_FAQ',$data); 
	  }


	 //______Add______//
  public function add()
  {
  	$data['service'] = ServicesCategory::where('status',0)->get();
   return view('backend.service.FAQ.add_FAQ',$data); 
  }


  //_______Store________//
  public function store(Request $request)
  {    
    $this->validate($request,[
     'category_id' =>'required',
     'status'      =>'required'
    ]); 

    $data = new FAQ();
    $data->category_id   = $request->category_id;
    $data->status        = $request->status;
    $data->question      = json_encode($request->question);
    $data->anwser        = json_encode($request->anwser);
    $data->created_by    = Auth::user()->id;

    $data->save();
    return redirect()->route('FAQ.view')->with('success','Data Upload Successfully');
  }


  //________edit________//
  public function edit($id)
   {
    $data['service'] = ServicesCategory::where('status',0)->get();
    $data['editdata']=FAQ::find($id);
    return view('backend.service.FAQ.edit_FAQ',$data);
   }


   //______update________//
   public function update(Request $request,$id)
   {
    
     $this->validate($request,[
     'category_id' =>'required',
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
