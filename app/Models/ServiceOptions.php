<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceOptions extends Model
{

    protected $table = 'servicesOptions';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'pricing_type',
        'price',
        'duration_minutes',
        'active',
        'service_id',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'active' => 'boolean',
        ];
    }
}
