<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\CoverSetting;
use App\model\genarelSetting;
use App\model\PackageManage;
use App\model\PackageFeture;
use App\model\PackageService;
use App\model\Webcontent;


class PackageController extends Controller
{
  public function mailPage(){
  $data['mailCover'] = CoverSetting::where('status','0')->where('cover_id','mail')->first();
  $data['PackageManage'] = PackageManage::where('status','0')->where('package_id','1')->get();
  $data['PackageFeture'] = PackageFeture::where('status','0')->where('package_id','1')->get();
  $data['PackageService'] = PackageService::where('status','0')->where('package_id','1')->get();
  return view ('front_end.services.web_mail',$data);
 }


  public function VPSPage(){
   $data['VPS'] = CoverSetting::where('status','0')->where('cover_id','VPS')->first();
   $data['PackageManage'] = PackageManage::where('status','0')->where('package_id','2')->get();
   $data['PackageFeture'] = PackageFeture::where('status','0')->where('package_id','2')->get();
   $data['PackageService'] = PackageService::where('status','0')->where('package_id','2')->get();
   return view ('front_end.services.VPS',$data);
 }


  public function shared_hosting(){
  	 $data['share_host'] = CoverSetting::where('status','0')->where('cover_id','shared_hosting')->first();
    $data['PackageManage'] = PackageManage::where('status','0')->where('package_id','3')->get();
    $data['PackageFeture'] = PackageFeture::where('status','0')->where('package_id','3')->get();
    $data['PackageService'] = PackageService::where('status','0')->where('package_id','3')->get();
  	return view ('front_end.hosting.shared_hosting',$data);
  }


  public function reseller_hosting(){
   $data['reseller_host'] = CoverSetting::where('status','0')->where('cover_id','reseller_hosting')->first();
   $data['PackageManage'] = PackageManage::where('status','0')->where('package_id','4')->get();
   $data['PackageFeture'] = PackageFeture::where('status','0')->where('package_id','4')->get();
   $data['PackageService'] = PackageService::where('status','0')->where('package_id','4')->get();
   return view ('front_end.hosting.reseller_hosting',$data);
  }


   public function sms(){
    $data['SMS']=CoverSetting::where('status','0')->where('cover_id','sms')->first();
    $data['PackageMasking'] = PackageManage::where('status','0')->where('package_id','5')->get();
    $data['PackageNonMasking'] = PackageManage::where('status','0')->where('package_id','8')->get();
    $data['PackageFetureMasking'] = PackageFeture::where('status','0')->where('package_id','5')->get();
    $data['PackageServiceNonMasking'] = PackageService::where('status','0')->where('package_id','5')->get();
    return view ('front_end.services.sms',$data);
   }


   public function zimbraMail(){
    $data['zimbramail'] = CoverSetting::where('status','0')->where('cover_id','zimbramail')->first();
    $data['PackageManage'] = PackageManage::where('status','0')->where('package_id','6')->get();
    $data['PackageFeture'] = PackageFeture::where('status','0')->where('package_id','6')->get();
    $data['PackageService'] = PackageService::where('status','0')->where('package_id','6')->get();
    return view ('front_end.services.zimbraMail',$data);
   }

   public function ofice(){
    $data['office'] = CoverSetting::where('status','0')->where('cover_id','office')->first();
    $data['PackageManage'] = PackageManage::where('status','0')->where('package_id','7')->get();
    $data['PackageFeture'] = PackageFeture::where('status','0')->where('package_id','7')->get();
    $data['PackageService'] = PackageService::where('status','0')->where('package_id','7')->get();
    return view ('front_end.services.ofice365',$data);
   }

   public function web_development(){
     $data['web'] = CoverSetting::where('cover_id','web')->first();
     $data['settingdata'] = genarelSetting::first();
     $data['Webcontent'] = Webcontent::where('status','0')->get();
     return view ('front_end.services.web_development',$data);
   }






}
