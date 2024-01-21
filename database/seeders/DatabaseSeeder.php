<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
        ]);
        Role::create([
            'name' => 'saba',
        ]);
        User::create([
            'name' => 'Super admin',
            'email' => 'superadmin@gmail.com',
            'password'=> Hash::make('123123'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Santri Baru',
            'email' => 'saba@gmail.com',
            'password'=> Hash::make('123123'),
            'role' => 'saba'
        ]);
    }
}
