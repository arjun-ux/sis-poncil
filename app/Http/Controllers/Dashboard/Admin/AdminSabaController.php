<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteParamService as routeParam;
use App\Providers\Service\IndoRegionService;
use App\Providers\Service\SantriService;
use Yajra\DataTables\Facades\DataTables;


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
    // datatable santri all
    public function getAllSantri(){
        $data = $this->santri->getAll();
        return DataTables::of($data)
            ->addColumn('action', function($row){
                $btn = '<a href="/show-saba/'.routeParam::encode($row->id).'" class="btn_edit btn btn-primary btn-sm"><i class="lni lni-pencil-alt "></i></a>';
                $btn .= ' <a href="'.routeParam::encode($row->id).' " class="btn_pembayaran btn btn-warning btn-sm"><i class="lni lni-empty-file"></i></a>';
                $btn .= ' <a href="#" data-id=" '.$row->id.' " class="btn_delete btn btn-danger btn-sm"><i class="lni lni-trash-can "></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->toJson();
    }
    // create santri
    public function create(){
        $provinsi = $this->indo->Provinsi();
        return view('dashboard.admin.data-saba-all.create', compact('provinsi'));
    }
    // store santri
    public function store(Request $request){
        $data = $this->santri->StoreSantri($request);
        return $data;
    }
    // detail Saba
    public function showSaba($id)
    {
        $id = routeParam::decode($id);
        $data = $this->santri->getById($id);
        $provinsi = $this->indo->Provinsi();
        return view('dashboard.admin.data-saba-all.edit', compact('provinsi', 'data'));
    }
    // update saba
    public function updateSaba(Request $request, $id){
        $data = $this->santri->updateSantri($request,$id);
        return $data;
    }
}
