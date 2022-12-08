<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

Route::get('/customer', function () {
    return view('customer');
});

Route::post("/customer", function()
{
    $customer = new customer();
    $customer->name = request('name');
    $customer->email = request('email');
    $customer->phoneNumber = request('phoneNumber');
    $customer->date_of_birrth = request('date_of_birrth');
    $customer->points = request('points');
    $customer -> save();

    return redirect('/index');

});

// Route::get('/index', [CustomerController::class, 'display_customers']);
// Route::post('/update', [CustomerController::class, 'update_customer_ID']);

Route::get('/display_customers', [CustomerController::class, 'display_customers']);


Route::get('/index', function () {
    return view('index');
});

Route::get('/update', function () {
    return view('update');
});

Route::post("/update", function()
{
    $customer = new customer();
    $customer->name = request('name');
    $customer->email = request('email');
    $customer->phoneNumber = request('phoneNumber');
    $customer->date_of_birrth = request('date_of_birrth');
    $customer->points = request('points');
    $customer -> update();

    return redirect('/index');

});

Route::post('/index', function () {
    return view('index');
});