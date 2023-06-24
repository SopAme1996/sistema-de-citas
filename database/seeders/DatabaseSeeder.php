<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Luis Enrique Solis Puc',
            'nickName' => 'Lsolis',
            'email' => 'admin@material.com',
            'password' => ('secret'),
            'status' => 1
        ]);
    }
}
