<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HealthFacility extends Model
{
    use HasFactory;


    protected $fillable = [
        'facility_type_id',
        'name_si',
        'address_si',

    ];

    public function facilityType(): BelongsTo
    {
        return $this->belongsTo(FacilityType::class, 'facility_type_id');
    }
}
