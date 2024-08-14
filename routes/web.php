<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/aboutus', [ReviewController::class, 'index'])->name('aboutus');

Route::get('/workshop', function () {
    return view('workshop');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/review', function () {
    return view('review');
});

Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/admin', function () {
    return view('admin.dashboardadmin');
});

Route::get('/admin-workshop', function () {
    return view('admin.workshop.workshop');
});

Route::get('/admin-project', function () {
    return view('admin.project.project');
});

Route::get('/admin-user', function () {
    return view('admin.user.user');
});

Route::get('/admin/reviews', [ReviewController::class, 'adminIndex'])->name('admin.reviews.index');
Route::delete('/admin/reviews/{id}', [ReviewController::class, 'destroy'])->name('admin.reviews.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
