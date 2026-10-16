<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        "name",
        "slug",
        "descricao",
        "pricing_type",
        "pricing",
        "duration_minutes",
        "active",
    ];

    protected function casts(): array
    {
        return [
            "price" => "decimal:2",
            "active" => "boolean",
        ];
    }
}
