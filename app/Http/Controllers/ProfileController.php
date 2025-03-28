<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        // Ensure only authenticated users can access this controller
        $this->middleware('auth'); // This ensures the user is logged in
    }

    public function showProfile()
    {
        $user = Auth::user(); // Get the currently authenticated user
        return view('profile.show', compact('user'));
    }

    public function editProfile()
    {
        $user = Auth::user(); // Get the currently authenticated user
        return view('profile.edit', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user(); // Get the currently authenticated user

        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phoneNumber' => 'required|string|max:255',
            'city' => 'nullable|string|max:255',
            'avatar' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $validatedData['avatar'] = $path;
        }

        // Update the user's profile
        $user->update($validatedData);

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
    }
}


    

