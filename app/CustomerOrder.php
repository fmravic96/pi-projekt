<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    protected $fillable = [
        'orderDate',
        'customerName',
        'price',
    ];

    protected $table='customerorder';
}
