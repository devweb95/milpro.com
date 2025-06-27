<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DevisController;
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/a-propos', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/actualites', [HomeController::class, 'actualites'])->name('actualites');
Route::get('/devis', [DevisController::class, 'devis'])->name('devis');