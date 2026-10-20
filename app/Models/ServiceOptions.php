<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceOptions extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'pricing_type',
        'price',
        'duration_minutes',
        'active',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'active' => 'boolean',
        ];
    }
}
