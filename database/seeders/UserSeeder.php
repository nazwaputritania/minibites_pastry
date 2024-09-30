<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => '2tania',
            'email' => '2tania@gmail.com',
            'password' => bcrypt('taniaaaaa2'),
            'role' => 'admin',
        ]);
    }
}
