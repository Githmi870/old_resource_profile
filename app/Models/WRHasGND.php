<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WRHasGND extends Model
{
    protected $fillable = [
        'wr_id',
        'gnd_uid',
    ];

    public $timestamps = false;

    public function waterResource()
    {
        return $this->belongsToMany(WaterResource::class, 'wr_id', 'wr_id');
    }

    public function gnd()
    {
        return $this->belongsToMany(GramaNiladariDivision::class, 'gnd_uid', 'gnd_uid');
    }
}
