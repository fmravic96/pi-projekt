<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    protected $fillable = [
        'presentationId',
        'presentatorId',
        'customerId',
        'total',
    ];

    protected $table='customer_orders';
}
