<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Models\Antigen;
use App\Models\Customer;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::orderBy('name', 'DESC')->get();
        return view('Registers.register',compact('category'));
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
        $validateData= $request->validate([
            'name' => 'required|string|max:100',
            'NIK' => 'required|string|max:100',
            'phone_number' => 'required',
            'email' => 'required',
            'TTL' =>'required',
            'jenis_kelamin' => 'required',
            'address' => 'required',
            'category_id' => 'required',
           
           
        ]);
       
        
    
        DB::beginTransaction();
    
        $customer = Customer::create([
            
            'name' => $request->name,
            'NIK' => $request->NIK,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'jenis_kelamin' => $request->jenis_kelamin,
            'TTL' => $request->TTL,
            'address' => $request->address,
            'district_id' => 1,
        ]);
    
       
    
        $antigen = Antigen::create([
            'noreg' => time(),
            'hasil' => '',
            'spesimen' => '',
            
            'rujukan' => 'Negatif',
            'hasil_IgM' => '',
            'hasil_IgG' => '',
            'rujukan_IgG' => 'Non-Reaktif',
            'rujukan_IgM' => 'Non-Reaktif',
            'pelayanan' => '',
            // 'district_id' => $request->district_id,
            'user_id' => 1,
            'swabber_id' => null,
            'category_id' => $request->category_id,
            'customer_id' => $customer->id,
            'district_id' => 1,
            'cabang_id' => null,
            'titik_id' => null,
            'payment_id' => null,
            'price_id' => null,
            
        ]);
    
            
    
       
    
       
         DB::commit();
    
           
            DB::rollback();

    return redirect(route('Pendaftaran.index'))->with(['success' => 'Data berhasil di tambahkan!']);

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
