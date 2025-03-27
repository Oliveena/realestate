<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function create(){
        return view("auth.register");
    }

    public function store(Request $request) {
        try {
            $validated = $request->validate([
                'firstName' => 'required|string|max:100',
                'lastName' => 'required|string|max:100',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8|confirmed',
                'phoneNumber' => 'nullable|integer',
                'city' => 'required|in:Montreal,Laval,Longueuil,Brossard,Boucherville',
                'role' => 'required|in:Realtor,Buyer'
            ]);

            // Hash the password before creating the user
            $validated['password'] = Hash::make($validated['password']);

            // Create the user
            $user = User::create($validated);

            // Log the user in
            Auth::login($user);

            return Redirect::to('/')->with('success', 'Registration successful! Welcome to our platform.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return back()->with('error', 'Registration failed. Please try again.')->withInput();
        }
    }
}
