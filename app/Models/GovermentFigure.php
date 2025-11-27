<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GovermentFigure extends Model
{
    protected $fillable = [
        'gf_name',
        'gf_type',
        'gf_address',
        'normalized_name'
    ];
    
    public $timestamps = false;


    public function gnd()
    {
        return $this->belongsTo(GramaNiladariDivision::class, 'gnd_uid', 'gnd_uid');
    }

}
