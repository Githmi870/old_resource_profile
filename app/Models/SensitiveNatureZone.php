<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SensitiveNatureZone extends Model
{
    protected $fillable = [
        'snz_name',
        'snz_importance',
        'normalized_name',
    ];

    public $timestamps = false;
}
