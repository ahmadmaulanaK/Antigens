<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Antigen;
use Carbon\Carbon;
class PCRController extends Controller
{

    // public function index()
    // {
    //     $category = Category::orderBy('name', 'DESC')->get();
    //     return view('pcr.index', compact('category'));
    // }
    public function index()
    {
        $nowTimeDate = Carbon::now()->translatedFormat('d F Y');
        $Antigen = Antigen::Where('category_id', 3)->whereIn('cabang_id',[3,4,7] )->whereDay('created_at', now()->day)->orderBy('created_at', 'ASC')->simplePaginate(500);
        return view('pcr.index', compact('Antigen','nowTimeDate'));
    }
}
