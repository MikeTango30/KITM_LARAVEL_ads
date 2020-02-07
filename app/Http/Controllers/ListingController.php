<?php

namespace App\Http\Controllers;

use App\Category;
use App\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function showNewListingForm() {

        $categories = Category::all();

        return view('ads.pages.add_listing', compact('categories'));
    }

    public function storeListing(Request $request) {

        $validatedData = $request->validate([
            'catId' => 'required',
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'price' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        $listing = Listing::create([
            'category_id' => request('catId'),
            'listing_title' => request('title'),
            'location' => request('location'),
            'description' => request('description'),
            'rating' => null,
            'img' => null,
            'price' => request('price'),
            'email' => request('email'),
            'phone' => request('phone'),
        ]);

        return redirect('/listings');
    }

    public function getListings(){
        $listings = DB::table('listings')->join('categories', 'listings.category_id', '=', 'categories.id');

        return $listings;
    }
}
