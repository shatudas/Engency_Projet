<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\About;
use App\Model\ServicesCategory;





class AboutController extends Controller
{
	 public function about_page(){
	 $data['about'] = About::first();
	 $data['cat_sevices'] = ServicesCategory::where('status',0)->get();
	 return view ('frontend.about.about_page',$data);
	 }


}
