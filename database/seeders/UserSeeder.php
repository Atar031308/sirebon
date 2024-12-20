<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'level' => 'admin',
            'password' => bcrypt('12345'),  // Gunakan bcrypt untuk mengenkripsi password
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'username' => 'wajib_retribusi',
            'level' => 'wajib_retribusi',
            'password' => bcrypt('wajib_retribusi123'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'username' => 'superadmin',
            'level' => 'superadmin',
            'password' => bcrypt('123'),
            'remember_token' => Str::random(60),
        ]);
    }
}