<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaterResource extends Model
{
    protected $fillable = [
        'wr_name',
        'wr_type',
        'normalized_name',
    ];

    public $timestamps = false;
}
