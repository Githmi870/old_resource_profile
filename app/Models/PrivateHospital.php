<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivateHospital extends Model
{
    protected $fillable = [
        'ph_id',
        'ph_name',
        'ph_address',
    ];
}
