<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\About;
use Auth;

class AboutController extends Controller
{
    

 //________Add______//
  public function add(){
   $data['editdata']= About::first();
   return view('backend.setting.about.about-page',$data);
  }
    

  //______Update______//
  public function update(Request $request, $id)
  {
   $this->validate($request,[
   'title'          =>'required',
   'discriptsion'   =>'required'
   ]);

   $data = About::find($id);
   $data->id           = 1;
	  $data->title        = $request->title;
	  $data->discriptsion = $request->discriptsion;
	  $data->updated_by   = Auth::user()->id;
	    
	  if($request->file('image')){
    $file = $request->file('image');
    @unlink(public_path('upload/about_image/'.$data->image));
    $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
    $file->move(public_path('upload/about_image/'),$filename);
    $data['image'] = $filename;
   }

   $data->save();
   return redirect()->route('about.add')->with('success','Data Update Successfully');
  }



}
