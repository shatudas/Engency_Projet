<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Team;

class temController extends Controller
{
  public function team(){
   $data['team'] = Team::where('status',0)->get();
   return view ('frontend.team.team_page',$data);
  }
}
