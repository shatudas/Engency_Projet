<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ServicesCategory;
use Auth;
use Image;

class ServiceCategoryController extends Controller
{
  //______View______//
  public function view()
	  {
	   $data['alldata'] = ServicesCategory::all();
	   return view ('backend.service.category.view_category',$data); 
	  }


	 //______Add______//
  public function add()
  {
   return view('backend.service.category.add_category'); 
  }


  //_______Store________//
  public function store(Request $request)
  {    
    $this->validate($request,[
     'status'     =>'required',
     'title'      =>'required',
     'status'     =>'required',
     'image'      =>'required'
    ]);

    $data = new ServicesCategory();
    $data->name       = $request->name;
    $data->title      = $request->title;
    $data->status     = $request->status;
    $data->created_by = Auth::user()->id;

    if($request->file('image'))
    {
      $file=$request->file('image');
      $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
      $file->move(public_path('upload/category_image'),$filename);
      $data['image']=$filename;
     }
     $data->save();
     return redirect()->route('category.view')->with('success','Data Upload Successfully');
  }


  //________edit________//
  public function edit($id)
   {
    $data['editdata']=ServicesCategory::find($id);
    return view('backend.service.category.edit_category',$data);
   }


   //______update________//
   public function update(Request $request,$id)
   {
    
    $this->validate($request,[
     'status'     =>'required',
     'title'      =>'required',
     'status'     =>'required'
    ]);


    $data = ServicesCategory::find($id);
    $data->name       = $request->name;
    $data->title      = $request->title;
    $data->status     = $request->status;
    $data->updated_by = Auth::user()->id;

    if($request->file('image')){
     $file = $request->file('image');
     @unlink(public_path('upload/category_image/'.$data->image));
     $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
     $file->move(public_path('upload/category_image/'),$filename);
     $data['image'] = $filename;
    }

    $data->save();
    return redirect()->route('category.view')->with('success','data Update Successfully');
   }



  //______inactive_______//
  public function inacative($id)
  {
   ServicesCategory::find($id)->where('id',$id)->update(['status'=>1]);
   return redirect()->back();
  }
    

  //______active_______//
  public function active($id)
  {
   ServicesCategory::find($id)->where('id',$id)->update(['status'=>0]);
   return redirect()->back();
  }


  //_____delete______//
  public function delete($id)
  {
   $data=ServicesCategory::find($id);
   if(file_exists('upload/category_image/'.$data->image) AND !empty($data->image)){
   unlink('upload/category_image/'.$data->image);
  }
   $data->delete();
   return redirect()->route('services.view')->with('error','Data Deleted Successfully');
  }











}
