<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\History;
use Auth;
use Image;


class HistoryController extends Controller
{
    //________Add______//
  public function add(){
   $data['editdata']= History::first();
   return view('backend.setting.history.history-page',$data);
  }
    

  //______Update______//
  public function update(Request $request, $id)
  {
   $this->validate($request,[
   'discriptsion'   =>'required'
   ]);

    $data = History::find($id);
    $data->id            = 1;
	  $data->discriptsion = $request->discriptsion;
	  $data->updated_by   = Auth::user()->id;
	    
	  if($request->file('image')){
    $file = $request->file('image');
    @unlink(public_path('upload/history_image/'.$data->image));
    $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
    $file->move(public_path('upload/history_image/'),$filename);
    $data['image'] = $filename;
   }

   $data->save();
   return redirect()->route('history.add')->with('success','Data Update Successfully');
  }


}
