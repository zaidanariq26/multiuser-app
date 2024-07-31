<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'User1',
            'email' => 'user1@gmail.com',
            'role' => 'user',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin1@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('password')
        ]);
    }
}
