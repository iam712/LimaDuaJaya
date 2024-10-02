<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectLimaduajayaSurabayaController;
use App\Http\Controllers\PortfolioProjectLimaduajayaSurabayaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// FOR USER

// Landing Page Routes
Route::get('/', function () {
    return view('home');
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

// FOR ADMIN
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Review Routes
    Route::get('/admin/reviews', [ReviewController::class, 'adminIndex'])->name('admin.reviews.index');

    Route::delete('/admin/reviews/{id}', [ReviewController::class, 'destroy'])->name('admin.reviews.destroy');

    // Workshop Routes
    Route::resource('/admin/workshops', WorkshopController::class);

    Route::resource('/admin/portfolios', PortfolioController::class);

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
