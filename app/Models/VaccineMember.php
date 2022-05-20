<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'vaccine_schedule_id',
        'user_id',
        'number_vaccine',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function schedule()
    {
        return $this->belongsTo(VaccineSchedule::class, 'vaccine_schedule_id', 'id');
    }

    public function kipis()
    {
        return $this->hasMany(Kipi::class);
    }
}
