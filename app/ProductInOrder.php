<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInOrder extends Model
{
    protected $fillable = [
        'orderId',
        'name',
        'quantity',
    ];

    protected $table='productinorder';
}
