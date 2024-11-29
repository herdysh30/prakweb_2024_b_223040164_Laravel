<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about',['name' => "Herdy Sya'banul Hakim",'title' => 'About']);
});

Route::get('/posts', function () {
    // $posts = Post::with(['author','category'])->latest()->get();

    return view('posts',['title' => 'Blog','posts'=> Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()]);
});


Route::get('/posts/{post:slug}', function(Post $post){

        return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function(User $user){
    // $posts = $user->posts->load('category', 'author');


    return view('posts', ['title' => count($user->posts) .  ' Articles by ' . $user->name, 'posts' => $user->posts]);
});
Route::get('/categories/{category:slug}', function(Category $category){
    // $posts = $category->posts->load('category', 'author');

    return view('posts', ['title' => 'Articles in : ' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
