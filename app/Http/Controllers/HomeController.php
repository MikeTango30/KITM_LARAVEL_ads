<?php

namespace App\Http\Controllers;

use App\Category;
use App\Listing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('ads.pages.index');
    }

    public function showListings(){
        $listings = Listing::select('listing_title', 'location', 'description', 'rating', 'category_name')
            ->join('categories', 'listings.category_id', '=', 'categories.id')->get();
        return view('ads.pages.listings', compact('listings'));
    }

    public function showListing(){

        return view('ads.pages.listing');
    }

    public function showAbout(){

        return view('ads.pages.about');
    }

    public function showContacts(){

        return view('ads.pages.contacts');
    }

}
