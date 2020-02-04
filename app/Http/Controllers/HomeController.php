<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('ads.pages.index');
    }

    public function showListings(){

        return view('ads.pages.listings');
    }
}
