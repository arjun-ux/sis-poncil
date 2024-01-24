<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\Saba;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            'username' => 'admin',
            'email' => 'superadmin@gmail.com',
            'password'=> Hash::make('123123'),
            'role' => 'admin'
        ]);
        User::create([
            'username' => Saba::generateNis(),
            'email' => 'saba@gmail.com',
            'password'=> Hash::make('123123'),
            'role' => 'saba'
        ]);

        DB::table('sabas')->insert([
            'nis' => Saba::generateNis(),
            'user_id' => 2,
            'nama_lengkap' => 'santri baru'
        ]);
    }
}
