<?php

namespace App\Http\Controllers;

use App\Models\CurrProject;
use App\Models\CurrProjectPortfolio;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CurrProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currprojects = CurrProject::all();
        $currprojects = CurrProject::paginate(5);
        return view('admin.currproject.currproject', compact('currprojects'));
    }

    public function track(Request $request)
{
    $unique_id = $request->input('unique_id');

    $project = null;
    $currproject_portfolios = collect(); // Default empty collection for portfolios

    if ($unique_id) {
        // Find the project by unique_id
        $project = CurrProject::where('unique_id', $unique_id)->first();

        // If the project exists, get the related CurrProjectPortfolio records
        if ($project) {
            $currproject_portfolios = CurrProjectPortfolio::where('currproject_id', $project->id)->get();
        }
    }

    return view('track', compact('project', 'currproject_portfolios'));
}


    public function count()
    {
        $currProjectCount = CurrProject::All();
        return $currProjectCount;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'unique_id' => 'required|string|max:255',
        ]);

        // $fotoPath = '';
        // if ($request->hasFile('foto_berita')) {
        //     $extension = $request->file('foto_berita')->getClientOriginalExtension();
        //     $newName = 'berita' . '-' . now()->timestamp . '.' . $extension;
        //     $fotoPath = $request->file('foto_berita')->storeAs('berita_photos', $newName, 'public');
        // }

        // $berita = Berita::create([
        //     'foto_berita' => $fotoPath,
        // ]);

        CurrProject::create([
            'name' => $request->input('name'),
            'unique_id' => $request->input('unique_id'),
        ]);

        return redirect()->route('currprojects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $berita = Berita::findOrFail($id);

        // if ($request->hasFile('foto_berita')) {
        //     if ($berita->foto_berita && Storage::disk('public')->exists($berita->foto_berita)) {
        //         Storage::disk('public')->delete($berita->foto_berita);
        //     }
        //     $fotoPath = $request->file('foto_berita')->store('berita_photos', 'public');
        //     $berita->foto_berita = $fotoPath;
        // }
        // $berita->save();

        $request->validate([
            'name' => 'required|string|max:255',
            'unique_id' => 'required|string|max:255',
        ]);

        $project = CurrProject::findOrFail($id);
        $project->update($request->only('name'));
        $project->update($request->only('unique_id'));

        return redirect()->route('currprojects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $currprojects = CurrProject::findOrFail($id);
        $currprojects->delete();
        return redirect()->route('currprojects.index')->with('success', 'Project deleted successfully.');
    }
}
