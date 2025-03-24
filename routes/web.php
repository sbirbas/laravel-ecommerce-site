<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\CustomerController;


use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', [HomeController::class, 'index']);

// Authentication Routes
Route::middleware(['web'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.form');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Register Routes
Route::middleware(['web'])->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register.form');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
});

// Listing Routes
Route::get('/listing/{id}', [ListingController::class, 'show'])->name('listing-show');

// Cart Routes
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add-to-cart');

// Vendor and Customer Dashboards
Route::get('/vendor/dashboard/{user}', [VendorController::class, 'index'])->name('vendor.dashboard')->middleware('auth');
Route::get('/customer/dashboard/{user}', [CustomerController::class, 'index'])->name('customer.dashboard')->middleware('auth');
