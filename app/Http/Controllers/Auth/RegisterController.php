<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // index register
    public function register()
    {
        return view('auth.register');
    }
    // function doRegister santri baru
    public function doRegister(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password,
            'role' => 'saba'
        ]);
        return redirect()->route("login");
    }
}
