<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('home', ['featuredPosts' => Post::featured()->latest('created_at')->take(3)->get(),
            'latestPosts' => Post::latest()->take(9)->get()]);
    }

    public function aboutUs(Request $request)
    {
        return view('about-us',[
            'posts'=>Post::all()->count(),
            'users'=>User::all()->count(),
            'categories'=>Category::all()->count(),
            ]);
    }
}
