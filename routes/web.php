<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login.form');

Route::post('/login', [LoginController::class, 'login'])->name('login');

//Register

Route::get('/register', [RegisterController::class, 'index'])->name('register.form');

Route::post('/register', [RegisterController::class, 'register'])->name('register');


//listings

Route::get('/listing/{id}', [ListingController::class, 'show'])->name('listing.show');


//cart
Route::get('/listing/{id}', [CartController::class, 'showCart'])->name('cart');


Route::post('/listing/{id}', [CartController::class, 'addToCart'])->name('add-to-cart');
