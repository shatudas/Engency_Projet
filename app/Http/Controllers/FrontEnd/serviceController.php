<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Service;
use App\Model\ServicesCategory;


class serviceController extends Controller
{


  public function service($id){
  	$data['catservice'] = Service::where('category_id',$id)->where('status',0)->first();
    return view ('frontend.service.service_page',$data);
  }



}
