<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'active',
        'category_id',
    ];

    protected function casts(): array
    {
        return [
            'active' => 'boolean',
        ];
    }
}
