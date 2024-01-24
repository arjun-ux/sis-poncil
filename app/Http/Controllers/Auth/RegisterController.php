<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\User;
use App\Models\Saba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
            'nama_lengkap' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $sabaUser = User::create([
            'username'=> Saba::generateNis(),
            'email'=>$request->email,
            'password'=>$request->password,
            'role' => 'saba'
        ]);
        $saba = Saba::create([
            'nis' => Saba::generateNis(),
            'user_id' => $sabaUser->id,
            'nama_lengkap' => $request->nama_lengkap,
        ]);
        Mail::to($request->email)->send(new WelcomeMail($sabaUser, $saba));
        return redirect()->route("login");
    }
}
