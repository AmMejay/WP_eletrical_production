<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            "name" => "Instalação de Tomada",
            "slug" => "Instalacao-de-tomada",
            "description",
            "price",
            "duration_minutes",
            "active",
        ];
    }
} 
