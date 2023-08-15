<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Statues;

class statutesController extends Controller
{
    public function statutes(){
    	$data['statues'] = Statues::first();
    	 return view ('frontend.statutes.statutes_page',$data);
    }
}
