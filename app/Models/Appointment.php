<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'appointment_at',
        'description_appointment',
        'status',
        'user_id',
        'address_id',
        'user_id',
        'address_id',
        'service_option_id',
    ];

    protected $casts = [
        'appointment_at' => 'datetime',
    ];
}
