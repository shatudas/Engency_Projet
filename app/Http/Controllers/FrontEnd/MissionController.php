<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Mision;

class MissionController extends Controller
{
    
  public function mission(){
	 $data['mision'] = Mision::first();
	 return view ('frontend.mision.mision_page',$data);
	 }
}
