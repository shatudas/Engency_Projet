<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Vision;
use Auth;


class VisionController extends Controller
{
	
  //________Add______//
  public function add(){
   $data['editdata']= Vision::first();
   return view('backend.setting.vision.vision-page',$data);
  }
    

  //______Update______//
  public function update(Request $request, $id)
  {
   $this->validate($request,[
   'discriptsion'   =>'required'
   ]);

   $data = Vision::find($id);
   $data->id           = 1;
	  $data->discriptsion = $request->discriptsion;
	  $data->updated_by   = Auth::user()->id;
	    
	  if($request->file('image')){
    $file = $request->file('image');
    @unlink(public_path('upload/vision_image/'.$data->image));
    $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
    $file->move(public_path('upload/vision_image/'),$filename);
    $data['image'] = $filename;
   }

   $data->save();
   return redirect()->route('vision.add')->with('success','Data Update Successfully');
  }


}
