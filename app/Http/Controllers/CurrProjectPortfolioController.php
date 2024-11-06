<?php

namespace App\Http\Controllers;

use App\Models\CurrProject;
use App\Models\CurrProjectPortfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CurrProjectPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currproject_portfolios = CurrProjectPortfolio::all();
        $currproject_portfolios = CurrProjectPortfolio::paginate(5);
        $currprojects = CurrProject::all();

        return view('admin.currprojectportfolio.currprojectportfolio', compact('currproject_portfolios', 'currprojects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status_detail' => 'required',
            'currproject_id' => 'required',
        ]);

        // Store the image
        $imagePath = $request->file('image')->store('currportfolio_images', 'public');

        CurrProjectPortfolio::create([
            'image' => $imagePath,
            'status_detail' => $request->input('status_detail'),
            'currproject_id' => $request->input('currproject_id'),
        ]);

        return redirect()->route('currproject_portfolios.index')->with('success', 'Portfolio project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CurrProjectPortfolio $currProjectPortfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CurrProjectPortfolio $currProjectPortfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Fetch the specific portfolio project by ID
        $currproject_portfolios = CurrProjectPortfolio::findOrFail($id);

        // Validate the incoming request
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status_detail' => 'required',
            'currproject_id' => 'required',
        ]);

        //dd($request->all());

        // Check if a new image has been uploaded
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('currportfolio_images', 'public');
            $currproject_portfolios->update([
                'image' => $imagePath,
                'status_detail' => $request->status_detail,
                'currproject_id' => $request->currproject_id,
            ]);
        } else {
            $currproject_portfolios->update([
                'status_detail' => $request->status_detail,
                'currproject_id' => $request->currproject_id,
            ]);
        }

        return redirect()->route('currproject_portfolios.index')->with('success', 'Portfolio project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Fetch the specific portfolio project by ID
        $currproject_portfolios = CurrProjectPortfolio::findOrFail($id);

        if ($currproject_portfolios->image) {
            Storage::delete('public/' . $currproject_portfolios->image);
        }

        // Delete the portfolio project
        $currproject_portfolios->delete();

        return redirect()->route('currproject_portfolios.index')->with('success', 'Portfolio project deleted successfully.');
    }
}
