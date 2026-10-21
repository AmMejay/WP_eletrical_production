<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Supportve\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // User::create([
        //     'name' => 'Administrador',
        //     'email' => 'admin@email.com',
        //     'password' => Hash::make('senha_segura123'), // Sempre use Hash::make
        // ]);

        User::factory(10)->create();
    }
}
