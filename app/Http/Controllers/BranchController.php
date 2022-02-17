<?php

namespace App\Http\Controllers;

use App\Models\Antigen;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Category;
use App\Models\City;
use App\Models\cabang;
use App\Models\Customer;
use App\Models\District;
use App\Models\Location;
use App\Models\Payment;
use App\Models\Swabber;
use App\Models\Price;
use App\Models\Titik;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        // $Antigen = Antigen::where('user_id', $id)->whereDay('created_at', now()->day)->orWhere('cabang_id', 1)->orWhere('user_id', 6)->orderBy('created_at', 'ASC')->simplePaginate(10);
        $Antigen = Antigen::where('user_id', $id)->whereDay('created_at', now()->day)->orWhere('user_id', 6)->orderBy('created_at', 'ASC')->simplePaginate(10);


        //    $Antigen = Antigen::where('user_id', $id)
        //         ->whereDay('created_at', now()->day)
        //          ->orWhere(function($query) {
        //         $query->where('user_id', 6)
        //               ->where('cabang_id', 1);})
        //               ->orderBy('created_at', 'ASC')
        //               ->simplePaginate(10);


        return view('branchs.index', compact('Antigen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('branchs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:100',
            'cap' => 'required|string|max:100',


        ]);
        cabang::create($request->except('_token'));
        // return view('setting.index');
        return redirect(route('setting.index'))->with(['success' => 'Data Baru Ditambahkan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getId = Crypt::decrypt($id);

        $antigen = Antigen::with(['customer'])->where('id', $getId)->first();


        // $swabber = Swabber::all();
        // $category = Category::orderBy('name', 'DESC')->get();
        // $provinces = Province::orderBy('created_at', 'DESC')->get();
        return view('branchs.show', compact('antigen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cetak($id)
    {
        $getId = Crypt::decrypt($id);

        $antigen = Antigen::with(['customer'])->where('id', $getId)->first();



        return view('branchs.cetak', compact('antigen'));
    }
}
