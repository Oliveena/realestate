<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogArticleController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;


//testing a new user
Route::get('/testuser', function () {
    $user = User::where('email', 'test@gmail.com')->first();
    if ($user) {
        return Response::json($user);
    } else {
        return Response::json(['message' => 'User not found.']);
    }
});


Route::get('/', function () {
    return View::make('home.index');
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
Route::post('/register', [RegisterController::class,'store'])->name('register.store');

Route::get('/login', [LoginController::class,'create'])->name('login');
Route::post('/login', [LoginController::class,'store'])->name('login.store');
Route::post('/logout', [LoginController::class,'destroy'])->name('logout');

// property routes for agents
Route::get('/agent/properties', [PropertyController::class, 'index'])->name('properties.index'); 

Route::get('/agent/properties/add', [PropertyController::class, 'create'])->name('properties.create');

Route::post('/agent/properties/add', [PropertyController::class, 'store'])->name('properties.store'); 

Route::get('/agent/properties/{id}', [PropertyController::class, 'show'])->name('property.show'); 

Route::post('/agent/properties/{id}', [PropertyController::class, 'update'])->name('properties.update');

Route::delete('/agent/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy'); 

Route::get('/agent/properties/{id}/images', [PropertyController::class, 'images'])->name('properties.images');

// realtor profile routes
Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');  // This should be a PUT request for updating
});

// property routes for registered buyers



// property routes for all users

Route::get('property/search', [PropertyController::class, 'search'])->name('property.search');

// blog article routes

Route::get('/blogs', [BlogArticleController::class, 'index'])->name('articles.index');  // Show all articles
Route::get('/blogs/create', [BlogArticleController::class, 'create'])->name('articles.create');  // Create new article
Route::post('/blogs', [BlogArticleController::class, 'store'])->name('articles.store');  // Store new article
Route::get('/blogs/{article}/edit', [BlogArticleController::class, 'edit'])->name('articles.edit');  // Edit article
Route::put('/blogs/{article}', [BlogArticleController::class, 'update'])->name('articles.update');  // Update article
Route::delete('/blogs/{article}', [BlogArticleController::class, 'destroy'])->name('articles.destroy');  // Delete article

// comment routes 





