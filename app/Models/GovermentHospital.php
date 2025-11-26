<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GovermentHospital extends Model
{
    protected $fillable = [
        'gh_id',
        'gh_name',
        'gh_type',
    ];
}
