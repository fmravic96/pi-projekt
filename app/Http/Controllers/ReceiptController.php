<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customers;
use App\CustomerOrder;
use App\ProductInOrder;
use App\Presentation;
use App\Threshold;
use App\Discount;

class ReceiptController extends Controller
{
    public function getDisplay($id){
        $customerOrder = CustomerOrder::where('id', $id)->get();
        $customerOrders = CustomerOrder::where('presentationId', $customerOrder[0]['presentationId'])->get();
        $customer = Customers::where('id',$customerOrder[0]['customerId'])->get();
        $threshold = Threshold::All()->toArray();
        $presentations = Presentation::where('id', $customerOrder[0]['presentationId'])->get()->toArray();
        $product_in_orders = ProductInOrder::where('orderId',$id)->get()->toArray();
        $discounts = Discount::All()->toArray();
        $timestamp=strtotime($product_in_orders[0]['created_at']);
        $total=0;
        $disc=0;
        $presentationTotal=0;
        foreach($product_in_orders as $p){
            if($p['productName']==$discounts[(int)date('m',$timestamp)-1]['product']){
                $id = $p['id'];
                $monthDiscount = $discounts[(int)date('m',$timestamp)-1]['discountAmount'];
                break;
            }
            else{
                $id=0;
                $monthDiscount=0;
            }
        }

        if($id != 0) {
            $total = $customerOrder[0]['total'] - $product_in_orders[0]['price']*$monthDiscount;
        }
        else {
            $total = $customerOrder[0]['total'];
        }

        foreach($customerOrders as $co) {
                $presentationTotal += $co['total'];
        }


        if($customer[0]['host']>=10 && (($presentationTotal >= $threshold[(int)date('m',$timestamp)-1]['moneyThreshold']) && $customerOrder[0]['customerId'] ==  $presentations[0]['hostId'])) {
            $total -= $total*0.2;
            $disc = 20;
        }
        else if($customer[0]['host']>=10 || (($presentationTotal >= $threshold[(int)date('m',$timestamp)-1]['moneyThreshold']) && $customerOrder[0]['customerId'] ==  $presentations[0]['hostId'] )) {
            $total -= $total*0.1;
            $total = round($total , 2);
            $disc = 10;
        }

        return view('print', compact('customer','threshold','product_in_orders','customerOrder','discounts','id','monthDiscount','total','disc'));
    }
}
