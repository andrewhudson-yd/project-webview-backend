<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'email' => 'andyhudson.dev@gmail.com',
                'password' => Hash::make('password'), // 🔐 default password
                'device_token' => null, // optional if you added this column
            ]
        );
    }
}