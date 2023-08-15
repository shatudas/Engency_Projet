<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Director;


class directorController extends Controller
{
    public function director(){
     $data['director'] = Director::where('status',0)->limit(4)->get();
     return view ('frontend.director.director_page',$data);
    }
}
