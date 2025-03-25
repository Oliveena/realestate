<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController as ApiPropertyController;


Route::delete('/properties/{id}', [ApiPropertyController::class, 'destroy'])->name('api.properties.destroy'); 
Route::get('/properties/{id}/images', [ApiPropertyController::class, 'images'])->name('api.properties.images');