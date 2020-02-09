<?php

namespace App\Http\Controllers;

use App\Category;
use App\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function showNewListingForm()
    {

        $categories = Category::all();

        return view('ads.pages.add_listing', compact('categories'));
    }

    public function storeListing(Request $request)
    {

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

    public function showListing(Listing $listing)
    {

        return view('ads.pages.listing', compact('listing'));
    }

    public function showListingsTable()
    {

        $listings = Listing::select('*')
            ->join('categories', 'listings.category_id', '=', 'categories.id')
            ->simplePaginate(10);

        return view('ads.pages.listing_mgmt', compact('listings'));
    }

    public function destroy(Listing $listing)
    {

        $listing->delete();

        return redirect('/listing-mgmt');
    }

}
