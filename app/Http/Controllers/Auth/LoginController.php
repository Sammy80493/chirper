<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|alpha_num'
        ]);

        if (Auth::attempt($validate, $request->boolean('remember'))) {
            $request->session()->regenerateToken();
            return redirect()->intended('/')->with('success', 'Login Successful');
        }
        return back()->with('error', "The provided credential doesn't match our record");

    }

    public function sign_out(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Log out Successful');
    }
}
