<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about', [
        'nama' => 'Rangga Saputra',
        'alamat' => 'bandung',
    ]);
});

Route::get('/blog', function(){
    return view('blog', [
        'title' => 'Article',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, quasi repellendus. Ut ipsa enim inventore
        voluptate nam sint fuga minima, repudiandae necessitatibus qui quaerat! Aut.'
    ]);
});

Route::get('contact', function(){
    return view('contact', [
        'email' => "rangga@gmail.com",
        'social_media' => 'https://github.com/ranggasaputra1'
    ]);
});

