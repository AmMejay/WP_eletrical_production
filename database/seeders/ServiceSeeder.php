<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
             [
                'name' => 'Instalação de tomada',
                'slug' => 'instalacao-de-tomada',
                'description' => 'Instalação de uma tomada.',
                'active' => true,
            ],
            [
                'name' => 'Diagnóstico elétrico',
                'slug' => 'diagnostico-eletrico',
                'description' => 'Avaliação de problemas elétricos.',
                'active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }
    }
}
