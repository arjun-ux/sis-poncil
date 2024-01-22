<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Saba;

class AdminController extends Controller
{
    // index
    public function index()
    {
        $saba = Saba::all();
        return view('dashboard.admin.index', compact('saba'));
    }
}
