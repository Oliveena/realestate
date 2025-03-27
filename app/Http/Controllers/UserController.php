<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Property;
use App\Models\Message;
use App\Models\Comment;
use App\Models\BlogArticle;
use App\Models\Image;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('messages', 'properties')->get();
        return view('users.index', compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }

    // app/Http/Controllers/UserController.php

    public function store(Request $request)
    {
        // Validate the input to ensure required fields are present
        $validated = $request->validate([
            'firstName' => 'required|string|max:100',
            'lastName' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'phoneNumber' => 'nullable|numeric',
            'city' => 'required|in:Montreal,Laval,Longueuil,Brossard',
            'role' => 'required|in:Realtor,Buyer',
        ]);

        // Hash the password before saving
        $validated['password'] = bcrypt($validated['password']);

        // Create the new user with the validated data
        User::create($validated);

        // Redirect the user after registration
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $user = User::with('avatar')->findOrFail($id);
        return view('user.profile', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.index');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
