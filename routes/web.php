<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Property routes
// Need to define search route above anything else
Route::get('/property/search', [PropertyController::class, 'search'])->name('property.search');

Route::resource('/property', PropertyController::class);

// Register route
Route::get('/register', [RegisterController::class,'create'])->name('register');

// Login route
Route::get('/login', [LoginController::class,'create'])->name('login');