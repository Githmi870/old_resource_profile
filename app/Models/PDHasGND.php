<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PDHasGND extends Model
{
    protected $fillable = ['gnd_uid','pd_code'];
    public $timestamps = false;

    public function gnd()
    {
        return $this->belongsToMany(GramaNiladariDivision::class, 'gnd_uid', 'gnd_uid');
    }

    public function pollingDivision()
    {
        return $this->belongsToMany(PollingDivision::class, 'pd_code', 'pd_code');
    }
}
