<?php

namespace App\Http\Controllers\Dashboard\Saba;

use App\Http\Controllers\Controller;
use App\Models\Berkas;
use App\Models\Saba;
use App\Models\Regency;
use App\Models\District;
use App\Models\OrangTua;
use App\Models\Province;
use App\Models\SabaMasukPondok;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SabaController extends Controller
{
    // index dashboard saba
    public function index()
    {
        $dataSaba = Saba::where('user_id', Auth::user()->id)->first();
        $dataOrtu = OrangTua::where('saba_id', $dataSaba->id)->first();
        $dataAsalSekolah = SabaMasukPondok::where('saba_id', $dataSaba->id)->first();
        $berkasSaba = Berkas::where('saba_id', $dataSaba->id)->first();
        // dd($berkasSaba);
        return view('dashboard.saba.index', compact('dataSaba','dataOrtu','dataAsalSekolah','berkasSaba'));
    }
    // kelengkapan data saba
    public function data_diri(){
        $provinsi = Province::get();
        $sabaUser = Saba::where('user_id', Auth::user()->id)->first();
        $dataOrtu = OrangTua::where('saba_id', $sabaUser->id)->first();
        $dataAsalSekolah = SabaMasukPondok::where('saba_id', $sabaUser->id)->first();
        $berkasSaba = Berkas::where('saba_id', $sabaUser->id)->first();
        return view('dashboard.saba.data_diri', compact('sabaUser','provinsi','dataOrtu','dataAsalSekolah','berkasSaba'));
    }
    // update data diri saba
    public function updateDataDiri(Request $r)
    {
        $r->validate([
            //
        ]);
        $userSaba = Auth::id();
        $originalData = Saba::where('user_id' ,$userSaba)->first();
        // dd($originalData);
        $data = Saba::where('user_id', $userSaba)->update([
            'nik' => $r->nik,
            'nokk' => $r->nokk,
            'nama_lengkap' => $r->nama_lengkap,
            'tempat_lahir' => $r->tempat_lahir,
            'tanggal_lahir' => $r->tanggal_lahir,
            'jenis_kelamin' => $r->jenis_kelamin,
            'anak_ke' => $r->anak_ke,
            'jumlah_saudara' => $r->jumlah_saudara,
            'provinsi' => $r->provinsi,
            'kabupaten' => $r->kabupaten,
            'kecamatan' => $r->kecamatan,
            'desa' => $r->desa,
            'dusun' => $r->dusun,
            'rt_rw' => $r->rt_rw,
            'alamat' => $r->alamat,
        ]);

        $dataOrtu = OrangTua::create([
            'saba_id' => $originalData->id,
        ]);
        return Redirect::to(route('dataOrtu'))->with('success','Data Berhasil Di Ubah');
    }

    public function fetchkota(Request $request)
    {
        $data['kota'] = Regency::where("province_id", $request->province_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function fetchKecamatan(Request $request)
    {
        $data['kecamatan'] = District::where("regency_id", $request->regency_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function fetchDesa(Request $request)
    {
        $data['desa'] = Village::where("district_id", $request->district_id)->get(["name", "id"]);
        return response()->json($data);
    }
}
