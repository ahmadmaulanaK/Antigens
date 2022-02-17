<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class PCRController extends Controller
{

    public function index()
    {
        $category = Category::orderBy('name', 'DESC')->get();
        return view('pcr.index', compact('category'));
    }
}
