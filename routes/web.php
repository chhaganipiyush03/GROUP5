<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');


Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

use App\Http\Controllers\LoginController;

Route::post('/login', [LoginController::class, 'login'])->name('login.submit');