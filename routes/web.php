<?php

use App\Http\Controllers\BuildingController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BuildingController::class, 'index']);
Route::get('/buildings/create', [BuildingController::class, 'create'])->middleware('auth');
Route::post('/buildings', [BuildingController::class, 'store']);
Route::get('/buildings/filter', [BuildingController::class, 'filter'])->name('buildings.filter'); // Move this up
Route::get('/buildings/{building}', [BuildingController::class, 'show']); // Move this down


Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
