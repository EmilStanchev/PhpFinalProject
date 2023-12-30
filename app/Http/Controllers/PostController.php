<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //

    public function index()
    {
        return view('posts.index',['posts'=>Post::take(5)->get(),'categories' => Category::
            whereHas('posts',function ($query){

        })->
        take(5)->get()]);
    }
}
