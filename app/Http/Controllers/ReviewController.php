<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Display reviews on the About Us page
    public function index()
    {
        $reviews = Review::all();
        return view('about', compact('reviews'));
    }

    public function count()
    {
        $reviewCount = Review::All();
        return $reviewCount;
    }

    // Store a newly created review in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comments' => 'required|string',
        ]);

        Review::create([
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comments,
        ]);

        return redirect()->back()->with('success', 'Thank you for your review!');
    }

    // Display the reviews for the admin
    public function adminIndex()
    {
        //$reviews = Review::all();
        $reviews = Review::paginate(5);
        return view('admin.review.review', compact('reviews'));
    }

    // Delete a specific review
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('admin.reviews.index')->with('success', 'Review deleted successfully');
    }
}
