<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about',['name' => "Herdy Sya'banul Hakim",'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts',['title' => 'Blog','posts'=>[
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => "Herdy Sya'banul Hakim",
            'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, autem qui dolor nam illo voluptatem numquam laborum cupiditate corporis. Repellendus ut sit adipisci voluptas illum nulla modi neque delectus vel et in maxime alias esse quidem, quas quasi possimus. Labore!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => "Herdy Sya'banul Hakim",
            'body' =>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi cumque quaerat ex iure quae alias libero perspiciatis voluptatem possimus reiciendis aliquid nesciunt consequatur, eum magnam, obcaecati voluptatibus, quibusdam dolorem facilis!'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => "Herdy Sya'banul Hakim",
            'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, autem qui dolor nam illo voluptatem numquam laborum cupiditate corporis. Repellendus ut sit adipisci voluptas illum nulla modi neque delectus vel et in maxime alias esse quidem, quas quasi possimus. Labore!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => "Herdy Sya'banul Hakim",
            'body' =>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi cumque quaerat ex iure quae alias libero perspiciatis voluptatem possimus reiciendis aliquid nesciunt consequatur, eum magnam, obcaecati voluptatibus, quibusdam dolorem facilis!'
        ]
        ];

        $post = Arr::first($posts, function($post) use ($slug){
            return $post['slug'] == $slug;
        });

        return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});
