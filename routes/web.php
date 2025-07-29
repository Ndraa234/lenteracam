<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;


// Admin Routes
Route::prefix('admin')->group(function () {
    // Public admin routes (login)
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    // Protected admin routes
    Route::middleware('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
        Route::post('/products/store', [AdminController::class, 'storeProduct']);
        Route::get('/products/edit/{id}', [AdminController::class, 'editProduct']);
        Route::post('/products/update/{id}', [AdminController::class, 'updateProduct']);
        Route::delete('/products/delete/{id}', [AdminController::class, 'deleteProduct']);
        Route::get('/rentals', [AdminController::class, 'rentals']);
        Route::get('/testimonials', [AdminController::class, 'testimonials']);
        Route::post('/create-admin', [AdminController::class, 'createAdmin'])->name('admin.create');
    });
});

// Landing page (untuk user yang belum login)
Route::get('/landing', [LandingController::class, 'index'])->name('landing');

// Dashboard (untuk user yang sudah login)
Route::get('/', [DashboardController::class, 'index']);
// Halaman lain
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.detail');

Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/my-rentals', function () {
    return view('my-rentals');
});

Route::get('/logout', function () {
    return redirect('/');
});

Route::get('/welcome', function () {
    return view('welcome');
});


