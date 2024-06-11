<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//HOME
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

//COMMUNITY
Route::get('/community', function () {
  return view('community');
})->name('community')->middleware('auth');

//DASHBOARD
Route::get('/dashboard', function () {
  return view('dashboard');
})->name('dashboard');

//LOGIN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login.auth')->middleware('guest');

//LOGOUT
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

//REGISTRASI
Route::get('/register', function () {
  return view('register');
})->name('register')->middleware('guest');

Route::post('/register', [AuthController::class, 'store'])->name('register.store')->middleware('guest');

//HOME
Route::get('/', function () {
  return view('dashboard');
});

//ADMIN
Route::get('/admin', [UserController::class, 'index'])->name('admin')->middleware('auth');

// User CRUD routes
Route::post('/users', [UserController::class, 'store'])->name('users.store')->middleware('auth');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update')->middleware('auth');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('auth');
