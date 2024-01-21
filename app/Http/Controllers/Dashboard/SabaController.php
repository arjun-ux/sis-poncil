<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SabaController extends Controller
{
    // public function __construct()
    // {
    //     $this->authorize('saba');
    // }
    // index
    public function index()
    {
        return view('dashboard.saba.index');
    }
}
