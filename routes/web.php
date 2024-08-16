<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
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

// user review

Route::get('/review', function () {
    return view('review');
});

Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

// auth system

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/login', function () {
    return redirect()->route('signin');
});

Route::post('/signin', [UserController::class, 'signin'])->name('signin');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'admin'])->group(function () {
    // Admin Dashboard
    Route::get('/admin', function () {
        return view('admin.dashboardadmin');
    })->name('admin.dashboard');

    // Admin Reviews
    Route::get('/admin/reviews', [ReviewController::class, 'adminIndex'])->name('admin.reviews.index');
    Route::delete('/admin/reviews/{id}', [ReviewController::class, 'destroy'])->name('admin.reviews.destroy');

    // Admin Workshop
    Route::get('/admin-workshop', function () {
        return view('admin.workshop.workshop');
    });

    // Admin Project
    Route::get('/admin-project', function () {
        return view('admin.project.project');
    });

    // Admin Portfolio
    Route::get('/admin-portoproject', function () {
        return view('admin.portoproject.portoproject');
    });

    Route::get('/admin-portoworkshop', function () {
        return view('admin.portoworkshop.portoworkshop');
    });

    // User CRUD Routes
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    Route::post('/admin/users', [UserController::class, 'store'])->name('admin.users.store');
    Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');

});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
