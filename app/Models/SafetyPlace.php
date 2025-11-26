<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SafetyPlace extends Model
{
    protected $fillable = [
        'sp_name',
        'sp_address',
    ];
}
