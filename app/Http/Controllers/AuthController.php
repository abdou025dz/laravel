<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginForm()
    {
        // If the user is already logged in, send them home
        if (Session::has('user')) {
            return redirect('/home');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        $email = 'test@demo.com';
        $password = '1234';

        // FIXED: Corrected the parenthesis structure here
        if ($request->email == $email) {
            if ($request->password == $password) {
                Session::put('user', $email);
                return redirect('/home');
            } else {
                return back()->withErrors(['password' => 'Mot de passe incorrect'])->withInput();
            }
        }

        return back()->withErrors(['email' => 'Email inconnu'])->withInput();
    }

    public function home()
    {
        if (!Session::has('user')) {
            return redirect()->route('login');
        }
        return view('home');
    }

    public function logout()
    {
        Session::forget('user');
        return redirect()->route('login');
    }
}
