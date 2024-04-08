<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return match (Auth::user()->role->id) {
                default => redirect()->back()->withErrors(['login_error' => 'E-mail of wachtwoord is onjuist.']),
            };
        }
        return view('login');
    }

    public function checkLogin(Request $request)
    {
        $email = $request->input('email');
        $wachtwoord = $request->input('wachtwoord');

        if (Auth::attempt(['email' => $email, 'wachtwoord' => $wachtwoord])) {
            // return match (Auth::user()->role->id) {
            return redirect()->route('instructors.index');
            // };

        } else {
            dd($email, $wachtwoord);
            return redirect()->back()->withErrors(['error' => 'E-mailadres of wachtwoord is onjuist.']);
        }
    }

    public function logOut()
    {
        Auth::logout();
    }
}
