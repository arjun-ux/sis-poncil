<?php

namespace App\Providers\Service;

use App\Models\Saba;
use App\Providers\RouteParamService as routeParam;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
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
        $validator = Validator::make($request->all(), [
            'nik' => 'required',
        ],[
            'nik.required' => 'Nik Wajib Di Isi'
        ]);
        $data = Saba::create([
            'nik' => $request->nik,
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'Berhasil Input Data',
            'data' => $data
        ]);
    }
    // update saba
    public static function updateSantri($request, $id){
        $validator = Validator::make($request->all(), [
            'nik' => 'required',
        ],[
            'nik.required' => 'Nik Tidak Boleh Kosong',
        ]);
        $id = routeParam::decode($id);
        $saba = Saba::where('id', $id)->first();

        if ($validator->fails()) {
            // return Redirect::back()->withErrors($validator->errors())->withInput();
            return response()->json([
                'message' => 'Gagal Validasi',
            ]);
        }else {
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
}
