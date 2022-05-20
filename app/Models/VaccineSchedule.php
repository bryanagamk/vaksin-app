<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'vaccinator_id',
        'vaccine_type_id',
        'vaccine_regisdate_start',
        'vaccine_regisdate_end',
        'vaccine_date',
        'vaccine_session_start',
        'vaccine_session_end',
        'location',
        'quota',
    ];

    public function vaccinator()
    {
        return $this->belongsTo(Vaccinator::class);
    }

    public function vaccine_type()
    {
        return $this->belongsTo(VaccineType::class);
    }

    public function members()
    {
        return $this->hasMany(VaccineMember::class);
    }
}
