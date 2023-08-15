<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\History;


class HistoryController extends Controller
{
   
  public function history(){
	 $data['history'] = History::first();
	 return view ('frontend.history.history_page',$data);
	 }

}
