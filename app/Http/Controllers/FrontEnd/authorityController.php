<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Authority;

class authorityController extends Controller
{
	  public function authority(){
	   $data['authority'] = Authority::first();
	   return view ('frontend.authority.authority_page',$data);
	  }
}
