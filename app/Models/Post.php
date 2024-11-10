<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
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
    }

    public static function find($slug): array  {
        // return Arr::first(static::all(), function($post) use ($slug){
        //     return $post['slug'] == $slug;
        // });


        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(! $post){
            abort(404);
        }
        return $post;
    }
}