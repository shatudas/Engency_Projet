<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\DomainPricing;
use App\model\CoverSetting;

class DomainController extends Controller
{


  public function domain_price(){
  	$data['domain']=DomainPricing::where('status','0')->get();
  	$data['domainCover']=CoverSetting::where('cover_id','domain_pricing')->first();
   return view ('front_end.domain.domain_price',$data);
  }



}
