<?php

namespace App\Http\Controllers\Dashboard\Saba;

use App\Http\Controllers\Controller;
use App\Models\Berkas;
use App\Models\Saba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BerkasController extends Controller
{
    // index
    public function index()
    {
        $saba = Saba::where('user_id', Auth::user()->id)->first();
        $berkas = Berkas::where('saba_id', $saba->id)->first();
        // dd($berkas);
        return view('dashboard.saba.berkas', compact('saba', 'berkas'));
    }
    public function updateBerkas(Request $request)
    {
        $saba = Saba::where('user_id', Auth::user()->id)->first();
        $berkas = Berkas::where('saba_id', $saba->id)->first();
        $saba_name = $saba->nama_lengkap;
        $replaceName = str_replace(' ','_', $saba_name);

        $foto = $berkas->foto;
        $kk = $berkas->kk;
        $ktp_ortu = $berkas->ktp_ortu;
        $ktp_wali = $berkas->ktp_wali;
        // dd($request);
        // file foto
        if ($request->hasFile('foto')) {
            // jika berkasnya null, maka
            if ($berkas && File::exists(storage_path('fotos/'.$berkas->foto))) {
                unlink('foto/' . $berkas->foto);
            }
            $file = $request->file('foto');
            $name = 'Foto'.'_'. $replaceName .'.'. $file->getClientOriginalExtension();
            $foto = $file->storeAs('fotos', $name, 'public');
        }else{
            $foto = $berkas->foto;
        }
        // file kk
        if ($request->hasFile('kk')) {
            // jika berkasnya null, maka
            if ($berkas && File::exists(storage_path('kk/'.$berkas->kk))) {
                unlink('kk/' . $berkas->kk);
            }
            $file = $request->file('kk');
            $name = 'KK'.'_'. $replaceName .'.'. $file->getClientOriginalExtension();
            $kk = $file->storeAs('kks', $name, 'public');
        }else{
            $kk = $berkas->kk;
        }
        // file ktp_ortu
        if ($request->hasFile('ktp_ortu')) {
            // jika berkasnya null, maka
            if ($berkas && File::exists(storage_path('ktp_ortu/'.$berkas->ktp_ortu))) {
                unlink('ktp_ortu/' . $berkas->ktp_ortu);
            }
            $file = $request->file('ktp_ortu');
            $name = 'KTP_ORTU'.'_'. $replaceName .'.'. $file->getClientOriginalExtension();
            $ktp_ortu = $file->storeAs('ktp_ortus', $name, 'public');
        }else{
            $ktp_ortu = $berkas->ktp_ortu;
        }
        // file ktp_wali
        if ($request->hasFile('ktp_wali')) {
            // jika berkasnya null, maka
            if ($berkas && File::exists(storage_path('ktp_wali/'.$berkas->ktp_wali))) {
                unlink('ktp_wali/' . $berkas->ktp_wali);
            }
            $file = $request->file('ktp_wali');
            $name = 'KTP_WALI'.'_'. $replaceName .'.'. $file->getClientOriginalExtension();
            $ktp_wali = $file->storeAs('ktp_walis', $name, 'public');
        }else{
            $ktp_wali = $berkas->ktp_wali;
        }

        Berkas::where('saba_id', $saba->id)->update([
            'foto' => $foto,
            'kk' => $kk,
            'ktp_ortu' => $ktp_ortu,
            'ktp_wali' => $ktp_wali,
        ]);

        return back()->with('success','Data Berhasil Di Simpan');
    }
}
