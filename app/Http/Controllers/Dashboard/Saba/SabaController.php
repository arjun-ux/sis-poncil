<?php

namespace App\Http\Controllers\Dashboard\Saba;

use App\Http\Controllers\Controller;
use App\Models\Saba;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SabaController extends Controller
{
    // index dashboard saba
    public function index()
    {
        $saba = Auth::id();
        $dataSaba = Saba::where('user_id', $saba)->first();
        // dd($dataSaba);
        return view('dashboard.saba.index', compact('dataSaba'));
    }
    // kelengkapan data saba
    public function data_diri(){
        $idUser = Auth::id();
        $sabaUser = Saba::where('user_id', $idUser)->first();
        // dd($sabaUser);
        return view('dashboard.saba.data_diri', compact('sabaUser'));
    }
    // update data diri saba
    public function updateDataDiri(Request $r, $id)
    {
        $r->validate([
            //
        ]);
        $userSaba = Auth::id();
        $data = Saba::where('user_id', $userSaba)->update([
            'nik' => $r->nik,
            'nokk' => $r->nokk,
            'nama_lengkap' => $r->nama_lengkap,
            'tempat_lahir' => $r->tempat_lahir,
            'tanggal_lahir' => $r->tanggal_lahir,
            'jenis_kelamin' => $r->jenis_kelamin,
            'alamat' => $r->alamat,
        ]);
        return response()->json(['data'=> $data],200);
    }
}
