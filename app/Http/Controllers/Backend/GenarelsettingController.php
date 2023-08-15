<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\GenarelSetting;
use Auth;
use Image;

class GenarelsettingController extends Controller
{

  
  //----Add------//
  public function add(){
  $data['editData'] = GenarelSetting::first();
   return view('backend.setting.genarel_setting.genarel-setting-page',$data);
  }


  //----Update------//
  public function update(Request $request,$id)
  {

   $this->validate($request,[
   'title'    =>'required',
   'name'     =>'required',
   'phone'    =>'required',
   'email'    =>'required',
   'address'  =>'required'
   ]);

    $data =GenarelSetting::find($id);
    $data->id          = 1;
	  $data->title       = $request->title;
	  $data->name        = $request->name;
	  $data->phone       = $request->phone;
	  $data->email       = $request->email;
	  $data->address     = $request->address;
	  $data->updated_by  = Auth::user()->id;
	  	  
	  if($request->file('logo')){
    $file = $request->file('logo');
    @unlink(public_path('upload/GenarelSetting/'.$data->logo));
    $filename = 'logo'.'.'.$file->getClientOriginalExtension();
    $file->move(public_path('upload/GenarelSetting/'),$filename);
    $data['logo'] = $filename;
   }

   if($request->file('favicon')){
    $file = $request->file('favicon');
    @unlink(public_path('upload/GenarelSetting/'.$data->favicon));
    $filename = 'favicon'.'.'.$file->getClientOriginalExtension();
    $file->move(public_path('upload/GenarelSetting/'),$filename);
    $data['favicon'] = $filename;
   }

   $data->save();
   return redirect()->route('genarelsetting.add')->with('success','Data Update Successfully');
  }

}
