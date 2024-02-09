<?php

namespace App\Http\Controllers\Dashboard\Saba;

use App\Http\Controllers\Controller;
use App\Models\Saba;
use App\Models\SabaMasukPondok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
            'asal_sekolah' => 'required',
            'alamat_asal_sekolah' => 'required',
            'no_surat_pindah' => 'required',
        ],[
            'asal_sekolah.required' => 'Nama asal sekolah tidak boleh kosong!',
            'alamat_asal_sekolah.required' => 'Alamat asal sekolah tidak boleh kosong!',
            'no_surat_pindah.required' => 'Nomor Surat Pindah tidak boleh kosong!',
        ]);
        $saba = Saba::where('user_id', Auth::user()->id)->first();
        $sabaMasuk = SabaMasukPondok::where('saba_id' ,$saba->id)->update([
            'asal_sekolah' => $request->asal_sekolah,
            'alamat_asal_sekolah' => $request->alamat_asal_sekolah,
            'diterima_dikelas' => $request->diterima_dikelas,
            'no_surat_pindah' => $request->no_surat_pindah,
        ]);
        if ($sabaMasuk) {
            // redirect dengan pesan sukses
            return Redirect::to(route('sabaBerkas'))->with('success', 'Data Berhasil Disimpan');
        }
    }
}
