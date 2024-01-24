<?php

namespace App\Http\Controllers\Dashboard\Saba;

use App\Http\Controllers\Controller;
use App\Models\Saba;
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
        return view('dashboard.saba.data_diri');
    }
}
