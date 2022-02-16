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

        $t = DB::table('antigens')
        ->select('hasil', DB::raw('count(*) as total'))
        ->whereDay('created_at', now()->day)
        ->groupBy('hasil')
        ->get();
        $p = DB::table('antigens')
        ->select('pelayanan', DB::raw('count(*) as total'))
        ->whereDay('created_at', now()->day)
        ->groupBy('pelayanan')
        ->get();

        $payment = DB::table('antigens')
        ->select('payments.metode_payment', DB::raw('sum(prices.harga) as jml_harga'))
        ->join('payments', 'antigens.payment_id', '=', 'payments.id')
        ->join('prices', 'antigens.price_id', '=', 'prices.id')
        ->whereDay('antigens.created_at', now()->day)
        ->groupBy('payments.metode_payment')
        ->get();
       $jml_harga_all =  DB::table('antigens')
       ->select(DB::raw('sum(prices.harga) as jml_harga_1'))
       ->join('prices', 'antigens.price_id', '=', 'prices.id')
       ->whereDay('antigens.created_at', now()->day)
       ->get();

       $swabber_qtt = DB::table('antigens')
        ->select('swabbers.name', DB::raw('count(antigens.swabber_id) as jml_swabber'))
        ->join('swabbers', 'antigens.swabber_id', '=', 'swabbers.id')
        ->whereDay('antigens.created_at', now()->day)
        ->groupBy('swabbers.name')
        ->get();
       $titik_loc = DB::table('antigens')
        ->select('titiks.name', DB::raw('count(antigens.titik_id) as jml_titik'))
        ->join('titiks', 'antigens.titik_id', '=', 'titiks.id')
        ->whereDay('antigens.created_at', now()->day)
        ->groupBy('titiks.name')
        ->get();
       $category_qtt = DB::table('antigens')
        ->select('categories.name', DB::raw('count(antigens.category_id) as jml_category'))
        ->join('categories', 'antigens.category_id', '=', 'categories.id')
        ->whereDay('antigens.created_at', now()->day)
        ->groupBy('categories.name')
        ->get();
       $jenkel = DB::table('antigens')
        ->select('customers.jenis_kelamin', DB::raw('count(antigens.customer_id) as jml_jenkel'))
        ->join('customers', 'antigens.customer_id', '=', 'customers.id')
        ->whereDay('antigens.created_at', now()->day)
        ->groupBy('customers.jenis_kelamin')
        ->get();
        $cabangs = DB::table('antigens')
        ->select('cabangs.name', DB::raw('count(antigens.cabang_id) as jumlah'))
        ->join('cabangs', 'antigens.cabang_id', '=', 'cabangs.id')
        ->whereDay('antigens.created_at', now()->day)
        ->groupBy('cabangs.name')
        ->get();

        return view('home',compact('cabangs','jenkel','category_qtt','titik_loc','swabber_qtt','jml_harga_all','payment','p','t','totalSwab','totalSwabHarian'));
    }


}
