<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NDHasGND extends Model
{
    protected $fillable = [
        'nd_id',
        'gnd_uid',
        'nd_period',
        'nd_solution',
    ];

    public $timestamps = false;
}
