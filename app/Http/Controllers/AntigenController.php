<?php

namespace App\Http\Controllers;

use App\Models\Antigen;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Category;
use App\Models\City;
use App\Models\Customer;
use App\Models\District;
use App\Models\Swabber;
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
        // $Antigen = Antigen::where('user_id', $id)->whereDay('created_at', now()->day)->orWhere('user_id', 6)->get();
        $Antigen = Antigen::where('user_id', $id)->whereDay('created_at', now()->day)->get();
        // $Antigen = Antigen::where('lokasi', 'The Suits Metro')->get();
        
        return view('antigens.index',compact('Antigen'));
    }


    public function kwitansi($id){

        $getId=Crypt::decrypt($id);

        $antigen=Antigen::with(['customer'])->where('id', $getId)->first();
        return view('antigens.kwitansi',compact('antigen'));
        
    }

    public function all(){
      
        $Antigen = Antigen::simplePaginate(5);
       
        // $Antigen= DB::table('Antigens')->simplePaginate(15);
        return view('antigens.all',compact('Antigen'));
    }
    public function daily(){
        $totalSwab = DB::table('antigens')->get();
        $totalSwabHarian = DB::table('antigens')->where('created_at', '>=', date('Y-m-d').' 00:00:00')->get();
        $Antigen = Antigen::whereDay('created_at', now()->day)->get();
        // $Antigen = Antigen::where('user_id', $id)->whereDay('created_at', now()->day)->orWhere('user_id', 6)->get();
        
        // $Antigen = Antigen::where('user_id', $id)->get();
        $HomeVisit = Antigen::where('pelayanan', 'Home Visit')->whereDay('created_at', now()->day);
        $DriveTHRU = Antigen::where('pelayanan', 'Drive THRU')->whereDay('created_at', now()->day);
        $Onsite = Antigen::where('pelayanan', 'Onsite')->whereDay('created_at', now()->day);



        $Positif = Antigen::where('hasil', 'positif')->whereDay('created_at', now()->day)->get();
        $Negatif = Antigen::where('hasil', 'Negatif')->whereDay('created_at', now()->day)->get();
        $tesAntigen = Antigen::where('category_id', '1')->whereDay('created_at', now()->day)->get();
        $tesRapidantibodi = Antigen::where('category_id', '2')->whereDay('created_at', now()->day)->get();
        $tesPCR = Antigen::where('category_id', '3')->whereDay('created_at', now()->day)->get();
        $Antigen = Antigen::simplePaginate(5);

        $cash = DB::table('antigens')
        ->whereDay('created_at', now()->day)
        ->sum('cash');
        $BCA_Dr = DB::table('antigens')
        ->whereDay('created_at', now()->day)
        ->sum('BCA-Dr');
        $BRI_Dr = DB::table('antigens')
        ->whereDay('created_at', now()->day)
        ->sum('BRI-Dr');
        $BNI_Dr = DB::table('antigens')
        ->whereDay('created_at', now()->day)
        ->sum('BNI-Dr');
        $Mandiri_Pt = DB::table('antigens')
        ->whereDay('created_at', now()->day)
        ->sum('MANDIRI-Pt');
        $BNI_Pt = DB::table('antigens')
        ->whereDay('created_at', now()->day)
        ->sum('BNI-Pt');
        $BCA_Pt = DB::table('antigens')
        ->whereDay('created_at', now()->day)
        ->sum('BCA-Pt');
        $BJB_Pt = DB::table('antigens')
        ->whereDay('created_at', now()->day)
        ->sum('BJB-Pt');
        $Piutang = DB::table('antigens')
        ->whereDay('created_at', now()->day)
        ->sum('PIUTANG');
        $total=$cash+$BCA_Dr+$BRI_Dr+$BNI_Dr+$Mandiri_Pt+$BNI_Pt+$Piutang+$BJB_Pt+$BCA_Pt;
        $a = 'coba';
        $nowTimeDate = Carbon::now()->translatedFormat('d F Y');
        
        return view('antigens.daily',compact('Onsite','DriveTHRU','HomeVisit','nowTimeDate','Antigen','totalSwab','totalSwabHarian','Positif','Negatif','tesAntigen','tesRapidantibodi','tesPCR','BCA_Dr','cash','BRI_Dr','BNI_Dr','Mandiri_Pt','BNI_Pt','total','Piutang','BJB_Pt','BCA_Pt','BNI_Pt'));
    }
    public function global(){
      
        $Antigen = Antigen::simplePaginate(5);
        // $Antigen= DB::table('Antigens')->simplePaginate(15);
        return view('antigens.global',compact('Antigen'));
    }

    public function create()
{

    $swabber = Swabber::all();
    $category = Category::orderBy('name', 'DESC')->get();
    $provinces = Province::orderBy('created_at', 'DESC')->get();
    


    return view('antigens.create',compact('provinces','category','swabber'));
}

public function store(Request $request)
{
    
    // $validateData= $request->validate([
    //     'name' => 'required|string|max:100',
    //     'NIK' => 'required|string|max:100',
    //     'phone_number' => 'required',
    //     'email' => 'required',
    //     'address' => 'required|string',
    //     'jenis_kelamin ' => 'required',
    //      'province_id' => 'required|exists:provinces,id',
    //     'city_id' => 'required|exists:cities,id',
    //     'district_id' => 'required|exists:districts,id'
    // ]);
   
    

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
        'lokasi' => $request->lokasi,
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
        'cash' => $request->cash,
        'BCA-Dr' => $request->BCA_Dr,
        'BRI-Dr' => $request->BRI_Dr,
        'BNI-Dr' => $request->BNI_Dr,
        'BNI-PT' => $request->BNI_PT,
        'BJB-PT' => $request->BJB_PT,
        'BCA-PT' => $request->BCA_PT,
        'MANDIRI-PT' => $request->MANDIRI_PT,
        'PIUTANG' => $request->PIUTANG,
    ]);

        

   

   
     DB::commit();

       
        DB::rollback();

        return redirect(route('antigens.index'))->with(['success' => 'Data Baru Ditambahkan!']);
}


public function show($id)
{
    $getId=Crypt::decrypt($id);

        $antigen=Antigen::with(['customer'])->where('id', $getId)->first();
        
   
    // $swabber = Swabber::all();
    // $category = Category::orderBy('name', 'DESC')->get();
    // $provinces = Province::orderBy('created_at', 'DESC')->get();
    return view('antigens.show',compact('antigen'));
}

public function cetak($id)
{
    $getId=Crypt::decrypt($id);

        $antigen=Antigen::with(['customer'])->where('id', $getId)->first();
        
   

    return view('antigens.cetak',compact('antigen'));
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

    public function reportPDF()
    {

        $id = Auth::user()->id;       
        // $totalSwab = DB::table('antigens')->get();
        $totalSwabHarian = DB::table('antigens')->where('user_id', $id)->where('created_at', '>=', date('Y-m-d').' 00:00:00')->get();
        $Antigen = Antigen::where('user_id', $id)->whereDay('created_at', now()->day)->get();
        // $Antigen = Antigen::where('user_id', $id)->whereDay('created_at', now()->day)->orWhere('user_id', 6)->get();
        
        // $Antigen = Antigen::where('user_id', $id)->get();
        $Sameday = Antigen::where('user_id', $id)->where('hasil', 'Sameday')->whereDay('created_at', now()->day)->get();
        $H1 = Antigen::where('user_id', $id)->where('hasil', 'H(+1)')->whereDay('created_at', now()->day)->get();
        $Positif = Antigen::where('user_id', $id)->where('hasil', 'positif')->whereDay('created_at', now()->day)->get();
        $Negatif = Antigen::where('user_id', $id)->where('hasil', 'Negatif')->whereDay('created_at', now()->day)->get();
        $tesAntigen = Antigen::where('user_id', $id)->where('category_id', '1')->whereDay('created_at', now()->day)->get();
        $tesRapidantibodi = Antigen::where('user_id', $id)->where('category_id', '2')->whereDay('created_at', now()->day)->get();
        $tesPCR = Antigen::where('user_id', $id)->where('category_id', '3')->whereDay('created_at', now()->day)->get();
        $cash = DB::table('antigens')->whereDay('created_at', now()->day)->where('user_id', $id)->sum('cash');
        $BCA_Dr = DB::table('antigens')->whereDay('created_at', now()->day)
                    ->where('user_id', $id)
                    ->sum('BCA-Dr');
        $BRI_Dr = DB::table('antigens')->whereDay('created_at', now()->day)
                    ->where('user_id', $id)
                    ->sum('BRI-Dr');
        $BNI_Dr = DB::table('antigens')->whereDay('created_at', now()->day)
                    ->where('user_id', $id)
                    ->sum('BNI-Dr');
        $Mandiri_Pt = DB::table('antigens')->whereDay('created_at', now()->day)
                    ->where('user_id', $id)
                    ->sum('MANDIRI-Pt');
        $BNI_Pt = DB::table('antigens')->whereDay('created_at', now()->day)
                    ->where('user_id', $id)
                    ->sum('BNI-Pt');
        $BCA_Pt = DB::table('antigens')->whereDay('created_at', now()->day)
                    ->where('user_id', $id)
                    ->sum('BCA-Pt');
        $BJB_Pt = DB::table('antigens')->whereDay('created_at', now()->day)
                    ->where('user_id', $id)
                    ->sum('BJB-Pt');
        $Piutang = DB::table('antigens')->whereDay('created_at', now()->day)
                    ->where('user_id', $id)
                    ->sum('PIUTANG');
        $total=$cash+$BCA_Dr+$BRI_Dr+$BNI_Dr+$Mandiri_Pt+$BNI_Pt+$Piutang+$BJB_Pt+$BCA_Pt;
        $user_id = Auth()->user()->name;
        $nowTimeDate = Carbon::now()->translatedFormat('d F Y');
        return view('antigens.report',compact('user_id','nowTimeDate','H1','Sameday','Antigen','totalSwabHarian','Positif','Negatif','tesAntigen','tesRapidantibodi','tesPCR','id','BCA_Dr','cash','BRI_Dr','BNI_Dr','Mandiri_Pt','BNI_Pt','total','Piutang','BJB_Pt','BCA_Pt','BNI_Pt'));

    }
}
