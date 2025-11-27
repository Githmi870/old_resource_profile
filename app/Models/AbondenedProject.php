<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GramaNiladariDivision;

class AbondenedProject extends Model
{
    protected $fillable = [
        'ap_id',
        'ap_name',
        'ap_reason',
        'normalized_name',
    ];

    public function gnd() {
        return $this->belongsTo(GramaNiladariDivision::class, 'gnd_uid', 'gnd_uid');
    }
}
