<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'category_id',
        'img',
        'listing_title',
        'location',
        'rating',
        'description',
        'price',
        'email',
        'phone'
    ];
}
