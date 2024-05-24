<?php


use App\Models\Post;
use App\Models\User;
use Spatie\FlareClient\View;
use Illuminate\Support\Facades\Route;

// Route Index
Route::get('/', function () {
    return view('home', [
        "title" => "Home Page",
        "header" => "Home Page"
    ]);
});

// Route Post Page
Route::get('/posts', function(){
    return view('posts', [
        'title' => 'Blog',
        "header" => "Blog Page",
        "posts" => Post::all()
    ]);
});

// Route Single Post
Route::get('/posts/{post:slug}', function(Post $post){
        return view('post', ['title'=> 'Single Post ', 'header' => 'Article By ' .$post->author->name, 'post' => $post]);
});

// Route Author to All Post
Route::get('/authors/{user}', function(User $user){
    return view('posts', ['title'=> 'Blog', 'header' => 'Articles By ' .$user->name, 'posts' => $user->posts]);
});

// Route About
Route::get('/about', function(){
    return view('about', [
        'title' => 'About',
        "header" => "Header Page",
        "name" => "Rangga Saputra"
    ]);
});

// Route Contact
Route::get('contact', function(){
    return view('contact', [
        "title" => "Contact",
        "header" => "Contact Page"
    ]);
});

