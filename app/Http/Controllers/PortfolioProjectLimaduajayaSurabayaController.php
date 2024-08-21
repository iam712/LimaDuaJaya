<?php

namespace App\Http\Controllers;

use App\Models\PortfolioProjectLimaduajayaSurabaya;
use App\Models\ProjectLimaduajayaSurabaya;
use Illuminate\Http\Request;

class PortfolioProjectLimaduajayaSurabayaController extends Controller
{
    // Display a listing of the portfolio projects (Admin View)
    public function index()
    {
        // Fetch all portfolio projects with their associated projects
        $portfolioProjects = PortfolioProjectLimaduajayaSurabaya::with('projectLimaduajayaSurabaya')->get();

        // Fetch all projects to pass to the view (for dropdowns in modals)
        $projects = ProjectLimaduajayaSurabaya::all();

        // Pass the portfolio projects and projects to the view
        return view('admin.portoproject.portoproject', compact('portfolioProjects', 'projects'));
    }

    // Store a newly created portfolio project (Admin Create)
    
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'project_id' => 'required|exists:projectlimaduajayasurabayas,id',
        ]);

        // Store the image
        $imagePath = $request->file('image')->store('portfolio_images', 'public');

        // Create the portfolio project explicitly assigning project_id
        $portfolioProject = new PortfolioProjectLimaduajayaSurabaya();
        $portfolioProject->image = $imagePath;
        $portfolioProject->project_id = $request->project_id; // Explicit assignment of project_id
        $portfolioProject->save();

        return redirect()->route('portfolio_projects.index')->with('success', 'Portfolio project created successfully.');
    }


    // Update the specified portfolio project (Admin Update)
    public function update(Request $request, $id)
    {
        // Fetch the specific portfolio project by ID
        $portfolioProject = PortfolioProjectLimaduajayaSurabaya::findOrFail($id);

        // Validate the incoming request
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'project_id' => 'required|exists:projectlimaduajayasurabayas,id', // Use 'project_id'
        ]);

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

        return redirect()->route('portfolio_projects.index')->with('success', 'Portfolio project updated successfully.');
    }

    // Remove the specified portfolio project (Admin Delete)
    public function destroy($id)
    {
        // Fetch the specific portfolio project by ID
        $portfolioProject = PortfolioProjectLimaduajayaSurabaya::findOrFail($id);

        // Delete the portfolio project
        $portfolioProject->delete();

        return redirect()->route('portfolio_projects.index')->with('success', 'Portfolio project deleted successfully.');
    }
}
