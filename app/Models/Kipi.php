<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kipi extends Model
{
    use HasFactory;

    protected $fillable = [
        'vaccine_member_id',
        'kipi_date',
        'symptomps',
        'medical_treatment',
        'call_doctor',
    ];

    public function member()
    {
        return $this->belongsTo(VaccineMember::class);
    }
}
