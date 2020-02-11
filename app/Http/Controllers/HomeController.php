<?php

namespace App\Http\Controllers;

use App\Category;
use App\Listing;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $listings = Listing::select('*')
            ->join('categories', 'listings.category_id', '=', 'categories.id')
            ->orderBy('listings.created_at', 'desc')
            ->limit(5)
            ->get();

        $categories = Category::all();

        return view('ads.pages.index', compact('listings', 'categories'));
    }

    public function showListings()
    {
        $listings = Listing::select('*')
            ->join('categories', 'listings.category_id', '=', 'categories.id')
            ->simplePaginate(15);

        return view('ads.pages.listings', compact('listings'));
    }

    public function showAbout()
    {

        return view('ads.pages.about');
    }

    public function showContacts()
    {

        return view('ads.pages.contacts');
    }

}
