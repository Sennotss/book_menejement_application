<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Test',
            'email' => 'tes32@example.com',
            'password' => bcrypt('admin'),
            'level' => 'Admin',
            'status' => 'Aktif',
        ]);
    }
}
