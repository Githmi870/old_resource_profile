<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TouristDestination extends Model
{
    protected $fillable = [
        'td_name',
        'td_reason',
        'td_ownership',
    ];
}
