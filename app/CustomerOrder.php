<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    protected $fillable = [
        'presentationId',
        'customerName',
        'total',
    ];

    protected $table='customer_orders';
}
