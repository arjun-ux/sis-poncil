<?php

namespace App\Http\Controllers\Dashboard\Saba;

use App\Http\Controllers\Controller;
use App\Models\Saba;
use App\Models\SabaMasukPondok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AsalSekolahController extends Controller
{
    // index
    public function index()
    {
        $saba = Saba::where('user_id', Auth::user()->id)->first();
        $sabaMasuk = SabaMasukPondok::where('saba_id' ,$saba->id )->first();
        // dd($sabaMasuk);
        return view('dashboard.saba.asal_sekolah', compact('sabaMasuk'));
    }
    public function updateAsalSekolah(Request $request, $id)
    {
        $request->validate([
            //
        ]);
        $saba = Saba::where('user_id', Auth::user()->id)->first();
        $sabaMasuk = SabaMasukPondok::where('saba_id' ,$saba->id)->update([
            'asal_sekolah' => $request->asal_sekolah,
            'alamat_asal_sekolah' => $request->alamat_asal_sekolah,
            'diterima_dikelas' => $request->diterima_dikelas,
            'no_surat_pindah' => $request->no_surat_pindah,
        ]);
    }
}
