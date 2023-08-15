<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Vision;

class VisionController extends Controller
{

	
  public function vision(){
	 $data['vision'] = Vision::first();
	 return view ('frontend.vision.vision_page',$data);
	 }



}
