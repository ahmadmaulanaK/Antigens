<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cabang;
use App\Models\Location;
use App\Models\Price;
use App\Models\Payment;
use App\Models\Titik;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Price = Price::orderBy('created_at', 'asc')->paginate(10);
        $titik = Titik::orderBy('created_at', 'DESC')->paginate(10);
        $Branch = cabang::orderBy('created_at', 'DESC')->paginate(10);
        $Metode = Payment::orderBy('metode_payment', 'ASC')->get();

        

        return view('settings.index', compact('Price','titik','Metode','Branch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.addHarga');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'harga' => 'required|string|max:50'
        ]);
        Price::create($request->except('_token'));
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
    public function destroy(Request $request,$id)
    {
        $price = Price::find($id);
        $price->delete();
        return redirect(route('setting.index'))->with(['success' => 'Data Dihapus!']);
    }
}
