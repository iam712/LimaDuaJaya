<?php
namespace App\Http\Controllers;

use App\Models\ProjectLimaduajayaSurabaya;
use Illuminate\Http\Request;

class ProjectLimaduajayaSurabayaController extends Controller
{
    // Display a listing of the projects (Admin View)
    public function index()
    {
        $projects = ProjectLimaduajayaSurabaya::with('portfolioProjects')->get();
        $projects = ProjectLimaduajayaSurabaya::paginate(5);
        return view('admin.project.project', compact('projects'));
    }

    public function count() {
        $projectCount = ProjectLimaduajayaSurabaya::All();
        return $projectCount;
    }

    // Store a newly created project (Admin Create)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        ProjectLimaduajayaSurabaya::create($request->only('name'));

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    // Update the specified project (Admin Update)
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $project = ProjectLimaduajayaSurabaya::findOrFail($id);
        $project->update($request->only('name'));

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    // Remove the specified project (Admin Delete)
    public function destroy($id)
    {
        $project = ProjectLimaduajayaSurabaya::findOrFail($id);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }

    // Display projects and their portfolios for the user view
    public function indexForUser()
    {
        $projects = ProjectLimaduajayaSurabaya::with('portfolioProjects')->get();
        return view('project', compact('projects'));
    }
}
