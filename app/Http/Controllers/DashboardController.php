<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use App\Models\ProjectLimaduajayaSurabaya;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Get total counts
        $workshopCount = Workshop::count();
        $projectCount = ProjectLimaduajayaSurabaya::count();
        $reviewCount = Review::count();
        $userCount = User::count();

        // Pass the counts to the view
        return view('admin.dashboardadmin', compact('workshopCount', 'projectCount', 'reviewCount', 'userCount'));
    }
}

