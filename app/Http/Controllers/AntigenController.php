<?php

namespace App\Http\Controllers;

use App\Models\Antigen;
use Illuminate\Http\Request;
use App\Models\cabang;
use App\Models\Province;
use App\Models\Category;
use App\Models\City;
use App\Models\Customer;
use App\Models\District;
use App\Models\Location;
use App\Models\Payment;
use App\Models\Swabber;
use App\Models\Price;
use App\Models\Pengeluaran;
use App\Models\Titik;
use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;
use IntlChar;

class AntigenController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $Antigen = Antigen::where('user_id', $id)->whereDay('created_at', now()->day)->orWhere('user_id', 1)->orderBy('created_at', 'DESC')->simplePaginate(500);
        return view('antigens.index', compact('Antigen'));
    }


    public function kwitansi($id)
    {

        $getId = Crypt::decrypt($id);
        $antigen = Antigen::with(['customer'])->where('id', $getId)->first();
        return view('antigens.kwitansi', compact('antigen'));
    }

    public function all()
    {
        $Antigen = Antigen::simplePaginate(5);
        return view('antigens.all', compact('Antigen'));
    }

    

    public function create()
    {

        $Branch = cabang::orderBy('created_at', 'DESC')->get();
        $titik = Titik::orderBy('name', 'ASC')->get();
        $Metode = Payment::orderBy('metode_payment', 'ASC')->get();
        $swabber = Swabber::orderBy('name', 'ASC')->get();
        $price = Price::orderBy('harga', 'ASC')->get();
        $category = Category::orderBy('name', 'DESC')->get();
        $provinces = Province::orderBy('created_at', 'DESC')->get();
        return view('antigens.create', compact('Branch', 'provinces', 'category', 'swabber', 'price', 'titik', 'Metode'));
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required|string|max:100',
            'NIK' => 'required|string|max:100',
            'phone_number' => 'required',
            'email' => 'required',
            'TTL' => 'required',
            'jenis_kelamin' => 'required',
            'address' => 'required',
            'titik_id' => 'required',
            'swabber_id' => 'required',
            'pelayanan' => 'required',
            'category_id' => 'required',
            'hasil' => 'required',
            'spesimen' => 'required',
            'price_id' => 'required',
            'payment_id' => 'required',
            'cabang_id' => 'required',

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

        $user_id = Auth()->user()->id;

        $antigen = Antigen::create([
            'noreg' => time(),
            'hasil' => $request->hasil,
            'spesimen' => $request->spesimen,

            'rujukan' => 'Negatif',
            'hasil_IgM' => $request->hasil_IgM,
            'hasil_IgG' => $request->hasil_IgG,
            'rujukan_IgG' => 'Non-Reaktif',
            'rujukan_IgM' => 'Non-Reaktif',
            'pelayanan' => $request->pelayanan,
            // 'district_id' => $request->district_id,
            'user_id' => $user_id,
            'swabber_id' => $request->swabber_id,
            'category_id' => $request->category_id,
            'customer_id' => $customer->id,
            'district_id' => 1,
            'cabang_id' => $request->cabang_id,
            'titik_id' => $request->titik_id,
            'payment_id' => $request->payment_id,
            'price_id' => $request->price_id,

        ]);

        DB::commit();
        DB::rollback();

        return redirect(route('antigens.index'))->with(['success' => 'Data Baru Ditambahkan!']);
    }


    public function show($id)
    {
        $getId = Crypt::decrypt($id);

        $antigen = Antigen::with(['customer'])->where('id', $getId)->first();
        return view('antigens.show', compact('antigen'));
    }

    public function cetak($id)
    {
        $getId = Crypt::decrypt($id);

        $antigen = Antigen::with(['customer'])->where('id', $getId)->first();
        return view('antigens.cetak', compact('antigen'));
    }
    public function getCity()
    {

        $cities = City::where('province_id', request()->province_id)->get();

        return response()->json(['status' => 'success', 'data' => $cities]);
    }

    public function getDistrict()
    {
        //QUERY UNTUK MENGAMBIL DATA KECAMATAN BERDASARKAN CITY_ID
        $districts = District::where('city_id', request()->city_id)->get();
        //KEMUDIAN KEMBALIKAN DATANYA DALAM BENTUK JSON
        return response()->json(['status' => 'success', 'data' => $districts]);
    }

    public function destroy($id)
    {
        $antigen = Antigen::find($id);
        $antigen->delete();
        return redirect(route('antigens.index'))->with(['success' => 'Data telah  Dihapus!']);
    }

    public function  report()
    {
        $id = Auth::user()->id;

        $Antigen = Antigen::where('user_id', $id)->orderBy('created_at', 'DESC')->simplePaginate(500);
        if(request('search')){
            $Antigen->where('hasil', 'like', '%' .request('search') . '%');
        }
        // $Antigen = Antigen::where('user_id', $id)->whereDay('created_at', now()->day)->orWhere('cabang_id', 1)->orWhere('user_id', 6)->orderBy('created_at', 'ASC')->simplePaginate(10);
        return view('antigens.laporan', compact('Antigen'));
    }

    public function reportPDF()
    {

        $id = Auth::user()->id;

        $totalSwabHarian = DB::table('antigens')->where('user_id', $id)->where('created_at', '>=', date('Y-m-d') . ' 00:00:00')->get();
        $Antigen = Antigen::where('user_id', $id)->whereDay('created_at', now()->day)->get();

        // $Metode = Payment::where('user_id', $id)->whereDay('created_at', now()->day)->get();
        $user_id = Auth()->user()->name;
        $nowTimeDate = Carbon::now()->translatedFormat('d F Y');






        $t = DB::table('antigens')
            ->select('hasil', DB::raw('count(*) as total'))
            ->where('user_id', $id)
            ->whereDay('created_at', now()->day)
            ->groupBy('hasil')
            ->get();
        $HomeVisit = DB::table('antigens')
            ->select('pelayanan', DB::raw('count(*) as TotalHomeVisit'))
            ->where('user_id', $id)
            ->whereDay('created_at', now()->day)
            ->groupBy('pelayanan')
            ->get();

        $p = DB::table('antigens')
            ->select('pelayanan', DB::raw('count(*) as total'))
            ->where('user_id', $id)
            ->whereDay('created_at', now()->day)
            ->groupBy('pelayanan')
            ->get();

        $payment = DB::table('antigens')
            ->select('payments.metode_payment', DB::raw('sum(prices.harga) as jml_harga'))
            ->join('payments', 'antigens.payment_id', '=', 'payments.id')
            ->join('prices', 'antigens.price_id', '=', 'prices.id')
            ->where('user_id', $id)
            ->whereDay('antigens.created_at', now()->day)
            ->groupBy('payments.metode_payment')
            ->get();
        $jml_harga_all =  DB::table('antigens')
            ->select(DB::raw('sum(prices.harga) as jml_harga_1'))
            ->join('prices', 'antigens.price_id', '=', 'prices.id')
            ->where('user_id', $id)
            ->whereDay('antigens.created_at', now()->day)
            ->get();

        $swabber_qtt = DB::table('antigens')
            ->select('swabbers.name', DB::raw('count(antigens.swabber_id) as jml_swabber'))
            ->join('swabbers', 'antigens.swabber_id', '=', 'swabbers.id')
            ->where('user_id', $id)
            ->whereDay('antigens.created_at', now()->day)
            ->groupBy('swabbers.name')
            ->get();
        $titik_loc = DB::table('antigens')
            ->select('titiks.name', DB::raw('count(antigens.titik_id) as jml_titik'))
            ->join('titiks', 'antigens.titik_id', '=', 'titiks.id')
            ->where('user_id', $id)
            ->whereDay('antigens.created_at', now()->day)
            ->groupBy('titiks.name')
            ->get();
        $category_qtt = DB::table('antigens')
            ->select('categories.name', DB::raw('count(antigens.category_id) as jml_category'))
            ->join('categories', 'antigens.category_id', '=', 'categories.id')
            ->where('user_id', $id)
            ->whereDay('antigens.created_at', now()->day)
            ->groupBy('categories.name')
            ->get();
        $jenkel = DB::table('antigens')
            ->select('customers.jenis_kelamin', DB::raw('count(antigens.customer_id) as jml_jenkel'))
            ->join('customers', 'antigens.customer_id', '=', 'customers.id')
            ->where('user_id', $id)
            ->whereDay('antigens.created_at', now()->day)
            ->groupBy('customers.jenis_kelamin')
            ->get();
        $cabangs = DB::table('antigens')
            ->select('cabangs.name', DB::raw('count(antigens.cabang_id) as jumlah'))
            ->join('cabangs', 'antigens.cabang_id', '=', 'cabangs.id')
            ->where('user_id', $id)
            ->whereDay('antigens.created_at', now()->day)
            ->groupBy('cabangs.name')
            ->get();

        $pengeluaran = Pengeluaran::where('user_id', $id)->whereDay('created_at', now()->day)->orderBy('created_at', 'ASC')->simplePaginate(10);
        $jml_pengeluaran = DB::table('pengeluarans')
            ->select('jumlah')
            ->where('user_id', $id)
            ->whereDay('created_at', now()->day)
            ->sum('jumlah');


        return view('antigens.report', compact('HomeVisit', 'jml_pengeluaran', 'pengeluaran', 'cabangs', 'jenkel', 'category_qtt', 'titik_loc', 'swabber_qtt', 'jml_harga_all', 'payment', 'p', 't', 'user_id', 'nowTimeDate', 'totalSwabHarian', 'id', 'Antigen'));
    }

    public function edit($id)
    {
        $titik = Titik::orderBy('name', 'ASC')->get();
        $Metode = Payment::orderBy('metode_payment', 'ASC')->get();
        $price = Price::orderBy('harga', 'ASC')->get();
        $swabber = Swabber::all();
        $category = Category::orderBy('name', 'DESC')->get();
        $antigen = Antigen::findOrFail($id);
        $Branch = cabang::orderBy('created_at', 'DESC')->get();
        return view('antigens.edit', compact('Branch', 'price', 'Metode', 'titik', 'antigen', 'swabber', 'category'));
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

        $validateData = $request->validate([
            'name' => 'required|string|max:100',
            'NIK' => 'required|string|max:100',
            'phone_number' => 'required',
            'email' => 'required',
            'TTL' => 'required',
            'jenis_kelamin' => 'required',
            'address' => 'required',
            'titik_id' => 'required',
            'swabber_id' => 'required',
            'pelayanan' => 'required',
            'category_id' => 'required',
            'hasil' => 'required',
            'spesimen' => 'required',
            'price_id' => 'required',
            'payment_id' => 'required',

        ]);




        $customer = Customer::updateOrCreate([

            'name' => $request->name,
            'NIK' => $request->NIK,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'jenis_kelamin' => $request->jenis_kelamin,
            'TTL' => $request->TTL,
            'address' => $request->address,
            'district_id' => 1,

        ]);

        $user_id = Auth()->user()->id;
        $antigen = Antigen::findOrFail($id);
        $antigen->update([
            'noreg' => time(),
            'hasil' => $request->hasil,
            'spesimen' => $request->spesimen,

            'rujukan' => 'Negatif',
            'hasil_IgM' => $request->hasil_IgM,
            'hasil_IgG' => $request->hasil_IgG,
            'rujukan_IgG' => 'Non-Reaktif',
            'rujukan_IgM' => 'Non-Reaktif',
            'pelayanan' => $request->pelayanan,
            // 'district_id' => $request->district_id,
            'user_id' => $user_id,
            'swabber_id' => $request->swabber_id,
            'category_id' => $request->category_id,
            'customer_id' => $customer->id,
            'district_id' => 1,
            'titik_id' => $request->titik_id,
            'payment_id' => $request->payment_id,
            'price_id' => $request->price_id,
            'cabang_id' => $request->cabang_id,
        ]);



        return redirect(route('antigens.index'))->with(['success' => 'Data Telah Dirubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function DaftarMandiri()
    {
        $category = Category::orderBy('name', 'DESC')->get();
        return view('antigens.register', compact('category'));
    }

    public function register(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required|string|max:100',
            'NIK' => 'required|string|max:100',
            'phone_number' => 'required',
            'email' => 'required',
            'TTL' => 'required',
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
            'hasil' => null,
            'spesimen' => null,

            'rujukan' => 'Negatif',
            'hasil_IgM' => null,
            'hasil_IgG' => null,
            'rujukan_IgG' => 'Non-Reaktif',
            'rujukan_IgM' => 'Non-Reaktif',
            'pelayanan' => null,
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
        dd($customer, $antigen);
        return redirect(route('antigens.index'))->with(['success' => 'Data Baru Ditambahkan!']);
    }
}
