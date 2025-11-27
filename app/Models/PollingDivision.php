<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PollingDivision extends Model
{
    protected $fillable = ['pd_code','pd_name'];

    public $timestamps = false;
}
