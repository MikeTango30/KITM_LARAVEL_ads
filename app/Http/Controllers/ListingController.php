<?php

namespace App\Http\Controllers;

use App\Category;
use App\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use File;

class ListingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['showListings', 'showListing', 'search']]);
    }

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
            'phone' => 'required',
            'img' => 'mimes:jpeg, jpg, png, gif|required|max:10000'
        ]);
        $path = $request->file('img')->store('public/images');
        $filename = str_replace('public/', "", $path);

        $listing = Listing::create([
            'category_id' => request('catId'),
            'user_id' => Auth::id(),
            'listing_title' => request('title'),
            'location' => request('location'),
            'description' => request('description'),
            'rating' => null,
            'img' => $filename,
            'price' => request('price'),
            'email' => request('email'),
            'phone' => request('phone'),
        ]);

        return redirect('/listing-mgmt');
    }

    public function showListingsTable()
    {

        $listings = Listing::select('*', \DB::raw("listings.id as listingId"))
            ->join('categories', 'listings.category_id', '=', 'categories.id')
            ->simplePaginate(10);

        return view('ads.pages.listing_mgmt', compact('listings'));
    }

    public function destroy(Listing $listing)
    {
        if (Gate::allows('destroy', $listing)) {

            $listing->delete();

            return redirect('/listing-mgmt');
        }

        return view('ads.pages.authorization_error');
    }

    public function showUpdateForm(Listing $listing)
    {

        if (Gate::allows('update', $listing)) {
            $categories = Category::all();
            $categoryId = $listing->getAttribute('category_id');
            $currentCategory = Category::select('category_name')->find($categoryId);

            return view('ads.pages.listing_update', compact('listing', 'categories', 'currentCategory'));
        }

        return view('ads.pages.authorization_error');
    }

    public function updateListing(Request $request, Listing $listing)
    {
        if (Gate::allows('update', $listing)) {
            $validatedData = $request->validate([
                'category_id' => 'required',
                'listing_title' => 'required',
                'location' => 'required',
                'description' => 'required',
                'price' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ]);

            if ($request->file()) {
                File::delete(storage_path('app/public/' . $listing->img));

                $path = $request->file('img')->store('public/images');
                $filename = str_replace('public/', "", $path);
                Listing::where('id', $listing->getAttribute('id'))->update(['img' => $filename]);
            }

            Listing::where('id', $listing->getAttribute('id'))->update($request->except(['_token', 'img']));

            return redirect('/listing-mgmt');
        }

        return view('ads.pages.authorization_error');
    }

    public function showListings()
    {
        $listings = Listing::select('*')
            ->join('categories', 'listings.category_id', '=', 'categories.id')
            ->simplePaginate(15);

        return view('ads.pages.listings', compact('listings'));
    }

    public function showListing(Listing $listing)
    {

        return view('ads.pages.listing', compact('listing'));
    }

    public function search(Request $request) {

        $input = $request->input('search');
        $location = $request->input('location');
        $category = $request->input('category');

        $listings = Listing::select('*')
            ->join('categories', 'listings.category_id', '=', 'categories.id')
            ->where('listing_title','LIKE','%'.$input.'%')
            ->where('category_id','LIKE','%'.$category.'%')
            ->where('location','LIKE','%'.$location.'%')
            ->simplePaginate(15);

        return view('ads.pages.search', compact('listings'));

    }

}
