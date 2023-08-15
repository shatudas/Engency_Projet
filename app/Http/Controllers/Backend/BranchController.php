<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Brance;
use Auth;
use Image;

class BranchController extends Controller
{
    
 //______view_______//
 public function view()
  {
   $data['alldata'] = Brance::all();
   return view ('backend.branch.view_branch',$data); 
  }


 //______Add______//
 public function add()
  {
   return view('backend.branch.add_branch'); 
  }

 //______Store______//
 public function store(Request $request)
  {    

		 $this->validate($request,[
		 'name'          =>'required',
		 'phone'         =>'required',
			'address'       =>'required',
			'opening_time'  =>'required',
			'ending_time'   =>'required',
			'status'        =>'required'
		 ]);

			$data = new Brance();
			$data->name         = $request->name;
			$data->phone        = $request->phone;
			$data->email        = $request->email;
			$data->address      = $request->address ;
			$data->holiday      = $request->holiday ;
			$data->opening_time = $request->opening_time ;
			$data->ending_time  = $request->ending_time ;
			$data->status       = $request->status;
			$data->created_by   = Auth::user()->id;

			$data->save();
			return redirect()->route('branch.view')->with('success','Data Upload Successfully');

  }


  //________edit________//
  public function edit($id)
	  {
	   $data['editdata']=Brance::find($id);
	   return view('backend.branch.edit_branch',$data);
	  }



	 //______update________//
   public function update(Request $request,$id)
   {
   
   $this->validate($request,[
		 'name'          =>'required',
		 'phone'         =>'required',
			'address'       =>'required',
			'opening_time'  =>'required',
			'ending_time'   =>'required',
			'status'        =>'required'
		 ]);

    $data =Brance::find($id);
    $data->name         = $request->name;
				$data->phone        = $request->phone;
				$data->email        = $request->email;
				$data->address      = $request->address ;
				$data->holiday      = $request->holiday ;
				$data->opening_time = $request->opening_time ;
				$data->ending_time  = $request->ending_time ;
				$data->status       = $request->status;
    $data->updated_by   = Auth::user()->id;
   

    $data->save();
    return redirect()->route('branch.view')->with('success','data Update Successfully');
   }


    //______inactive_______//
	 public function inacative($id)
		{
		 Brance::find($id)->where('id',$id)->update(['status'=>1]);
		 return redirect()->back();
		}
		  

		//______active_______//
	 public function active($id)
		{
		 Brance::find($id)->where('id',$id)->update(['status'=>0]);
		 return redirect()->back();
		}


  //_____delete______//
	 public function delete($id)
	 {
	  $data=Brance::find($id);
		 $data->delete();
		 return redirect()->route('branch.view')->with('error','Data Deleted Successfully');
	 }










}
