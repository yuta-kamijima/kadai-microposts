<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    // フォロー
    public function store(string $id)
    {
        \Auth::user()->follow(intval($id));
        return back();
    }

    // アンフォロー
    public function destroy(string $id)
    {
        \Auth::user()->unfollow(intval($id));
        return back();
    }
}
