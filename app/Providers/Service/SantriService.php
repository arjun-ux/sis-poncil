<?php

namespace App\Providers\Service;

use App\Providers\RouteParamService as routeParam;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Yajra\DataTables\Facades\DataTables;

class SantriService extends ServiceProvider
{


    // getAllData
    public static function getAll(){
        $data = DB::table('sabas')->get();
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
    // get santri by id
    public static function getById($id){
        //
    }
}
