<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\AnimalsController::class, 'index']);

Route::get('/search', [App\Http\Controllers\AnimalsController::class, 'search'])->name('animal.search');

Route::get('/update/{id?}', [App\Http\Controllers\AnimalsController::class, 'update'])->name('animal.update');

Route::post('/update/{id?}', [App\Http\Controllers\AnimalsController::class, 'savingData'])->name('animal.save');
