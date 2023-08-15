<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ContactMassage;
use App\Model\GenarelSetting;


class contactController extends Controller
{
  public function contact(){
    $data['contact'] = GenarelSetting::first();
   return view ('frontend.contact.contact_page',$data);
  }

   public function store(Request $request){
    
    $this->validate($request,[
    'name'    =>'required',
    'email'   =>'required',
    'subject' =>'required',
    'message' =>'required'
    ]);

    $data=new ContactMassage();
    $data->name    = $request->name;
    $data->email   = $request->email;
    $data->subject = $request->subject;
    $data->message = $request->message;
    $data->save();
    return redirect()->route('contact')->with('success','Data Insert Successfully');
  
  } 




}
