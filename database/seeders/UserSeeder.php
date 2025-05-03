<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'), // Ganti dengan password yang kamu mau
        ]);

        // Bisa tambah user lain juga
        User::factory()->count(10)->create(); // kalau pakai factory
    }
}
