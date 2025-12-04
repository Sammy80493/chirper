<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|',
            'email' => 'required|email|unique:users',
            'password' => 'required|alpha_num|confirmed:password_confirmation',
            'password_confirmation' => 'required|alpha_num'
        ]);

        $users = User::with('chirp')->create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password']),
        ]);

        Auth::login($users);

        return redirect('/')->with('success', 'Registered Successful');
    }
}
