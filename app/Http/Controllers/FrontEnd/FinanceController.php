<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Finance;

class FinanceController extends Controller
{
    public function finance(){
	   $data['finance'] = Finance::first();
	   return view ('frontend.finance.finance_page',$data);
	  }
}
