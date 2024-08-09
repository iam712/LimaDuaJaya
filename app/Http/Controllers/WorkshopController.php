<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function index()
    {
        // Fetch and list all workshops
    }

    public function create()
    {
        // Show the form to create a new workshop
    }

    public function store(Request $request)
    {
        // Store a newly created workshop in storage
    }

    public function show($id)
    {
        // Display a specific workshop by ID
    }

    public function edit($id)
    {
        // Show the form to edit a specific workshop by ID
    }

    public function update(Request $request, $id)
    {
        // Update the specified workshop in storage
    }

    public function destroy($id)
    {
        // Delete a specific workshop by ID
    }
}
