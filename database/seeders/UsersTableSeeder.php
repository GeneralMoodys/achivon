<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hapus pengguna yang sudah ada dengan email tertentu
        User::where('email', 'admin@example.com')->delete();
        User::where('email', 'spv@example.com')->delete();

        // Membuat user admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        // Membuat user spv
        User::create([
            'name' => 'Spv User',
            'email' => 'spv@example.com',
            'password' => Hash::make('password'),
            'role' => 'spv'
        ]);
    }

    
}
