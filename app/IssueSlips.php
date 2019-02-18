<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssueSlips extends Model
{
    protected $fillable = [
        'idPrez',
        'orderId',
        'distributerName',
    ];

    protected $table='issue_slips';
}
