<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

//testing a new user
use App\Models\User;

use Illuminate\Support\Facades\Route;


//testing a new user
Route::get('/testuser', function () {
    $user = User::where('email', 'test@gmail.com')->first();
    if ($user) {
        return response()->json($user);
    } else {
        return response()->json(['message' => 'User not found.']);
    }
});


Route::get('/', function () {
    return view('home.index');
});


Route::get('/test', [DatabaseController::class, 'testConnection']);

Route::get('/testtest', function () {
    try {
        DB::connect('mysql://cp5114_team3:vOMw$D1PW]]N@127.0.0.1/cp5114_team3');

        $result = DB::query('SELECT 1');

        if ($result) {
            return "MeekroDB Connection successful!";
        } else {
            return "MeekroDB Query failed!";
        }
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});


// user Routes
Route::get('/register', [RegisterController::class,'create'])->name('register');

Route::get('/login', [LoginController::class,'create'])->name('login');

// property routes for agents
Route::get('/agent/properties', [PropertyController::class, 'index'])->name('properties.index'); 

Route::get('/agent/properties/add', [PropertyController::class, 'create'])->name('properties.create');

Route::post('/agent/properties/add', [PropertyController::class, 'store'])->name('properties.store'); 

Route::get('/agent/properties/{id}', [PropertyController::class, 'show'])->name('property.show'); 

Route::post('/agent/properties/{id}', [PropertyController::class, 'update'])->name('properties.update');

Route::delete('/agent/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy'); 

Route::get('/agent/properties/{id}/images', [PropertyController::class, 'images'])->name('properties.images');


// property routes for registered buyers



// property routes for all users

Route::get('property/search', [PropertyController::class, 'search'])->name('property.search');