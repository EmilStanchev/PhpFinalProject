<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $posts = Post::likedByUser($user)->get();
        return view('profile.user-likes',['likedPosts'=>$posts]);
    }
}
