<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('addcustomer',[CustomerController::class, 'addcustomer']);
Route::get('display_customers',[CustomerController::class, 'display_customers']);
Route::POST('update_customer_ID/{id}',[CustomerController::class,'update_customer_ID']);
Route::post('searchcustomer',[CustomerController::class,'searchcustomer']);

Route::GET('sortbypoints_lowtoHigh',[CustomerController::class,'sortbypoints_lowtoHigh']);
Route::GET('sortbypoints_HighToLow',[CustomerController::class,'sortbypoints_HighToLow']);