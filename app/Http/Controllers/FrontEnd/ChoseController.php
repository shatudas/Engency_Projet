<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Choose;

class ChoseController extends Controller
{
  public function why_choosePage(){
  $data['choose']=Choose::first();
  return view ('front_end.about.why_choose',$data);
 }

}
