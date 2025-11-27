<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TDHasGND extends Model
{
    protected $fillable = [
        'td_id',
        'gnd_uid',
    ];
}
