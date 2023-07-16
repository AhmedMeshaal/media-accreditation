<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{

    public function index()
    {
//        echo Auth::id();
        return view('Auth.login');
    }

    public function login(Request $request)
    {

        $remember = true;

        $credentials = $request->validate([
           'email' => ['required', 'email'],
           'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The inserted credential are not correct'
        ]);

        print_r($request); exit();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
