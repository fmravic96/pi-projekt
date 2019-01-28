<?php

use App\Customers;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/newCustomer', function () {
    return view('newCustomer');
});

Route::get('/newOrder', function () {
    return view('newOrder');
});

Route::get('/customerList', function () {

    $customers = Customers::All()->toArray();
    return view('customerList', compact('customers'));
});

Route::get('/editFlyers', function () {
    return view('editFlyers');
});

Route::get('/receipt', function () {
    return view('receipt');
});

Route::get('/reviewIssueSlips', function () {
    return view('reviewIssueSlips');
});

Route::get('/newProductOrder', function () {
    return view('newProductOrder');
});

Route::get('/presenter', function () {
    return view('presenter');
});


Route::get('/productList', function () {
    return view('productList');
});

Route::get('/issueSlips', function () {
    return view('issueSlips');
});



Route::get('/distributer', function () {
    return view('distributer');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('newCustomer','CustomersController@store');
