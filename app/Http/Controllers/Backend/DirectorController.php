<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Director;
use Auth;
use Image;

class DirectorController extends Controller
{
 
 //______View______//
 public function view()
  {
   $data['alldata'] = Director::all();
   return view ('backend.director.view_director',$data); 
  }


 //______Add______//
 public function add()
  {
   return view('backend.director.add_director'); 
  }


 //_______Store________//
 public function store(Request $request)
  {    
		 $this->validate($request,[
		 'name'         =>'required',
		 'designations' =>'required',
			'status'       =>'required'
		 ]);

			$data = new Director();
			$data->name         = $request->name;
			$data->designations = $request->designations;
			$data->facebook     = $request->facebook ;
			$data->linkdin      = $request->linkdin ;
			$data->status       = $request->status;
			$data->created_by   = Auth::user()->id;

	  if($request->file('image'))
				{
				 $file=$request->file('image');
				 $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
				 $file->move(public_path('upload/director_image'),$filename);
				 $data['image']=$filename;
				}
				$data->save();
				return redirect()->route('director.view')->with('success','Data Upload Successfully');
  }


  //________edit________//
  public function edit($id)
	  {
	   $data['editdata']=Director::find($id);
	   return view('backend.director.edit_director',$data);
	  }


  //______update________//
   public function update(Request $request,$id)
   {
   
   $this->validate($request,[
		 'name'         =>'required',
		 'designations' =>'required',
			'status'       =>'required'
		 ]);

    $data =Director::find($id);
    $data->name         = $request->name;
		 	$data->designations = $request->designations;
		 	$data->facebook     = $request->facebook ;
		 	$data->linkdin      = $request->linkdin ;
		 	$data->status       = $request->status;
    $data->updated_by   = Auth::user()->id;

    if($request->file('image')){
     $file = $request->file('image');
     @unlink(public_path('upload/director_image/'.$data->image));
     $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
     $file->move(public_path('upload/director_image/'),$filename);
     $data['image'] = $filename;
    }

    $data->save();
    return redirect()->route('director.view')->with('success','data Update Successfully');
   }


  //______inactive_______//
	 public function inacative($id)
		{
		 Director::find($id)->where('id',$id)->update(['status'=>1]);
		 return redirect()->back();
		}
		  

		//______active_______//
	 public function active($id)
		{
		 Director::find($id)->where('id',$id)->update(['status'=>0]);
		 return redirect()->back();
		}


  //_____delete______//
	 public function delete($id)
	 {
	  $data=Director::find($id);
	  if(file_exists('upload/director_image/'.$data->image) AND !empty($data->image)){
	  unlink('upload/director_image/'.$data->image);
	 }
		 $data->delete();
		 return redirect()->route('director.view')->with('error','Data Deleted Successfully');
	 }

}
