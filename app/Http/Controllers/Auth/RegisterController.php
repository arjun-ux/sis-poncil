<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Saba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $sabaUser = User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>$request->password,
            'role' => 'saba'
        ]);
        $saba = Auth::user();

        Saba::create([
            'user_id' => $sabaUser->id,
        ]);
        return redirect()->route("login");
    }
}
