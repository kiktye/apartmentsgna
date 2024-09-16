<?php

use App\Http\Controllers\BuildingController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BuildingController::class, 'index']);
Route::get('/buildings/create', [BuildingController::class, 'create'])->middleware('auth');
Route::post('/buildings', [BuildingController::class, 'store']);
Route::get('/buildings/filter', [BuildingController::class, 'filter'])->name('buildings.filter');
Route::get('/buildings/{building}', [BuildingController::class, 'show']);


Route::view('/contact', 'contact')->name('contact');
