<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GramaNiladariDivision;

class AbondenedGovernmentBuilding extends Model
{
    protected $fillable = [
        'ab_name',
        'ab_used_for',
        'ab_is_retrievable',
        'normalized_name',
    ];

    public function gnd() {
        return $this->belongsTo(GramaNiladariDivision::class,'gnd_uid', 'gnd_uid');
    }
}
