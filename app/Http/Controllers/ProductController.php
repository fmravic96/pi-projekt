<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Product;
use App\LastOrderDate;
use App\IssueSlips;
use Illuminate\Http\Request;
use App\CustomerOrder;
use App\ProductInOrder;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('productList')->with($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pid=$request->get('productId');
        $quantity=$request->get('quantity');
        $orderId=array_values(array_unique($request->get('orderId')));
        for($i = 0;$i<count($pid);$i++){
            $quantityDB = Product::where('id', $pid[$i])->value('quantity');
            $quantityDB+=$quantity[$i];
            DB::table('products')->where('id', $pid[$i])->update(['quantity' => $quantityDB]);
        }
        foreach($orderId as $oi){
            $prezId=CustomerOrder::where('id',$oi)->value('presentatorId');
            $is = new IssueSlips([
                'orderId' => $oi,
                'idPrez' => $prezId,
                'distributerName' => Auth::user()->name,
            ]);
            $is->save();
        }

        $a=new LastOrderDate;
        $a->save();
        $date=\Carbon\Carbon::today()->subDays(7);
      $productOrder=ProductInOrder::where('created_at','>=', $date)->get()->toArray();
          $product=Product::All()->toArray();
      $lastOrderDate=LastOrderDate::where('created_at','>=', $date)->latest()->first();
      return view('newProductOrder',compact('productOrder','product','lastOrderDate'));
    }

    public function store2(Request $request){
        $product = new Product([
            'name' => $request->get('productName'),
            'price' => $request->get('price')+$request->get('price')*0.2,
            'quantity' => $request->get('quantity'),
        ]);
        $product->save();

        return 'asd';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
