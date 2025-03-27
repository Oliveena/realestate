<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogArticleController;
use App\Http\Controllers\CommentController;

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

// main page
Route::get('/', function () {
    return view('home.index');
});

// test DB Connection Route
Route::get('/test', [DatabaseController::class, 'testConnection']);

// registation and login
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::get('/login', [LoginController::class, 'create'])->name('login');

// Property routes for all users (Non-registered & Registered Users)
Route::get('/agent/properties', [PropertyController::class, 'index'])->name('properties.index');
Route::get('/agent/properties/{id}', [PropertyController::class, 'show'])->name('property.show');
Route::get('property/search', [PropertyController::class, 'search'])->name('property.search');

// Blog Article routes for all users (Non-registered & Registered Users)
Route::get('/blogs', [BlogArticleController::class, 'index'])->name('articles.index');
Route::get('/blogs/{id}', [BlogArticleController::class, 'show'])->name('articles.show');

// Routes for Registered Users and Realtors (Authenticated users)
Route::middleware('auth')->group(function () {

    // Routes for Registered Users
    // Registered users can only CRUD comments
    Route::middleware('can:create,App\Models\Comment')->group(function () {
        Route::get('/blogs/{article}/comments/create', [CommentController::class, 'create'])->name('comments.create');
        Route::post('/blogs/{article}/comments', [CommentController::class, 'store'])->name('comments.store');
        Route::get('/blogs/{article}/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
        Route::put('/blogs/{article}/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
        Route::delete('/blogs/{article}/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
    });

    // Routes for Realtors
    // Realtors can CRUD properties and blog articles
    Route::middleware('can:manage-properties')->group(function () {
        Route::get('/agent/properties/add', [PropertyController::class, 'create'])->name('properties.create');
        Route::post('/agent/properties/add', [PropertyController::class, 'store'])->name('properties.store');
        Route::get('/agent/properties/{id}/edit', [PropertyController::class, 'edit'])->name('properties.edit');
        Route::post('/agent/properties/{id}', [PropertyController::class, 'update'])->name('properties.update');
        Route::delete('/agent/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy');
        Route::get('/agent/properties/{id}/images', [PropertyController::class, 'images'])->name('properties.images');
    });

    // Realtors can CRUD Blog Articles
    Route::middleware('can:manage-articles')->group(function () {
        Route::get('/blogs/create', [BlogArticleController::class, 'create'])->name('articles.create');
        Route::post('/blogs', [BlogArticleController::class, 'store'])->name('articles.store');
        Route::get('/blogs/{article}/edit', [BlogArticleController::class, 'edit'])->name('articles.edit');
        Route::put('/blogs/{article}', [BlogArticleController::class, 'update'])->name('articles.update');
        Route::delete('/blogs/{article}', [BlogArticleController::class, 'destroy'])->name('articles.destroy');
    });
});
