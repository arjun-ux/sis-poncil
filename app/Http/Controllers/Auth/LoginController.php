<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // index login multi auth
    public function login()
    {
        return view('auth.login');
    }
    // doLogin
    public function doLogin(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd($credential);
        if (auth()->attempt($credential)) {
            if (auth()->user()->role === 'admin') {
                session()->regenerate();
                return redirect()->route('dashmin');
            }
            session()->regenerate();
            return redirect()->route('dashba');
        }
        return back()->with('error', 'Email atau password Salah!!!');
    }
}
