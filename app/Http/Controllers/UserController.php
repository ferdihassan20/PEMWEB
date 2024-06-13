<?php
// app/Http/Controllers/UserController.php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin', compact('users'));
    }
    public function create()
    {
        return view('create');
    }

    // Store a newly created user in storage.

    public function add(Request $request) {
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
    // Show the form for editing the specified user.
    public function edit($id)
{
    $user = User::find($id);

    if (!$user) {
        return redirect()->route('admin')->with('error', 'User not found.');
    }

    return view('edit', compact('user'));
}

    // Update the specified user in storage.
    public function update(Request $request, $id)
{
    $request->validate([
        'email' => 'required|email|unique:users,email,' . $id,
        'username' => 'required|string|max:255',
        'role' => 'required|in:user,admin',
    ]);

    $user = User::findOrFail($id);

    $user->update([
        'email' => $request->email,
        'username' => $request->username,
        'role' => $request->role,
    ]);

    return redirect()->route('admin')->with('success', 'User updated successfully.');
}


public function updateAsUser(Request $request, $id)
{
    $request->validate([
        'username' => 'required|string|max:255',
        'password' => 'nullable|string|min:6', // nullable: password bisa kosong
    ]);

    $user = User::findOrFail($id);

    $user->update([
        'username' => $request->username,
        'password' => $request->filled('password') ? bcrypt($request->password) : $user->password,
    ]);

    return redirect()->route('profile')->with('success', 'Profile updated successfully.');
}


    // Remove the specified user from storage.
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin')->with('success', 'User deleted successfully.');
    }
}
