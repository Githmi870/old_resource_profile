<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GovernmentHospital extends Model
{
    protected $fillable = [
        'gh_name',
        'gh_type',
    ];

    public $timestamps = false;
}
