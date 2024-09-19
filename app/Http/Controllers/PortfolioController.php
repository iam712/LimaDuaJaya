<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{

    public function index()
    { 
        // Fetch all portfolios with their associated workshops
        $portfolios = Portfolio::with('workshop')->get();

        $portfolios = Portfolio::with('workshop')->paginate(5);
        // Adjust pagination as needed
        $workshops = Workshop::all();

        // Pass the portfolios and workshops to the view
        return view('admin.portoworkshop.portoworkshop', compact('portfolios', 'workshops'));
    }

    public function store(Request $request)
    {
        // Store a newly created portfolio in storage
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_workshop' => 'required|exists:workshops,id',
        ]);

        // Handle the image upload
        $imagePath = $request->file('image')->store('portfolio_images', 'public');

        // Create the portfolio explicitly assigning id_workshop
        $portfolio = new Portfolio();
        $portfolio->image = $imagePath;
        $portfolio->id_workshop = $request->id_workshop; // Explicit assignment of id_workshop
        $portfolio->save();

        // Redirect to the portfolios index with a success message
        return redirect()->route('portfolios.index')->with('success', 'Portfolio created successfully.');
    }

    public function show($id)
    {
        // Display a specific portfolio by ID
        $portfolio = Portfolio::with('workshop')->findOrFail($id);
        return view('admin.portfolio.show', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        // Fetch the specific portfolio by ID
        $portfolio = Portfolio::findOrFail($id);

        // Validate the incoming request
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_workshop' => 'required|exists:workshops,id',
        ]);

        // Handle the image if it was uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            $imagePath = $request->file('image')->store('portfolio_images', 'public');
            $portfolio->update([
                'image' => $imagePath,
                'id_workshop' => $request->id_workshop, // Use 'id_workshop'
            ]);
        } else {
            $portfolio->update([
                'id_workshop' => $request->id_workshop,
            ]);
        }

        // Redirect back with a success message
        return redirect()->route('portfolios.index')->with('success', 'Portfolio updated successfully.');
    }


    // Remove the specified portfolio project (Admin Delete)
    public function destroy($id)
    {
        // Delete a specific portfolio by ID
        $portfolio = Portfolio::findOrFail($id);

        // Delete the portfolio's image from storage
        if ($portfolio->image) {
            Storage::delete('public/' . $portfolio->image);
        }

        // Delete the portfolio from the database
        $portfolio->delete();

        // Redirect to the portfolios list with a success message
        return redirect()->route('portfolios.index')->with('success', 'Portfolio deleted successfully!');
    }

}
