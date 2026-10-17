<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Elétrica',
                'slug' => 'eletrica',
                'description' => 'Serviços relacionados a instalações e reparos elétricos.',
                'active' => true,
            ],
            [
                'name' => 'Hidráulica',
                'slug' => 'hidraulica',
                'description' => 'Serviços relacionados a encanamentos e sistemas hidráulicos.',
                'active' => true,
            ],
        ];

        foreach ($categories as $category) {
            Categories::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}
