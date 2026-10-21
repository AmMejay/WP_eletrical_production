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
                'name' => 'iluminação',
                'slug' => 'iluminacao',
                'description' => 'Instalação de iluminação.',
                'active' => true,
                'category_id' => 1, // Assumindo que 'Elétrica' tem ID = 1
            ],
            [
                'name' => 'Ponto de Utilização',
                'slug' => 'ponto-de-utilizacao',
                'description' => 'Instalação de ponto de utilização.',
                'active' => true,
                'category_id' => 1,
            ],
            [
                'name' => 'Quadro de Distribuição',
                'slug' => 'quadro-de-distribuicao',
                'description' => 'Instalação de quadro de distribuição.',
                'active' => true,
                'category_id' => 1,
            ],
            [
                'name' => 'Passagem de Cabos',
                'slug' => 'passagem-de-cabos',
                'description' => 'Instalação de passagem de cabos.',
                'active' => true,
                'category_id' => 1,
            ],
            [
                'name' => 'Solução de Problemas Eletricos',
                'slug' => 'solucao-de-problemas-eletricos',
                'description' => 'Solução de problemas elétricos.',
                'active' => true,
                'category_id' => 1,
            ],
            [
                'name' => 'Padrão de entrada de energia',
                'slug' => 'padrao-de-entrada-de-energia',
                'description' => 'Instalação de padrão de entrada de energia.',
                'active' => true,
                'category_id' => 1,
            ],
            [
                'name' => 'Carregado Veicular',
                'slug' => 'carregado-veicular',
                'description' => 'Instalação de carregador veicular.',
                'active' => true,
                'category_id' => 1,
            ],
            [
                'name' => 'Ar Condicionado',
                'slug' => 'ar-condicionado',
                'description' => 'Instalação de ar condicionado.',
                'active' => true,
                'category_id' => 1,
            ],
            [
                'name' => 'Sistema Solar',
                'slug' => 'sistema-solar',
                'description' => 'Instalação de sistema solar.',
                'active' => true,
                'category_id' => 1,
            ],
            [
                'name' => 'Atendimento técnico emergencial',
                'slug' => 'atendimento-tecnico-emergencial',
                'description' => 'Atendimento técnico emergencial.',
                'active' => true,
                'category_id' => 1,
            ],
            [
                'name' => 'Automação Residencial',
                'slug' => 'automação-residencial',
                'description' => 'Instalação de automação residencial.',
                'active' => true,
                'category_id' => 1,
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
