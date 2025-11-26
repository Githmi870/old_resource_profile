<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NaturalDisaster extends Model
{
    protected $fillable = [
        'nd_id',
        'nd_name',
    ];

    public $timestamps = false;
}
