<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Threshold extends Model
{
    
    protected $fillable = [
        'moneyThreshold',
    ];

    protected $table='threshold';
}
