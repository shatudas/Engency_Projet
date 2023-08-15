<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ContactMassage;

class userContactController extends Controller
{
    //-----view------//
 public function view()
  {
   $data['alldata'] = ContactMassage::all();
   return view('backend.contact.usercontact.user_contact',$data); 
  }



  //------update------//
  public function delete($id)
  {
   $slider=ContactMassage::find($id);
   $slider->delete();
   return redirect()->route('user.contact.view')->with('successs','Data Deleted Successfully');
  }


  public function getClientMessage(Request $request)
  {
    $data = ContactMassage::find($request->id);
    return response()->json($data);
  }


  
}
