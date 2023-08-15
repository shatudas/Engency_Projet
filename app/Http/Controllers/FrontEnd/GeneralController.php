<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\GenaralAdmistration;

class GeneralController extends Controller
{
     public function generalAdmistration(){
	   $data['genaral'] = GenaralAdmistration::first();
	   return view ('frontend.genaralAdmistration.genaral_page',$data);
	  }
}
