<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'category_id',
        'user_id',
        'img',
        'listing_title',
        'location',
        'rating',
        'description',
        'price',
        'email',
        'phone'
    ];

    public function comments() {

        return $this->hasMany(Comment::class);
    }

    public function user() {

        return $this->belongsTo(User::class);
    }
}
