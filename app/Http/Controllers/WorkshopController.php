<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function index()
    {
        // Fetch and list all workshops
        $workshops = Workshop::with('portfolios')->get();
        $workshops = Workshop::paginate(2);
        return view('admin.workshop.workshop', compact('workshops'));
    }

    public function create()
    {
        // Show the form to create a new workshop

    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'isLimaduajaya' => 'required|boolean'
        ]);

        // Handle the image upload
        $imagePath = $request->file('image')->store('images', 'public');

        // Create and save the new workshop
        Workshop::create([
            'image' => $imagePath,  // Store the path to the uploaded image
            'name' => $request->name,
            'location' => $request->location,
            'description' => $request->description,
            'isLimaduajaya' => $request->isLimaduajaya
        ]);

        // Redirect to the workshops index with a success message
        return redirect()->route('workshops.index')->with('success', 'Workshop created successfully.');
    }


    public function show($id)
    {
        // Display a specific workshop by ID
        // Retrieve the specific workshop by its ID
        $workshops = Workshop::findOrFail($id);

        // Pass the workshop data to the view
        return view('workshops.show', compact('workshops'));
    }

    public function edit($id)
    {
        // Show the form to edit a specific workshop by ID
        // Find the specific workshop by ID
        // $workshop = Workshop::findOrFail($id);

        // // Pass the workshop data to the view to edit
        // return view('admin.workshop.edit', compact('workshop'));

    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'isLimaduajaya' => 'required|boolean',
        ]);

        // Find the specific workshop by ID
        $workshop = Workshop::findOrFail($id);

        // Update the workshop's details
        $workshop->name = $request->name;
        $workshop->location = $request->location;
        $workshop->description = $request->description;
        $workshop->isLimaduajaya = $request->isLimaduajaya;

        //dd($request->all());

        // Check if a new image has been uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portfolio_images', 'public');
            $portfolioProject->update([
                'image' => $imagePath,
                'project_id' => $request->project_id, // Use 'project_id'
            ]);
        } else {
            $portfolioProject->update([
                'project_id' => $request->project_id,
            ]);
        }
        // Handle the image if it was uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($workshop->image) {
                \Storage::delete('public/' . $workshop->image);
            }

            // Store the new image
            $imagePath = $request->file('image')->store('images', 'public');
            $workshop->image = $imagePath;
        }

        // Save the updated workshop
        $workshop->save();

        // Redirect back with a success message
        return redirect()->route('workshops.index')->with('success', 'Workshop updated successfully!');
    }

    public function destroy($id)
    {
        // Delete a specific workshop by ID
    $workshop = Workshop::findOrFail($id);

    // Delete the workshop's image from storage
    if ($workshop->image) {
        \Storage::delete('public/' . $workshop->image);
    }

    // Delete the workshop from the database
    $workshop->delete();

    // Redirect to the workshops list with a success message
    return redirect()->route('workshops.index')->with('success', 'Workshop deleted successfully!');
    }
}
