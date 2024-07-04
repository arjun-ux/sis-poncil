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
        $this->call(IndoRegionProvinceSeeder::class);
        $this->call(IndoRegionRegencySeeder::class);
        $this->call(IndoRegionDistrictSeeder::class);
        $this->call(IndoRegionVillageSeeder::class);
        $this->call(PekerjaanSeeder::class);
        $this->call(PendidikanSeeder::class);
        DB::table('roles')->insert([
            'name' => 'admin'
        ]);
        DB::table('roles')->insert([
            'name' => 'saba'
        ]);
        // table user admin
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'superadmin@gmail.com',
            'password'=> Hash::make('123123'),
            'role' => 'admin'
        ]);
        // table user saba
        DB::table('users')->insert([
            'username' => Saba::generateNis(),
            'email' => 'saba@gmail.com',
            'password'=> Hash::make('123123'),
            'role' => 'saba'
        ]);
        // table saba
        DB::table('sabas')->insert([
            'user_id' => 2,
            'nis' => Saba::generateNis(),
            'nama_lengkap' => 'santri baru'
        ]);
    }
}
