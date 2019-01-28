<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'name',
        'homeAdress',
        'city',
        'email',
        'phone',
        'gender',
    ];

    protected $table='customers';
}
