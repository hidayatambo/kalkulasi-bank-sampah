<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Nama Anda',
            'email' => 'email@example.com',
            'password' => Hash::make('password'), // Gantilah dengan kata sandi yang Anda inginkan
        ]);
    }
}
