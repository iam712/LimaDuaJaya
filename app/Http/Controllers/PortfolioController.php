<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Fetch and list all portfolios
    }

    public function create()
    {
        // Show the form to create a new portfolio
    }

    public function store(Request $request)
    {
        // Store a newly created portfolio in storage
    }

    public function show($id)
    {
        // Display a specific portfolio by ID
    }

    public function edit($id)
    {
        // Show the form to edit a specific portfolio by ID
    }

    public function update(Request $request, $id)
    {
        // Update the specified portfolio in storage
    }

    public function destroy($id)
    {
        // Delete a specific portfolio by ID
    }
}
