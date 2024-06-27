<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle the login request
    public function login(Request $request)
    {
        // Validate the request data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // If successful, redirect to the intended page
            return redirect()->intended('/dashboard/admin');
        }

        // If authentication fails, redirect back to the login form with an error message
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    // Log the user out
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
