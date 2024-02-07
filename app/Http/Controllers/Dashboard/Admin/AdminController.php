<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Saba;

class AdminController extends Controller
{
    // index
    public function index()
    {
        $title = 'Dashboard';
        return view('dashboard.admin.index', compact('title'));
    }
}

