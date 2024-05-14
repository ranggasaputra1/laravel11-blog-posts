<?php


use App\Models\Post;
use Spatie\FlareClient\View;
use Illuminate\Support\Facades\Route;


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
        "posts" => Post::all()
    ]);
});

Route::get('/posts/{post:slug}', function(Post $post){
        return view('post', ['title'=> 'Singe Post', 'header' => 'Single Post', 'post' => $post]);
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

