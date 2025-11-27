<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SNZHasGND extends Model
{
    protected $fillable = [
        'snz_id',
        'gnd_uid',
    ];

    public $timestamps = false;

    public function sensitiveNatureZone()
    {
        return $this->belongsToMany(SensitiveNatureZone::class, 'snz_id', 'snz_id');
    }

    public function gramaNiladariDivision()
    {
        return $this->belongsToMany(GramaNiladariDivision::class, 'gnd_uid', 'gnd_uid');
    }
}
