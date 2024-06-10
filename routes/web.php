<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//HOME
Route::get('/home', [HomeController::class, 'index']);
Route::post('/home', [HomeController::class, 'index']);

//COMMUNITY
Route::get('/community', function () {
    return view('community');
})->name('community');

//DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//LOGIN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.auth');

//LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//REGISTRASI
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [AuthController::class, 'store'])->name('register.store');

//HOME
Route::get('/', function () {
    return view('welcome');
});

//ADMIN
Route::get('/admin', [UserController::class, 'index'])->name('admin');

// User CRUD routes
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
