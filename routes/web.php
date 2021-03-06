<?php

use App\Customers;
use App\CustomerOrder;
use App\Product;
use App\ProductInOrder;
use App\Threshold;
use App\Guest;
use App\Flyer;
use App\Catalog;
use App\Presentation;
use App\LastOrderDate;
use App\IssueSlips;
use App\Discount;


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

    $flyer = Flyer::latest()->first();
    $catalog = Catalog::latest()->get()->toArray();
  
    if (Auth::check() && Auth::user()->role == 'distributer') {
        return view('distributer', compact('flyer','catalog'));

    }
    elseif (Auth::check() && Auth::user()->role == 'presenter') {
        return view('presenter', compact('flyer','catalog'));
    }
    else {
        return view('home', compact('flyer','catalog'));
    }
    
});

Route::get('/login', function () {
    return view('login');
});


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/newCustomer', function () {
    return view('newCustomer');
});

Route::get('/newOrder', function () {
    $presentations = Presentation::where('idPrez', Auth::user()->id)->latest()->get()->toArray();
    $presentations2 = Presentation::where('idPrez', Auth::user()->id)->get()->toArray();
    $products = Product::All()->toArray();
    $customers = Customers::All()->toArray();
    $guests = Guest::All()->toArray();
    

    return view('newOrder', compact('presentations', 'products', 'customers', 'guests','presentations2'));
});

Route::get('/customerList', function () {

    $customers = Customers::All()->toArray();
    return view('customerList', compact('customers'));
});

Route::get('/productList', function () {

    $products = Product::All()->toArray();
    return view('productsList', compact('products'));
});

Route::get('/editFlyers', function () {
    return view('editFlyers');
});
Route::get('/presentations', function () {
    $customers = Customers::All()->toArray();
    $presentations = Presentation::All()->toArray();
    $guests = Guest::All()->toArray();
    return view('presentations', compact('customers','presentations', 'guests'));
});

Route::get('/receipt', function () {
    $orders = CustomerOrder::where('presentatorId', Auth::user()->id)->latest()->get()->toArray();
    $customers = Customers::All()->toArray();
    $thresholds = Threshold::All()->toArray();

    return view('receipt', compact('orders', 'customers', 'thresholds'));
});

Route::get('/newProductOrder', function () {
    $date=\Carbon\Carbon::today()->subDays(7);
    $productOrder=ProductInOrder::where('created_at','>=', $date)->get()->toArray();
    $product=Product::All()->toArray();
    $lastOrderDate=LastOrderDate::where('created_at','>=', $date)->latest()->first();
    return view('newProductOrder',compact('productOrder','product','lastOrderDate'));
});

Route::get('/presenter', function () {
    $flyer = Flyer::latest()->first();
    $catalog = Catalog::latest()->get()->toArray();
    $flyerDiscount = Discount::All()->toArray();
    return view('presenter', compact('flyer','catalog','flyerDiscount'));
});




Route::get('/reviewIssueSlips', function () {
    $order = IssueSlips::where('idPrez', Auth::user()->id)->latest()->get()->toArray();
    $priceA=[];
    for($i=0;$i<count($order);$i++){
        $price=0;
        $prodPrice=ProductInOrder::where('orderId',$order[$i]['orderId'])->get()->toArray();
        foreach($prodPrice as $pp){
            $price+=$pp['price'];
            $price-=$pp['price']*0.2;
        }
        array_push($priceA,$price);
    }
    return view('reviewIssueSlips',compact('order','price','priceA'));
});

Route::get('/distributer', function () {
    $flyer = Flyer::latest()->first();
    $catalog = Catalog::latest()->get()->toArray();
    return view('distributer', compact('flyer','catalog'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('newCustomer','CustomersController@store');

Route::post('newOrder', 'CustomerOrderController@store');

Route::post('receipt', 'ThresholdController@store');

Route::post('presentations','PresentationController@store');

Route::post('newProductOrder','ProductController@store');

Route::get('file','FlyerController@showUploadForm')->name('upload.file');
Route::post('file','FlyerController@storeFile');

Route::get('file2','CatalogController@showUploadForm')->name('upload.file2');
Route::post('file2','CatalogController@storeFile');

Route::get('receipt/print{id}','ReceiptController@getDisplay');
Route::get('reviewIssueSlips/print{id}','IssueSlipsController@getDisplay');

Route::post('productList','ProductController@store2');