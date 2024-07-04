<?php

namespace App\Providers\Service;

use App\Models\OrangTua;
use App\Models\Saba;
use App\Models\User;
use App\Models\WaliSaba;
use App\Providers\RouteParamService as routeParam;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\ServiceProvider;


class SantriService extends ServiceProvider
{
    protected $request;
    // getAllData
    public static function getAll(){
        $data = DB::table('sabas')->get();
        return $data;
    }
    // get santri by id
    public static function getById($id){
        $data = Saba::where('id', $id)->first();
        return $data;
    }

    // create saba
    public static function StoreSantri($request){
        $request->validate([
            'email' => 'required|unique:users,email',
            'nik' => 'required|min:16|max:16',
            'nokk' => 'required|min:16|max:16',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'nik_ayah' => 'required',
            'nama_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nik_ibu' => 'required',
            'nama_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
        ],[
            'email.required' => 'Email Wajib Di Isi',
            'email.unique' => 'Email Sudah Terdaftar',
            'nik.required' => 'Nik Wajib Di Isi',
            'nik.min' => 'Nik Harus 16 Karakter',
            'nik.max' => 'Nik Harus 16 Karakter',
            'nokk.required' => 'NO KK Wajib Di Isi',
            'nokk.min' => 'Nik Harus 16 Karakter',
            'nokk.max' => 'Nik Harus 16 Karakter',
            'nama_lengkap.required' => 'Nama Lengkap Wajib Di Isi',
            'tempat_lahir.required' => 'Tempat Lahir Wajib Di Isi',
            'tanggal_lahir.required' => 'Tanggal Lahir Wajib Di Isi',
            'provinsi.required' => 'Provinsi Wajib Di Isi',
            'kabupaten.required' => 'Kabupaten Wajib Di Isi',
            'kecamatan.required' => 'Kecamatan Wajib Di Isi',
            'desa.required' => 'Desa Wajib Di Isi',
            'nik_ayah.required' => 'NIK Ayah Wajib Di Isi',
            'nama_ayah.required' => 'Nama Ayah Wajib Di Isi',
            'pekerjaan_ayah.required' => 'Pekerjaan Ayah Wajib Di Isi',
            'nik_ibu.required' => 'NIK Ibu Wajib Di Isi',
            'nama_ibu.required' => 'Nama Ibu Wajib Di Isi',
            'pekerjaan_ibu.required' => 'Pekerjaan Ibu Wajib Di Isi',
        ]);
        $user = User::create([
            'username' => Saba::generateNis(),
            'email' => $request->email,
            'password' => 'santribaru',
            'role' => 'saba'
        ]);
        $santri = Saba::create([
            'user_id' => $user->id,
            'nis' => $user->username,
            'nik' => $request->nik,
            'nokk' => $request->nokk,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'desa' => $request->desa,
            'dusun' => $request->dusun,
            'rt_rw' => $request->rt_rw,
            'alamat' => $request->alamat,
        ]);
        $ortu = OrangTua::create([
            'saba_id' => $santri->id,
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
        if ($request->wali === 'Ayah') {
            WaliSaba::create([
                'saba_id' => $ortu->saba_id,
                'nama_wali' => $ortu->nama_ayah,
                'no_hp_wali' => $ortu->no_hp_ayah,
                'kedudukan_dalam_keluarga' => "Ayah",
                'alamat_wali' => 'Sama Dengan Anak'
            ]);
        }elseif ($request->wali === 'Ibu') {
            WaliSaba::create([
                'saba_id' => $ortu->saba_id,
                'nama_wali' => $ortu->nama_ibu,
                'no_hp_wali' => $ortu->no_hp_ibu,
                'kedudukan_dalam_keluarga' => "Ibu",
                'alamat_wali' => 'Sama Dengan Anak'
            ]);
        }elseif ($request->wali === 'Wali') {
            WaliSaba::create([
                'saba_id' => $santri->id,
                'nama_wali' => $request->nama_wali,
                'kedudukan_dalam_keluarga' => $request->kedudukan_dalam_keluarga,
                'alamat_wali' => $request->alamat_wali,
                'no_hp_wali' => $request->no_hp_wali,
            ]);
        }

        return response()->json([
            'status' => 200,
            'message' => 'Berhasil Input Data',
            'data' => $santri
        ]);
    }
    // update saba
    public static function updateSantri($request, $id){
        $request->validate([
            'nik' => 'required',
            'nokk' => 'required',
        ],[
            'nik.required' => 'Nik Wajib Di Isi',
            'nokk.required' => 'No KK Wajib Di Isi',
        ]);
        $id = routeParam::decode($id);
        $saba = Saba::where('id', $id)->first();

        try {
            $saba->update([
                'nik' => $request->nik,
                'nokk' => $request->nokk,
                'nama_lengkap' => $request->nama_lengkap,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'provinsi' => $request->provinsi,
                'kabupaten' => $request->kabupaten,
                'kecamatan' => $request->kecamatan,
                'desa' => $request->desa,
                'dusun' => $request->dusun,
                'rt_rw' => $request->rt_rw,
                'alamat' => $request->alamat,
            ]);
        return response()->json([
            'status' => 201,
            'message' => 'Data Berhasil di Ubah',
        ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
