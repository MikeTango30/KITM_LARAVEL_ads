<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
//use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function addComment(Listing $listing)
    {
        if (Gate::allows('comment')) {
            Comment::create([
                'comment' => request('comment'),
                'listing_id' => $listing->id,
                'user_id' => Auth()->id()
            ]);

            return back();
        }

        return view('ads.pages.blacklist_error');
    }
}
