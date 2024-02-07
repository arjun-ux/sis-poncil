<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saba extends Model
{
    use HasFactory;
    protected $guarded = [];
    /**
     * Get the user that owns the Saba
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public static function generateNis()
    {
        $tahun = date('Y');
        // ambil 2 angka terkahir dari tahun
        $getDuaAngka = substr($tahun, -2);
        // ambil data siswa terakhir
        $lastSiswa = self::latest()->first();
        if ($lastSiswa == null) {
            // jika datanya kosong maka buatkan 0001
            $noUrut = '0001';
        } else {
            $noUrut = substr($lastSiswa->nis, 2, 4) + 1;
            // $noUrut ='000' . $noUrut;
            $noUrut = str_pad($noUrut, 4, '0', STR_PAD_LEFT);
        }
        $nis = $getDuaAngka . $noUrut;
        return $nis;
    }
    public function Provinsi(){
        return $this->belongsTo(Province::class,'provinsi');
    }
    public function Kabupaten(){
        return $this->belongsTo(Regency::class,'kabupaten', 'id');
    }
    public function Kecamatan(){
        return $this->belongsTo(District::class,'kecamatan', 'id');
    }
    public function Desa(){
        return $this->belongsTo(Village::class,'desa', 'id');
    }
}
