<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pendidikans = [
            [
                "nama_pendidikan" => "Tidak Sekolah",
            ],
            [
                "nama_pendidikan" => "PAUD/TK",
            ],
            [
                "nama_pendidikan" => "SD/MI",
            ],
            [
                "nama_pendidikan" => "SLTP",
            ],
            [
                "nama_pendidikan" => "SLTA",
            ],
            [
                "nama_pendidikan" => "D1",
            ],
            [
                "nama_pendidikan" => "D2",
            ],
            [
                "nama_pendidikan" => "D3",
            ],
            [
                "nama_pendidikan" => "D4",
            ],
            [
                "nama_pendidikan" => "S1",
            ],
            [
                "nama_pendidikan" => "S2",
            ],
            [
                "nama_pendidikan" => "S3",
            ],
            [
                "nama_pendidikan" => "Pesantren",
            ],
            [
                "nama_pendidikan" => "PGA",
            ]
        ];
        DB::table('pendidikans')->insert($pendidikans);

    }
}
