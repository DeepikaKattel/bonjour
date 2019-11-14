<?php

namespace App\Http\Controllers;

use App\Model\Member;
use App\Service;
use App\Information;
use App\Product;
use App\vision;
use App\whyus;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */public function __construct(){
         $this->middleware('auth');
     }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datas = Member::all();
        return view('dashboard.common.table', compact('datas'));
      
    }
}
