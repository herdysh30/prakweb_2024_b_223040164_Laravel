<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    
    
    public function run(): void
    {
        User::create([
            'name' => "Herdy Sya'banul Hakim",
            'username' =>'herdysh',
            'email' => 'herdy.syaban@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10)
        ]);
        User::factory(5)->create();
    }
}
