<?php

use App\Http\Controllers\AcaraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/', [CollectionController::class, 'index']);
Route::get('/{collection}', [CollectionController::class, 'show'])->name('collections.show');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/about', [AboutController::class, 'index'])->name('about');