<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// All Listings
Route::get('/', [ListingController::class, 'index']);

//Create Listing

Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Edit Submit To Update

Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete listing

Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listing

Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single Listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/create form

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User

Route::post('/users', [UserController::class, 'store']);

// Log user out

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login form

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log in user

Route::post('/users/authenticate', [UserController::class, 'authenticate']);
