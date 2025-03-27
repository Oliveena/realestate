<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use App\Models\User;

    class ProfileController extends Controller
    {
        public function show()
        {
            // Get the currently authenticated user
            $user = Auth::user();

            // Return the profile view with the user data
            return view('profile.show', compact('user'));
        }

        public function edit()
        {
            // Get the currently authenticated user
            $user = Auth::user();

            // Return the profile edit view with the user data
            return view('profile.edit', compact('user'));
        }

        public function update(Request $request)
        {
            // Get the currently authenticated user
            $user = Auth::user();

            // Validate and update the user's profile information
            $request->validate([
                'firstName' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email,' . $user->id,
                'phoneNumber' => 'required|string|max:255',
                'city' => 'nullable|string|max:255',
                'avatar' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',  // Validation for image upload
            ]);

            // Update user profile
            if ($request->hasFile('avatar')) {
                // Handle avatar upload
                $path = $request->file('avatar')->store('avatars', 'public');
                $user->avatar = $path;
            }

            // Update user data
            $user->update($request->only(['firstName', 'lastName', 'email', 'phoneNumber', 'city', 'avatar']));

            return redirect()->route('profile.show')->with('success', 'Profile updated successfully');
        }
    }
