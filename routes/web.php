<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about', [
        'nama' => 'Rangga Saputra'
    ]);
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('contact', function(){
    return view('contact', [
        'email' => "rangga@gmail.com",
        'social_media' => 'https://github.com/ranggasaputra1'
    ]);
});

