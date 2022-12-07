<?php

use Illuminate\Support\Facades\Route;
use App\Models\customer;
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
    return view('customer');
});

Route::post("/", function()
{
    $customer = new customer();
    $customer->name = request('name');
    $customer->email = request('email');
    $customer->phoneNumber = request('phoneNumber');
    $customer->date_of_birrth = request('date_of_birrth');
    $customer->points = request('points');
    $customer -> save();


});

Route::get('/index', function () {
    return view('index');
});