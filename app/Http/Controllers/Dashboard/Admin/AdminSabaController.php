<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;
use App\Models\Saba;

class AdminSabaController extends Controller
{

    // index
    public function index()
    {
        $title = 'Data Santri';
        $saba = Saba::all();
        return view('dashboard.admin.data-saba-all.index', compact('title','saba'));
    }
    // detail Saba
    public function showSaba($id)
    {
        $title = "Detail Data Santri";
        $provinsi = Province::all();
        $dataSaba = Saba::where('id', $id)->first();
        // dd($dataSaba);
        return view('dashboard.admin.data-saba-all.edit', compact('title','provinsi','dataSaba'));
    }
    // update saba
    public function updateSaba(Request $request, $id){
        $request->validate([
            //
        ]);
        $saba = Saba::where('id', $id)->first();
        dd($saba);
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
