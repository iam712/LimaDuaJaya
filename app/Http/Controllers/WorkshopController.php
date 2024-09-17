<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkshopController extends Controller
{

    // In WorkshopController@index:
    public function index()
    {
        $workshops = Workshop::with('portfolios')->paginate(5); // Adjust pagination as needed
        return view('admin.workshop.workshop', compact('workshops'));
    }

    public function userIndex()
    {
        // Fetch Lima Dua Jaya workshops
        $limaduajayaWorkshops = Workshop::where('isLimaduajaya', true)->get();

        // Fetch other workshops (not Lima Dua Jaya)
        $otherWorkshops = Workshop::where('isLimaduajaya', false)->get();

        // Pass both collections to the view
        return view('workshop', compact('limaduajayaWorkshops', 'otherWorkshops'));
    }


    public function create()
    {
        // Show the form to create a new workshop
        return view('admin.workshop.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string|max:500',  // Adjust length as per your requirements
            'isLimaduajaya' => 'nullable|boolean'
        ]);

        // Handle the image upload
        $imagePath = $request->file('image')->store('images', 'public');

        // Create and save the new workshop
        Workshop::create([
            'image' => $imagePath,
            'name' => $request->name,
            'location' => $request->location,
            'description' => $request->description,
            //'isLimaduajaya' => $request->has('isLimaduajaya') ? true : false,
            'isLimaduajaya' => $request->input('isLimaduajaya', false) ? true : false, // Explicitly check the value
        ]);

        // Redirect to the workshops index with a success message
        return redirect()->route('workshops.index')->with('success', 'Workshop created successfully.');
    }

    public function show($id)
    {
        $workshop = Workshop::with('portfolios')->findOrFail($id);
        return view('detail', compact('workshop'));
    }


    public function edit($id)
    {
        // Show the form to edit a specific workshop by ID
        $workshop = Workshop::findOrFail($id);
        return view('admin.workshop.edit', compact('workshop'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string|max:500',  // Adjust length as per your requirements
            'isLimaduajaya' => 'nullable|boolean',
        ]);

        // Find the specific workshop by ID
        $workshop = Workshop::findOrFail($id);

        // Update the workshop's details
        $workshop->name = $request->name;
        $workshop->location = $request->location;
        $workshop->description = $request->description;
        //$workshop->isLimaduajaya = $request->has('isLimaduajaya') ? true : false;
        $workshop->isLimaduajaya = $request->input('isLimaduajaya', false) ? true : false; // Explicitly check the value

        // Handle the image if it was uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($workshop->image) {
                Storage::delete('public/' . $workshop->image);
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
        // Find and delete a specific workshop by ID
        $workshop = Workshop::findOrFail($id);

        // Delete the workshop's image from storage
        if ($workshop->image) {
            Storage::delete('public/' . $workshop->image);
        }

        // Delete the workshop from the database
        $workshop->delete();

        // Redirect to the workshops list with a success message
        return redirect()->route('workshops.index')->with('success', 'Workshop deleted successfully!');
    }
}
