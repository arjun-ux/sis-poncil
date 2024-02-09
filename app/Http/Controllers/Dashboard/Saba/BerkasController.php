<?php

namespace App\Http\Controllers\Dashboard\Saba;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    // index
    public function index()
    {
        return view('dashboard.saba.berkas');
    }
}
