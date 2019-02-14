<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    
    protected $fillable = [
        'discountAmount',
        'product',
    ];

    protected $table='discounts';
}
