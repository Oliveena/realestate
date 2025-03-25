<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

// user Routes
Route::get('/register', [RegisterController::class,'create']);

Route::get('/login', [LoginController::class,'create']);

// property Routes
Route::get('/agent/properties', [PropertyController::class, 'index'])->name('properties.index'); 

Route::get('/agent/properties/add', [PropertyController::class, 'create'])->name('properties.create');

Route::post('/agent/properties/add', [PropertyController::class, 'store'])->name('properties.store'); 

Route::get('/agent/properties/{id}', [PropertyController::class, 'show'])->name('properties.show'); 

Route::post('/agent/properties/{id}', [PropertyController::class, 'update'])->name('properties.update');

Route::delete('/agent/properties/{id}', [PropertyController::class, 'destroy'])->name('properties.destroy'); 

Route::get('/agent/properties/{id}/images', [PropertyController::class, 'images'])->name('properties.images');
