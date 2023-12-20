<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

            // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->filled('remember'))) {
            // If successful, then redirect to their intended location
            if ($request->filled('remember')) {
                // If user wants to be remembered, create a cookie
                Cookie::queue('remember_user', encrypt(Auth::id()), 43200); // 30 days
            }
            return redirect()->intended('/dashboard');
        }

        // If unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::logout();

        // Forget the cookie
        Cookie::queue(Cookie::forget('remember_user'));

        return redirect('/login');
    }
}
