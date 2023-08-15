<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Model\Team;
use App\Model\Director;
use App\Model\ServicesCategory;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $data['team'] = Team::where('status','0')->count();
      $data['user'] = User::where('status','0')->count();
      $data['director'] = Director::where('status','0')->count();
      $data['servicescategory'] = ServicesCategory::where('status','0')->count();
      return view('backend.layouts.home',$data);
    }
}
