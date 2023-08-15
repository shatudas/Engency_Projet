<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Memorandum;

class memorandumController extends Controller
{
  public function memorandum(){
  $data['memorandum'] = Memorandum::first();
   return view ('frontend.memorandum.memorandum_page',$data);
  }
}
