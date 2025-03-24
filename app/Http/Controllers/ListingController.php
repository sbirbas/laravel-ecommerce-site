<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function show($id)
    {
       $listing =  Listing::findOrFail($id);

       return view('listings.show', compact('listing'));
    }
}
