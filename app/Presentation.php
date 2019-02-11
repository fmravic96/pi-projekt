<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    protected $fillable = [
        'idPrez',
        'hostId',
        'host',
    ];

    protected $table='presentations';
}
