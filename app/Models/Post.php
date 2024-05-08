<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
Use Illuminate\Support\Arr;

class Post
{
    use HasFactory;

    public static function all(){
        return [
            [
                'id'=> '1',
                'title' => 'Judul Artikel 1',
                'slug'=> 'judul-artikel-1',
                'author' => 'Rangga',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad a nemo aliquam quis veniam adipisci nostrum
                atque quo. Ea, modi earum corporis facere officiis cum fuga minima molestiae aperiam sunt.'
            ],
            [
                'id'=> '2',
                'title' => 'Judul Artikel 2',
                'slug'=> 'judul-artikel-2',
                'author' => 'Saputra',
                'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Id velit et quis blanditiis tenetur. Sequi neque, ex, repellendus necessitatibus impedit, ipsa tempore architecto explicabo dicta iusto dolore officiis nobis alias!'
            ]
            ];
    }

    public static function find($slug)
    {

        // return Arr::first(static::all(), function ($post) use ($slug){
        //     return $post['slug'] == $slug;
        // }); Atau di bawah ini

        $post =  Arr::first(static::all(), fn($post) => ($post)['slug'] == $slug);

        if(! $post){
           abort(404);
        }
        return $post;
    }
}
