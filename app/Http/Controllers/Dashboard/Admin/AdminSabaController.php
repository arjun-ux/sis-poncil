<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;
use App\Models\Saba;
use App\Providers\RouteParamService as routeParam;
use App\Providers\Service\IndoRegionService;
use App\Providers\Service\SantriService;


class AdminSabaController extends Controller
{
    protected $santri;
    protected $indo;
    public function __construct(SantriService $santri, IndoRegionService $indo)
    {
        $this->santri = $santri;
        $this->indo = $indo;
    }
    // index
    public function index()
    {
        return view('dashboard.admin.data-saba-all.index');
    }
    public function getAllSantri(){
        $data = $this->santri->getAll();
        return $data;
    }
    // detail Saba
    public function showSaba($id)
    {
        $id = routeParam::decode($id);
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
}
