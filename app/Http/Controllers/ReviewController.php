<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        // Fetch and list all reviews
    }

    public function create()
    {
        // Show the form to create a new review
    }

    public function store(Request $request)
    {
        // Store a newly created review in storage
    }

    public function show($id)
    {
        // Display a specific review by ID
    }

    public function edit($id)
    {
        // Show the form to edit a specific review by ID
    }

    public function update(Request $request, $id)
    {
        // Update the specified review in storage
    }

    public function destroy($id)
    {
        // Delete a specific review by ID
    }
}

