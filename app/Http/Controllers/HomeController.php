<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Province;
use App\Models\Category;
use App\Models\City;
use App\Models\Customer;
use App\Models\District;
use App\Models\Swabber;
use App\Models\User;
use Illuminate\Http\Request;

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
        $totalSwab = DB::table('antigens')->get();
        
        $totalSwabHarian = DB::table('antigens')->where('created_at', '>=', date('Y-m-d').' 00:00:00')->get();
        return view('home',compact('totalSwab','totalSwabHarian'));
    }


}
