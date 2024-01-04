<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\LikeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
| Here is where you can register web routes for your application. These
| routes are loaded by
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
  /*  Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');*/
});
Route::middleware('auth')->group(function (){
    Route::get('/',[HomeController::class,'index'])->name("/");
    //Route::get('/home', [HomeController::class,'index'])->name('home');
    Route::get('/posts',[PostController::class,'index'])->name("posts.index");
    Route::get('/posts/{postId:slug}',[PostController::class,'certainPost'])->name("posts.certain-post");
    Route::get('/profile/userLikes',[LikeController::class,'index'])->name("profile.user-likes");
});
\Illuminate\Support\Facades\Auth::routes();
Route::get('/aboutUs',[HomeController::class,'aboutUs'])->name('about-us');
