<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Fetch and list all users
    }

    public function create()
    {
        // Show the form to create a new user
    }

    public function store(Request $request)
    {
        // Store a newly created user in storage
    }

    public function show($id)
    {
        // Display a specific user by ID
    }

    public function edit($id)
    {
        // Show the form to edit a specific user by ID
    }

    public function update(Request $request, $id)
    {
        // Update the specified user in storage
    }

    public function destroy($id)
    {
        // Delete a specific user by ID
    }
}
