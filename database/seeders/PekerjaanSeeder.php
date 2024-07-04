<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pekerjaans = [
            [
                "nama_pekerjaan" => "TIDAK BEKERJA",
            ],
            [
                "nama_pekerjaan" => "PNS",
            ],
            [
                "nama_pekerjaan" => "GURU",
            ],
            [
                "nama_pekerjaan" => "PENGUSAHA",
            ],
            [
                "nama_pekerjaan" => "PETANI",
            ],
            [
                "nama_pekerjaan" => "PEKERJA PABRIK",
            ],
            [
                "nama_pekerjaan" => "TUKANG BANGUNAN",
            ],
            [
                "nama_pekerjaan" => "PENSIUNAN",
            ],
            [
                "nama_pekerjaan" => "TNI/POLRI",
            ],
            [
                "nama_pekerjaan" => "WIRASWASTA",
            ],
            [
                "nama_pekerjaan" => "PEDAGANG",
            ],
            [
                "nama_pekerjaan" => "NELAYAN",
            ],
            [
                "nama_pekerjaan" => "SUPIR/KONDEKTUR",
            ],
            [
                "nama_pekerjaan" => "LAINNYA",
            ],
            [
                "nama_pekerjaan" => "Mubaligh",
            ],
            [
                "nama_pekerjaan" => "Karyawan",
            ],
            [
                "nama_pekerjaan" => "Ibu Rumah Tangga",
            ],
            [
                "nama_pekerjaan" => "Penjahit",
            ],
        ];
        DB::table('pekerjaans')->insert($pekerjaans);
    }
}
