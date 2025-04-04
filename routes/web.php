<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

// Testing a new user
Route::get('/testuser', function () {
    $user = User::where('email', 'test@gmail.com')->first();
    if ($user) {
        return Response::json($user);
    } else {
        return Response::json(['message' => 'User not found.']);
    }
});

// Main page (Home route)
Route::get('/', function () {
    return View::make('home.index');
});;

// Test DB Connection Route
Route::get('/test', [DatabaseController::class, 'testConnection']);

// Registration and login routes
Route::get('/register', [RegisterController::class,'create'])->name('register');
Route::post('/register', [RegisterController::class,'store'])->name('register.store');
Route::get('/login', [LoginController::class,'create'])->name('login');
Route::post('/login', [LoginController::class,'store'])->name('login.store');
Route::post('/logout', [LoginController::class,'destroy'])->name('logout');

// Password Reset Routes
Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');

// Property routes (Non-registered & Registered Users)
Route::get('/property', [PropertyController::class, 'index'])->name('property.index');
Route::get('/property/search', [PropertyController::class, 'search'])->name('property.search');
Route::get('/property/{id}', [PropertyController::class, 'show'])->name('property.show');

// Realtor profile routes
Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('profile', [ProfileController::class, 'showProfile'])->name('profile.show');
    Route::get('profile/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
    Route::put('profile', [ProfileController::class, 'updateProfile'])->name('profile.update');

    // Message routes
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
    Route::put('/messages/{message}', [MessageController::class, 'update'])->name('messages.update');
    Route::delete('/messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
});


// Blog Article routes (Non-registered & Registered Users)
Route::get('/blogs', [BlogArticleController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{blogId}', [BlogArticleController::class, 'show'])->name('blogs.show');


// Routes for Registered Users and Realtors (Authenticated users)
Route::middleware('auth')->group(function () {

    // Routes for Registered Users
    // Registered users can only CRUD comments
    Route::middleware('can:create,App\Models\Comment')->group(function () {
        Route::get('/blogs/{blogId}/comments/create', [CommentController::class, 'create'])->name('comments.create');
        Route::post('/blogs/{blogId}/comments', [CommentController::class, 'store'])->name('comments.store');
        Route::get('/blogs/{blogId}/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
        Route::put('/blogs/{blogId}/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
        Route::delete('/blogs/{blogId}/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
    });

    // Routes for Realtors
    // Realtors can CRUD properties and blog articles
    Route::middleware('can:manage-properties')->group(function () {
        Route::get('/property/add', [PropertyController::class, 'create'])->name('property.create');
        Route::post('/property/add', [PropertyController::class, 'store'])->name('property.store');
        Route::get('/property/{id}/edit', [PropertyController::class, 'edit'])->name('property.edit');
        Route::post('/property/{id}', [PropertyController::class, 'update'])->name('property.update');
        Route::delete('/property/{id}', [PropertyController::class, 'destroy'])->name('property.destroy');
        Route::get('/property/{id}/images', [PropertyController::class, 'images'])->name('property.images');
    });

    // Realtors can CRUD Blog Articles
  //  Route::middleware('can:manage-articles')->group(function () {
    
        Route::get('/blogs/myblogs', [BlogArticleController::class, 'myblogs'])->name('blogs.myblogs');
        Route::get('/blogs/create', [BlogArticleController::class, 'create'])->name('blogs.create');
        Route::post('/blogs', [BlogArticleController::class, 'store'])->name('blogs.store');
        Route::get('/blogs/{blogId}/edit', [BlogArticleController::class, 'edit'])->name('blogs.edit');
        Route::put('/blogs/{blogId}', [BlogArticleController::class, 'update'])->name('blogs.update');
        Route::delete('/blogs/{blogId}', [BlogArticleController::class, 'destroy'])->name('blogs.destroy');
    //});
});
