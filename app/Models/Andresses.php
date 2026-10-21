<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Andresses extends Model
{
    protected $fillable = [
        'cep',
        'street',
        'city',
        'reference',
        'number',
        'user_id'
    ];
}
