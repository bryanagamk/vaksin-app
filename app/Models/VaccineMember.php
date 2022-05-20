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
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
