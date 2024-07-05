<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrangTua;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Saba;
use Illuminate\Http\Request;
use App\Providers\RouteParamService as routeParam;
use App\Providers\Service\IndoRegionService;
use App\Providers\Service\SantriService;
use App\Providers\Service\UserService;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
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
                $btn .= ' <a href="#" class="btn_delete btn btn-danger btn-sm"><i class="lni lni-trash-can "></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->toJson();
    }
    // create santri
    public function create(){
        $provinsi = $this->indo->Provinsi();
        $pekerjaan = Pekerjaan::all();
        $pendidikan = Pendidikan::all();
        return view('dashboard.admin.data-saba-all.create', compact('provinsi','pekerjaan','pendidikan'));
    }
    // cek saudara kandung
    public function cekSaudaraKandung($nokk){
        $data = Saba::where('nokk', $nokk)->first(['nokk','id']);
        // return response()->json(['data'=>$data]);
        if ($data == null) {
            return response()->json(['status' => 404]);
        }else {
            return response()->json([
                'message' => 'Terdapat Data Saudara Kandung',
                'data' => $data,
            ]);
        }
    }
    // update saudara kandung
    public function updateSaudaraKandung(Request $request){
        $items = $request->data;
        foreach ($items as $val) {
            $id = $val['id'];
            Saba::where('id', $id)->update(['saudara_kandung' => 'YA']);
        }
        return response()->json(['message' => 'Berhasil Update Data Saudara', 'item'=>$items]);
    }
    // store santri
    public function store(Request $request){
        $data = $this->santri->StoreSantri($request);
        return $data;
    }
    // create berkas
    public function createBerkas(){
        return view('dashboard.admin.data-saba-all.berkas');
    }
    // store berkas
    public function store_berkas(Request $request){
        $data = $this->santri->storeBerkas($request);
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
