<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // user santri
    public function santri(){
        return view('dashboard.admin.user.santri');
    }
    // user admin
    public function admin(){
        return view('dashboard.admin.user.admin');
    }
}
