<?php

namespace App\Http\Controllers;
use App\Models\Antigen;

use App\Models\Province;
use App\Models\Category;
use App\Models\City;
use App\Models\Customer;
use App\Models\District;
use App\Models\Swabber;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use PDF;
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;       
        // $Antigen = Antigen::where('user_id', $id)->whereDay('created_at', now()->day)->orWhere('user_id', 6)->get();
        $Antigen = Antigen::where('user_id', $id)->whereDay('created_at', now()->day)->get();
         
        return view('antigens.report',compact('Antigen'));
    }

    public function createPDF() {

        return "berhasil";
        // // retreive all records from db
        // $id = Auth::user()->id;       
        // // $Antigen = Antigen::where('user_id', $id)->whereDay('created_at', now()->day)->orWhere('user_id', 6)->get();
        // $Antigen = Antigen::where('user_id', $id)->whereDay('created_at', now()->day)->get();
  
        // // share data to view
        // view()->share('employee',$Antigen);
        // $pdf = PDF::loadView('pdf_view', $Antigen);
  
        // // download PDF file with download method
        // return $pdf->download('pdf_file.pdf');
      }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
