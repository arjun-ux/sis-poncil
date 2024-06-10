<?php

namespace App\Providers\Service;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class IndoRegionService extends ServiceProvider
{
    // fetch-kota
    public static function Kota($request){
        $data['kota'] = DB::table('regencies')->where('province_id', $request->province_id)
            ->get(['name','id']);
        return $data;
    }
    // fetch-kecamatan
    public static function Kecamatan($request){
        $data['kecamatan'] = DB::table('districts')->where('regency_id', $request->regency_id)
            ->get(['name', 'id']);
        return $data;
    }
    // fetch-desa
    public static function Desa($request){
        $data['desa'] = DB::table('villages')->where('district_id', $request->district_id)
            ->get(['name', 'id']);
        return $data;
    }
}
