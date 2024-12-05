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
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'name' => 'karyawan',
            'level' => 'karyawan',
            'email' => 'karyawan@gmail.com',
            'password' => bcrypt('karyawan123'),
            'remember_token' => Str::random(60),
        ]);

        User::create([
            'name' => 'superadmin',
            'level' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('123'),
            'remember_token' => Str::random(60),
        ]);
    }
}
