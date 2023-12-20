<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                session(['berhasil_login' => true]);
                return redirect()->route('home');
            }
        }

        return redirect()->route('login')->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        session()->forget('berhasil_login');
        return redirect()->route('login');
    }
}
