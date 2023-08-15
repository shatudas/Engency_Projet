<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Team;
use Auth;
Use Image;

class TeamController extends Controller
{
     //______view_______//
 public function view()
  {
   $data['alldata'] = Team::all();
   return view ('backend.team.view_team',$data); 
  }


 //______Add______//
 public function add()
  {
   return view('backend.team.add_team'); 
  }


 //_______Store________//
 public function store(Request $request)
  {    
		 $this->validate($request,[
		 'name'         =>'required',
		 'designations' =>'required',
			'status'       =>'required'
		 ]);

			$data = new Team();
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
				 $file->move(public_path('upload/team_image'),$filename);
				 $data['image']=$filename;
				}
				$data->save();
				return redirect()->route('employer.view')->with('success','Data Upload Successfully');
  }


  //________edit________//
  public function edit($id)
	  {
	   $data['editdata']=Team::find($id);
	   return view('backend.team.edit_team',$data);
	  }


  //______update________//
   public function update(Request $request,$id)
   {
   
   $this->validate($request,[
		 'name'         =>'required',
		 'designations' =>'required',
			'status'       =>'required'
		 ]);

    $data =Team::find($id);
    $data->name         = $request->name;
		 	$data->designations = $request->designations;
		 	$data->facebook     = $request->facebook ;
		 	$data->linkdin      = $request->linkdin ;
		 	$data->status       = $request->status;
    $data->updated_by   = Auth::user()->id;

    if($request->file('image')){
     $file = $request->file('image');
     @unlink(public_path('upload/team_image/'.$data->image));
     $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
     $file->move(public_path('upload/team_image/'),$filename);
     $data['image'] = $filename;
    }

    $data->save();
    return redirect()->route('employer.view')->with('success','data Update Successfully');
   }


  //______inactive_______//
	 public function inacative($id)
		{
		 Team::find($id)->where('id',$id)->update(['status'=>1]);
		 return redirect()->back();
		}
		  

		//______active_______//
	 public function active($id)
		{
		 Team::find($id)->where('id',$id)->update(['status'=>0]);
		 return redirect()->back();
		}


  //_____delete______//
	 public function delete($id)
	 {
	  $data=Team::find($id);
	  if(file_exists('upload/team_image/'.$data->image) AND !empty($data->image)){
	  unlink('upload/team_image/'.$data->image);
	 }
		 $data->delete();
		 return redirect()->route('employer.view')->with('error','Data Deleted Successfully');
	 }


}
