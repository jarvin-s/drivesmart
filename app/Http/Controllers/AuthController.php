<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        // Check if a user is logged in
        if (auth()->check()) {
            return match (Auth::user()->rol->id) {
                1 => redirect()->route('instructors.index'),
                2 => redirect()->route('instructors.index'),
                3 => redirect()->route('home'),
                // Redirect back to page if logged in already
                default => redirect()->back(),
            };
        }
        // Return to login view if not logged in
        return view('login');
    }

    public function checkLogin(Request $request)
    {
        // Check if email and password from input match values in database
        if (Auth::attempt(['email' => $request->email, 'password' => $request->wachtwoord])) {
            // Based on rol_id return a route
            return match (Auth::user()->rol->id) {
                1 => redirect()->route('instructors.index'),
                2 => redirect()->route('instructors.index'),
                3 => redirect()->route('home'),
                default => redirect()->back()->withErrors(['error' => 'Geen rol gevonden.']),
            };
        } else {
            return redirect()->back()->withErrors(['error' => 'E-mailadres of wachtwoord is onjuist.']);
        }
    }

    public function logOut()
    {
        Auth::logout();
        return redirect('/');
    }
}
