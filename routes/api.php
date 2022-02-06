<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('city', [App\Http\Controllers\AntigenController::class, 'getCity']);
Route::get('district', [App\Http\Controllers\AntigenController::class, 'getDistrict']);
Route::post('cost', [App\Http\Controllers\AntigenController::class, 'getCourier']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
