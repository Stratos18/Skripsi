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
        User::create([
            'username' => 'bmkg-pusat',
            'kantor' => 'bmkg',
            'password' =>'bmkg',
            'remember_token' => Str::random(68),
            'level'=>'admin',
        ]);
    }
}
