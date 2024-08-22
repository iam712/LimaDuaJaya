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
        // $users = User::all();
        $users = User::paginate(10);
        return view('admin.user.user', compact('users'));
        // $reviews = Review::paginate(10);
        // return view('admin.review.review', compact('reviews'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $validated['password'] = $request->password; // Store the password in plain text
        $validated['isAdmin'] = true; // Automatically set new users as admin

        User::create($validated);

        return redirect()->route('admin.users.index')->with('success', 'User created successfully and set as admin by default.');
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

        // Find the user by email
        $user = User::where('email', $credentials['email'])->first();

        // Check if the user exists and the password matches
        if ($user && $user->password === $credentials['password']) {
            // Log the user in manually
            Auth::login($user);

            return redirect()->intended(route('admin.dashboard')); // Redirect to the admin dashboard
        }

        // If the credentials don't match, redirect back with an error
        return redirect()->back()->withErrors(['login_error' => 'Incorrect Username or Password'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/signin')->with('success', 'Successfully logged out');
    }
}
