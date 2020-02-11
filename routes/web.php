<?php

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

Route::get('/', 'HomeController@index');
Route::get('/listings', 'HomeController@showListings');
Route::get('/listing/{listing}', 'ListingController@showListing');
Route::get('/about', 'HomeController@showAbout');
Route::get('/contacts', 'HomeController@showContacts');

Route::get('/listing-mgmt', 'ListingController@showListingsTable');
Route::get('/add-listing', 'ListingController@showNewListingForm');
Route::post('/store-listing', 'ListingController@storeListing');
Route::get('/listing/delete/{listing}', 'ListingController@destroy');
Route::get('/listing/update/form/{listing}', 'ListingController@showUpdateForm');
Route::post('/update/{listing}', 'ListingController@updateListing');

Route::get('/category-mgmt', 'CategoryController@showCategories');
Route::get('/add-category', 'CategoryController@showNewCategoryForm');
Route::post('/store-category', 'CategoryController@storeCategory');
Route::get('/categories/delete/{category}', 'CategoryController@destroy');

Route::get('/search', 'HomeController@search');

