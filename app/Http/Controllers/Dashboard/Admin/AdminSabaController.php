<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
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
}
