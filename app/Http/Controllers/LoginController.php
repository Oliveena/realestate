<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function create() {
        return View::make("auth.login");
    }

    public function store(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Log::info('User logged in successfully', ['email' => $credentials['email']]);
            return Redirect::intended('/');
        }

        return back()->withErrors([
            'email' => 'Your information is incorrect. Please try again.',
        ])->onlyInput('email');
    }

    public function destroy(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Log::info('User logged out successfully');
        return Redirect::to('/');
    }
}

// CRUD stuff goes here
// it would call the model 
// 


