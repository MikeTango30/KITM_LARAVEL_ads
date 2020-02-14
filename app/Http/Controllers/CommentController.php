<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Listing;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addComment(Listing $listing) {

        Comment::create([
           'comment' => request('comment'),
           'listing_id' => $listing->id,
           'user_id' => Auth()->id()
        ]);

        return back();
    }
}
