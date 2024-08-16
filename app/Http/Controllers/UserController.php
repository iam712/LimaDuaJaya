<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Fetch and list all users
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $validated['isAdmin'] = $request->has('isAdmin');

        User::create($validated);

        return redirect()->route('admin.users.index')->with('success', 'User created successfully');
    }


    public function show($id)
    {
        // Display a specific user by ID
    }

    public function edit($id)
    {
        // Show the form to edit a specific user by ID
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    // Update the specified user in storage.
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
        ]);

        if ($request->password) {
            $validated['password'] = Hash::make($request->password);
        }

        $validated['isAdmin'] = $request->has('isAdmin');

        $user->update($validated);

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }


    public function destroy($id)
    {
        // Delete a specific user by ID
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
    }

    // handle user login

    public function signin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('admin.dashboard')); // Redirect to the admin dashboard
        }

        return redirect()->back()->withErrors('Invalid credentials');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/signin')->with('success', 'Successfully logged out');
    }
}
