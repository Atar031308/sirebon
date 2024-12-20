<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::query()->delete();
        User::create([
            'name' => 'Admin',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'name' => 'wajib_retribusi',
            'level' => 'wajib_retribusi',
            'email' => 'wajib_retribusi@gmail.com',
            'password' => bcrypt('987654'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'name' => 'superadmin',
            'level' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('7654321'),
            'remember_token' => Str::random(60),
        ]);
    }
}
