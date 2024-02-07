<?php

namespace App\Http\Controllers\Dashboard\Saba;

use App\Http\Controllers\Controller;
use App\Models\OrangTua;
use App\Models\Saba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrtuController extends Controller
{
    // index
    public function index()
    {
        // $sabaUser = auth()->user();
        $saba = Saba::where('user_id', Auth::user()->id)->first();
        $dataOrtu = OrangTua::where('saba_id', $saba->id)->first();
        // dd($dataOrtu);
        return view('dashboard.saba.data_ortu', compact('dataOrtu'));
    }
    public function updateOrtu(Request $request, $id)
    {
        $request->validate([
            //
        ]);
        $saba = Saba::where('user_id', Auth::user()->id)->first();
        $dataOrtu = OrangTua::where('saba_id', $saba->id)->update([
            'nik_ayah' => $request->nik_ayah,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'no_hp_ayah' => $request->no_hp_ayah,
            'nik_ibu' => $request->nik_ibu,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'no_hp_ibu' => $request->no_hp_ibu,
        ]);

        // dd($request);
        return 'Berhasil';
    }
}
