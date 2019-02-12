<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInOrder extends Model
{
    protected $fillable = [
        'orderId',
        'productName',
        'quantity',
        'price',
    ];

    protected $table='product_in_orders';
}
