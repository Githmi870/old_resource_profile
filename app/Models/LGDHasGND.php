<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GramaNiladariDivision;
use App\Models\LocalGovernmentDivision;

class LGDHasGND extends Model
{
    protected $fillable = [
        'gnd_uid',
        'lgd_code',
    ];

    public $timestamps = false;

    public function gnd()
    {
        return $this->belongsToMany(GramaNiladariDivision::class, 'gnd_uid', 'gnd_uid');
    }

    public function lgd()
    {
        return $this->belongsToMany(LocalGovernmentDivision::class, 'lgd_code', 'lgd_code');
    }
}
