<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'name' => 'petugas',
            'password' => bcrypt('petugas1'),
            'remember_token' => Str::random(68),
            'email' => 'petugas.com',
        ]);
    }
}