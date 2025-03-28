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
        // Apply middleware to ensure user is authenticated
        $this->middleware('auth');
    }

    public function showProfile()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Return the profile view with the user data
        return view('profile.show', compact('user'));
    }

    public function editProfile()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Return the profile edit view with the user data
        return view('profile.edit', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        // Get the currently authenticated user
        $user = Auth::user();
    
        // Validate and update the user's profile information
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phoneNumber' => 'required|string|max:255',
            'city' => 'nullable|string|max:255',
            'avatar' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
    
        // Handle avatar upload if a new file is provided
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $validatedData['avatar'] = $path;
        }
    
        // Update user data
        $user->update($validatedData);
    
        // Redirect back with success message
        return redirect()->route('profile.view')->with('success', 'Profile updated successfully');
    }
}
