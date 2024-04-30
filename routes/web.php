<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

Route::get('/', function () {
    return view('home', [
        "title" => "Home Page",
        "header" => "Home Page"
    ]);
});

Route::get('/blog', function(){
    return view('blog', [
        'title' => 'Blog',
        "header" => "Blog Page"
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

