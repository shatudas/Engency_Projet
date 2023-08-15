<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Slider;
use image;
use Auth;

class SliderController extends Controller
{


 //______view_______//
 public function view()
  {
   $data['alldata'] = Slider::all();
   return view ('backend.slider.view_slider',$data); 
  }


 //______Add______//
 public function add()
  {
   return view('backend.slider.add_slider'); 
  }


 //_______Store________//
 public function store(Request $request)
  {    
		 $this->validate($request,[
			'status'     =>'required',
			'image'      =>'required'
		 ]);

			$data=new Slider();
			$data->name       = $request->name;
			$data->status     = $request->status;
			$data->created_by = Auth::user()->id;

	  if($request->file('image'))
				{
				 $file=$request->file('image');
				 $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
				 $file->move(public_path('upload/slider_image'),$filename);
				 $data['image']=$filename;
				}
				$data->save();
				return redirect()->route('slider.view')->with('success','Data Upload Successfully');
  }


  //________edit________//
  public function edit($id)
	  {
	   $data['editdata']=Slider::find($id);
	   return view('backend.slider.edit_slider',$data);
	  }


  //______update________//
   public function update(Request $request,$id)
   {
    $this->validate($request,[
				'status'     =>'required'
			 ]);

    $data =Slider::find($id);
    $data->name       = $request->name;
			 $data->status      = $request->status;
    $data->updated_by = Auth::user()->id;

    if($request->file('image')){
     $file = $request->file('image');
     @unlink(public_path('upload/slider_image/'.$data->image));
     $filename = 'IMG_'.date('YmdHis').'.'.$file->getClientOriginalExtension();
     $file->move(public_path('upload/slider_image/'),$filename);
     $data['image'] = $filename;
    }

    $data->save();
    return redirect()->route('slider.view')->with('success','data Update Successfully');
   }


  //______inactive_______//
	 public function inacative($id)
		{
		 Slider::find($id)->where('id',$id)->update(['status'=>1]);
		 return redirect()->back();
		}
		  

		//______active_______//
	 public function active($id)
		{
		 Slider::find($id)->where('id',$id)->update(['status'=>0]);
		 return redirect()->back();
		}


  //_____delete______//
	 public function delete($id)
	 {
	  $data=Slider::find($id);
	  if(file_exists('upload/slider_image/'.$data->image) AND !empty($data->image)){
	  unlink('upload/slider_image/'.$data->image);
	 }
		 $data->delete();
		 return redirect()->route('slider.view')->with('error','Data Deleted Successfully');
	 }



}
