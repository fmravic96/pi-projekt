<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\CustomerOrder;
use App\ProductInOrder;
use App\Product;
use DB;
use Illuminate\Http\Request;

class CustomerOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerOrder = CustomerOrder::all();
        return view('customerOrder')->with($customerOrder);
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
        $product = $request->get('hidden_product');
        $quantity = $request->get('hidden_quantity');
        $price = $request->get('hidden_price');

        $customerOrder = new CustomerOrder([
            'presentationId' => $request->get('presentationlist'),
            'presentatorId' => Auth::user()->id,
            'customerId' => $request->get('customerlist'),
            'total' => $request->get('total2'),
        ]);

        
        $customerOrder->save();
        
        for($i = 0;$i<count($product);$i++){
            $productInOrder = new ProductInOrder([
                'orderId' => $customerOrder['id'],
                'productName' => $product[$i],
                'quantity' => $quantity[$i],
                'price' => $price[$i],
            ]);
            $productInOrder->save();
        }
        
        for($i = 0;$i<count($product);$i++){
            $quantityDB = Product::where('name', $product[$i])->value('quantity');
            $quantityDB-=$quantity[$i];
            DB::table('products')->where('name', $product[$i])->update(['quantity' => $quantityDB]);
        }

        return $customerOrder;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerOrder $customerOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerOrder $customerOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerOrder $customerOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerOrder $customerOrder)
    {
        //
    }
}
