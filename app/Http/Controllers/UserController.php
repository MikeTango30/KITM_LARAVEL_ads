<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class UserController extends Controller
{
    public function showUsers() {
        if (Gate::allows('blacklist')) {
            $users = User::all();

            return view('ads.pages.blacklist', compact('users'));
        }

        return redirect('/');
    }

    public function blacklist(User $user) {
        if (Gate::allows('blacklist')) {
            User::where('id', $user->getAttribute('id'))->update(['blacklisted' => true]);
        }

        return back();
    }

    public function unblacklist(User $user) {
        if (Gate::allows('blacklist')) {
            User::where('id', $user->getAttribute('id'))->update(['blacklisted' => false]);
        }

        return back();
    }
}
