<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Hr;

class HRController extends Controller
{
    public function hr(){
	   $data['hr'] = Hr::first();
	   return view ('frontend.hr.hr_page',$data);
	  }
}
