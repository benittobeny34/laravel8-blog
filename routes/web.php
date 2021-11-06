<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    $posts = Post::latest()->get();
    return view('posts', [
        'posts' => $posts,
        'categories' => \App\Models\Category::all()
    ]);
})->name('home');

Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post,
        'categories' => \App\Models\Category::all()
    ]);
})->name('post');

Route::get('categories/{category:slug}', function (\App\Models\Category $category) {
    return view('posts', [
        'posts' => $category->posts,
        'categories' => \App\Models\Category::all(),
        'currentCategory' => $category,
    ]);
})->name('category');

Route::get('authors/{user:username}', function (User $user) {
    return view('posts', [
        'posts' => $user->posts,
        'categories' => \App\Models\Category::all(),
    ]);
});
