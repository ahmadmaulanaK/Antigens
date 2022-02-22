<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AntigenController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\JabodetabekController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TesController;
use App\Http\Controllers\PendaftaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');
Route::resource('category', \App\Http\Controllers\CategoryController::class)
    ->middleware('auth');
Route::resource('customers', \App\Http\Controllers\CustomerController::class)
    ->middleware('auth');
Route::resource('contact', \App\Http\Controllers\ContactController::class)
    ->middleware('auth');
Route::resource('swabbers', \App\Http\Controllers\SwabberController::class)
    ->middleware('auth');
Route::resource('antigens', \App\Http\Controllers\AntigenController::class)
    ->middleware('auth')->except('show');
Route::resource('pengeluaran', \App\Http\Controllers\PengeluaranController::class)
    ->middleware('auth')->except('show');
Route::resource('report', \App\Http\Controllers\ReportController::class)
    ->middleware('auth');
Route::resource('payment', \App\Http\Controllers\PaymentController::class)
    ->middleware('auth');
Route::resource('price', \App\Http\Controllers\PriceController::class)
    ->middleware('auth');

Route::resource('pendaftaran', \App\Http\Controllers\PendaftaranController::class);
// Route::get('/pendaftaran/{noreg}', [PendaftaranController::class,'checkoutFinish'])->name('pendaftaran.finish');
// Route::get('/checkout/{invoice}', 'Ecommerce\CartController@checkoutFinish')->name('front.finish_checkout');

// Route::get('/antigens/register', [AntigenController::class, 'DaftarMandiri']);
// Route::post('/antigens/add', [AntigenController::class, 'register']);
Route::get('/antigens/show/{id}', [AntigenController::class, 'show']);
Route::get('/antigens/pdf/{id}', [AntigenController::class, 'cetakPDF'])->middleware('auth');
Route::get('/branch/show/{id}', [BranchController::class, 'show'])->middleware('auth');
Route::get('/branch/cetak/{id}', [BranchController::class, 'cetak'])->middleware('auth');

Route::get('/jabodetabek/show/{id}', [JabodetabekController::class, 'show']);
Route::get('/antigens/cetak/{id}', [AntigenController::class, 'cetak']);
Route::get('/antigens/customers', [AntigenController::class, 'all'])->middleware('auth');
Route::get('/antigens/report', [AntigenController::class, 'report'])->middleware('auth');
// Route::get('/antigens/global', [AntigenController::class, 'global'])->middleware('auth');
Route::get('/antigens/kwitansi/{id}', [AntigenController::class, 'kwitansi']);
Route::get('/antigens/export', [AntigenController::class, 'reportPDF'])->middleware('auth');


Route::resource('setting', \App\Http\Controllers\SettingController::class)->middleware('auth')->except('show');
Route::resource('branch', \App\Http\Controllers\BranchController::class)->middleware('auth');
Route::resource('titik', \App\Http\Controllers\TitikController::class)->middleware('auth');

// Route::resource('jabodetabek', \App\Http\Controllers\JabodetabekController::class)->middleware('auth')->except('show');
// Route::get('/jabodetabek/export', [JabodetabekController::class, 'reportPDF'])->middleware('auth');
Route::resource('pcr', \App\Http\Controllers\PCRController::class)->middleware('auth');
