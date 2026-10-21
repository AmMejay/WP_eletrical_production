<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceOptions;

class ServiceOptionsSeeder extends Seeder
{
    public function run(): void
    {
        $servicesOptions = [
            [
                'name' => 'Instalação de tomada',
                'slug' => 'instalacao-de-tomada',
                'description' => 'Instalação de uma tomada.',
                'pricing_type' => 'fixed',
                'price' => 80.00,
                'duration_minutes' => 60,
                'active' => true,
            ],
            [
                'name' => 'Diagnóstico elétrico',
                'slug' => 'diagnostico-eletrico',
                'description' => 'Avaliação de problemas elétricos.',
                'pricing_type' => 'quote',
                'price' => null,
                'duration_minutes' => null,
                'active' => true,
            ],
        ];

        foreach ($servicesOptions as $serviceOption) {
            ServiceOptions::updateOrCreate(
                ['slug' => $serviceOption['slug']],
                $serviceOption
            );
        }
    }
}
