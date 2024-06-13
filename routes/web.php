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
Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

//LOGOUT
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

//REGISTRASI
Route::get('/register', function () {
  return view('register');
})->name('register')->middleware('guest');

Route::post('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');

//HOME
Route::get('/', function () {
  return view('dashboard');
});

//ADMIN
Route::get('/admin', [UserController::class, 'index'])->name('admin')->middleware('auth');
// Route to display the edit form for a specific user
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit')->middleware('auth');

Route::post('/update', [UserController::class, 'update'])->name('edit')->middleware('auth');


// User CRUD routes

Route::post('/add', [UserController::class, 'add'])->name('add')->middleware('auth');
Route::put('/users/{id}', [UserController::class, 'update'])->name('update')->middleware('auth');
Route::delete('/destroy', [UserController::class, 'destroy'])->name('destroy')->middleware('auth');

// Route::post('/users', [UserController::class, 'register'])->name('users.register')->middleware('auth');
// Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update')->middleware('auth');
// Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('auth');
