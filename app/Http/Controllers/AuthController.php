<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return match (Auth::user()->rol->id) {
                default => redirect()->back()->withErrors(['login_error' => 'E-mailadres of wachtwoord is onjuist.']),
            };
        }
        return view('login');
    }

    public function checkLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->wachtwoord])) {
            return match (Auth::user()->rol->id) {
                1 => redirect()->route('instructors.index'),
                2 => redirect()->route('instructors.index'),
                3 => redirect()->route('home'),
                default => redirect()->back()->withErrors(['error' => 'E-mailadres of wachtwoord is onjuist.']),
            };
        } else {
            return redirect()->back()->withErrors(['error' => 'E-mailadres of wachtwoord is onjuist.']);
        }
    }

    public function logOut()
    {
        Auth::logout();
        return redirect('/login');
    }
}
