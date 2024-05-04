<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

Route::get('/', function () {
    return view('home', [
        "title" => "Home Page",
        "header" => "Home Page"
    ]);
});

Route::get('/posts', function(){
    return view('posts', [
        'title' => 'Blog',
        "header" => "Blog Page",
        "posts" => 
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Rangga',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad a nemo aliquam quis veniam adipisci nostrum
            atque quo. Ea, modi earum corporis facere officiis cum fuga minima molestiae aperiam sunt.'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Saputra',
            'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Id velit et quis blanditiis tenetur. Sequi neque, ex, repellendus necessitatibus impedit, ipsa tempore architecto explicabo dicta iusto dolore officiis nobis alias!'
        ]
    ]);
});

Route::get('/about', function(){
    return view('about', [
        'title' => 'About',
        "header" => "Header Page",
        "name" => "Rangga Saputra"
    ]);
});

Route::get('contact', function(){
    return view('contact', [
        "title" => "Contact",
        "header" => "Contact Page"
    ]);
});

