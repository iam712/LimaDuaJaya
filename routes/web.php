<?php

use App\Http\Controllers\CurrProjectController;
use App\Http\Controllers\CurrProjectPortfolioController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectLimaduajayaSurabayaController;
use App\Http\Controllers\PortfolioProjectLimaduajayaSurabayaController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\AdminMiddleware;
use App\Models\CurrProject;
use App\Models\CurrProjectPortfolio;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Artisan;


// FOR USER

// STORAGE LINK
Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage linked successfully.';
});

// Switch Languange
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

// Landing Page Routes
Route::get('/', function () {
    return view('home');
});

Route::get('/links', function () {
    return view('link');
});

// About Us Routes
Route::get('/aboutus', [ReviewController::class, 'index'])->name('aboutus');

// Workshop Routes
Route::get('/workshops', [WorkshopController::class, 'userIndex'])->name('workshop.index');

Route::get('/workshops/{id}', [WorkshopController::class, 'show'])->name('workshop.detail');

// Project Routes
Route::get('/projects', [ProjectLimaduajayaSurabayaController::class, 'indexForUser'])->name('projects.index');


Route::get('/review', function () {
    return view('review');
});

Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

// Sign In Routes
Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/login', function () {
    return redirect()->route('signin');
});

Route::post('/signin', [UserController::class, 'signin'])->name('signin');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Tracking Routes
Route::get('/track', [CurrProjectController::class, 'track'])->name('track');


// FOR ADMIN
Route::middleware(['auth', AdminMiddleware::class])->group(function () {

    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Review Routes
    Route::get('/admin/reviews', [ReviewController::class, 'adminIndex'])->name('admin.reviews.index');

    Route::delete('/admin/reviews/{id}', [ReviewController::class, 'destroy'])->name('admin.reviews.destroy');

    // Workshop Routes
    Route::resource('/admin/workshops', WorkshopController::class);
    Route::resource('/admin/portfolios', PortfolioController::class);

    // Curr Project Routes
    Route::resource('/admin/currprojects', CurrProjectController::class);
    Route::resource('/admin/currproject_portfolios', CurrProjectPortfolioController::class);
    // Route::resource('/admin/currprojects', CurrProjectPortfolio::class);


    // Project Routes
    Route::resource('/admin/projects', ProjectLimaduajayaSurabayaController::class);
    Route::resource('/admin/portfolio_projects', PortfolioProjectLimaduajayaSurabayaController::class);

    // User Routes
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
});

// Optional: Uncomment these routes if needed
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
