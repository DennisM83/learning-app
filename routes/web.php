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

Route::get('/listings/create', [ListingController::class, 'create']);

// Store listing data
Route::post('/listings', [ListingController::class, 'store']);

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Edit Submit To Update

Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Edit Submit To Update

Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/create form

Route::get('/register', [UserController::class, 'create']);

// Create New User

Route::post('/users', [UserController::class, 'store']);

// Log user out

Route::post('/logout', [UserController::class, 'logout']);
