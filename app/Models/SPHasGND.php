<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SPHasGND extends Model
{
    protected $fillable = [
        'sp_id',
        'gnd_uid',
    ];
}
