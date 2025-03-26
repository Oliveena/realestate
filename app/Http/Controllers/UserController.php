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
    public function index() {
        $users = User::with('messages', 'properties')->get();
        return view('users.index', compact('users'));
    }
    public function create() {
        return view('users.create');
    }
    public function store(Request $request) {
        User::create($request->all());
        return redirect()->route('users.index');
    }
    public function edit(User $user) {
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, User $user) {
        $user->update($request->all());
        return redirect()->route('users.index');
    }
    public function destroy(User $user) {
        $user->delete();
        return redirect()->route('users.index');
    }
}
