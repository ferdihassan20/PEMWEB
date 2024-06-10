<?php
// app/Http/Controllers/UserController.php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Display a listing of the users.
    public function index()
    {
        $users = User::all();
        return view('admin', compact('users'));
    }

    // Show the form for creating a new user.
    public function create()
    {
        return view('admin.users.create');
    }

    // Store a newly created user in storage.
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'role' => 'required|in:user,admin',
        ]);

        User::create([
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password), // Ensure the password is hashed
            'role' => $request->role,
        ]);

        return redirect()->route('admin')->with('success', 'User created successfully.');
    }

    // Show the form for editing the specified user.
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // Update the specified user in storage.
    public function update(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
            'username' => 'required|string|max:255',
            'role' => 'required|in:user,admin',
        ]);

        $user->update($request->only('email', 'username', 'role'));

        // Check if a new password is provided and update it
        if ($request->filled('password')) {
            $user->update(['password' =>$request->password]);
        }

        return redirect()->route('admin')->with('success', 'User updated successfully.');
    }

    // Remove the specified user from storage.
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin')->with('success', 'User deleted successfully.');
    }
}
