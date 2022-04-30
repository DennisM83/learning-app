<?php

namespace App\Http\Controllers;

use App\Models\Listing;

// Show all listings
class ListingController extends Controller
{
    public function index()
    {
        return view('listings', [
            'listings' => Listing::all(),
        ]);
    }
// Show single listing
    public function show(Listing $listing)
    {
        return view('listing', [
            'listing' => $listing,
        ]);
    }
}