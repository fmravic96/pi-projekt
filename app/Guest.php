<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'idPrez',
        'guestId',
        'name',
    ];

    protected $table='guests';
}
