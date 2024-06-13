<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller {
  public function showLoginForm() {
    return view('login');
  }

  public function showRegisterForm() {
    return view('register');
  }

  public function login(Request $request) {
    $credentials = $request->validate([
      'email' => 'required|email',
      'password' => 'required',
    ]);

    $user = User::where('email', $credentials['email'])->first();
    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      if ($user->role == 'admin') {
        $request->session()->put('role', 'admin');
        return redirect()->intended('admin');
      } elseif ($user->role == 'user') {
        return redirect()->intended('home');
      }
    }
    // Authentication failed, redirect back with error message
    return back()->with('loginError', "Email atau Password salah");
  }

  public function register(Request $request) {
    // Validation rules
    $validator = Validator::make($request->all(), [
      'email' => 'required|email:dns|unique:users',
      'username' => 'required|string|max:255',
      'password' => 'required|string|min:6',
      'role' => 'required|in:user,admin', // Ensure role is either User or Admin
    ], [
      // Custom error messages
      'email.required' => 'Email is required.',
      'email.email' => 'Please enter a valid email address.',
      'email.unique' => 'Email is already taken.',
      'username.required' => 'Username is required.',
      'username.string' => 'Please enter a valid username.',
      'username.max' => 'Username must not exceed 255 characters.',
      'username.unique' => 'Username is already taken.',
      'password.required' => 'Password is required.',
      'password.string' => 'Please enter a valid password.',
      'password.min' => 'Password must be at least 6 characters.',
      'role.required' => 'Role selection is required.',
      'role.in' => 'Please select a valid role (user or admin).',
    ]);

    // If validation fails, return error response
    if ($validator->fails()) {
      return redirect()->back()->withErrors($validator)->withInput();
    }

    $user = User::create([
      'email' => $request->email,
      'username' => $request->username,
      'password' => bcrypt($request->password),
      'role' => $request->role,
    ]);

    // Redirect to login page with success message
    return redirect()->route('login')->with('success', 'Account created successfully. Please login.');
  }


  public function logout(Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login');
  }
}
