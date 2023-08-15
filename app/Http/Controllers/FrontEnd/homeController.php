<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Slider;
use App\Model\GenarelSetting;
use App\Model\ServicesCategory;
use App\Model\Brance;
use App\Model\About;
use App\Model\Team;

use image;




class homeController extends Controller
{
 

 //------home------//
 public function homemethod()
  {  
     $data['sliders'] = Slider::where('status',0)->orderBy('id','DESC')->get();
     $data['about'] = About::first();
     $data['cat_sevices'] = ServicesCategory::where('status',0)->get();
     $data['team'] = Team::where('status',0)->limit(4)->get();
     $data['contact'] = GenarelSetting::first();
 	 return view ('frontend.layouts.home',$data);
  }

}
