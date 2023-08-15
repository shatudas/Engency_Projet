<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Finance;
use Auth;
use Image;

class FinanceAdmistrationController extends Controller
{
   
  //________Add______//
  public function add(){
   $data['editdata']= Finance::first();
   return view('backend.admistration.finance.finance-page',$data);
  }
    

  //______Update______//
  public function update(Request $request, $id)
  {
   $this->validate($request,[
   'discriptsion'   =>'required'
   ]);

    $data = Finance::find($id);
    $data->id                = 1;
    $data->heading           = $request->heading;
	  $data->title             = $request->title;
	  $data->discriptsion      = $request->discriptsion;
    $data->sub_heading       = json_encode($request->sub_heading);
    $data->sub_title         = json_encode($request->sub_title);
    $data->sub_discriptsion  = json_encode($request->sub_discriptsion);
	  $data->updated_by        = Auth::user()->id;
	    
	  if($request->file('image')){
    $file = $request->file('image');
    @unlink(public_path('upload/finance_image/'.$data->image));
    $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
    $file->move(public_path('upload/finance_image/'),$filename);
    $data['image'] = $filename;
   }


   $data->save();
   return redirect()->route('finance.add')->with('success','Data Update Successfully');
  }


}
