<?php

namespace App\Http\Controllers;

use App\IssueSlips;
use App\ProductInOrder;
use Illuminate\Http\Request;

class IssueSlipsController extends Controller
{
    public function getDisplay($orderId){
        $distributerName=IssueSlips::where('orderId',$orderId)->value('distributerName');
        $productList=ProductInOrder::where('orderId',$orderId)->get()->toArray();
        $total=0;

        foreach($productList as $p){
            $total+=$p['price'];
            $total-=$p['price']*0.2;
        }

        return view('printIS',compact('distributerName','productList','total'));
    }
}
