<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DistributorApplicationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products.index');
Route::get('/products/{category:slug}', [PageController::class, 'category'])->name('products.category');
Route::get('/products/{category:slug}/{product:slug}', [PageController::class, 'product'])->name('products.show');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/distributor', [PageController::class, 'distributor'])->name('distributor');
Route::post('/distributor', [DistributorController::class, 'store'])->name('distributor.store');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');

// Admin Routes (Protected)
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
    Route::delete('contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::patch('contacts/{contact}/mark-read', [ContactController::class, 'markRead'])->name('contacts.markRead');
    
    // Distributor Applications Routes
    Route::get('distributors', [DistributorApplicationController::class, 'index'])->name('distributors.index');
    Route::get('distributors/{application}', [DistributorApplicationController::class, 'show'])->name('distributors.show');
    Route::patch('distributors/{application}/status', [DistributorApplicationController::class, 'updateStatus'])->name('distributors.updateStatus');
    Route::delete('distributors/{application}', [DistributorApplicationController::class, 'destroy'])->name('distributors.destroy');
});

// Profile routes from Breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
