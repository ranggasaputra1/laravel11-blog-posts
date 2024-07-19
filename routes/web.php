<?php


use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        "posts" => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(6)->withQueryString()
    ]);
});

// Route Single Post
Route::get('/posts/{post:slug}', function(Post $post){
        return view('post', ['title'=> 'Single Post ', 'header' => 'Article By ' .$post->author->name, 'post' => $post]);
});

// Route Author to All Post
Route::get('/authors/{user:username}', function(User $user){
    // $posts = $user->posts->load('category', 'author');
    return view('posts', ['title'=> 'Blog', 'header' => count($user->posts) . ' Articles By ' .$user->name, 'posts' => $user->posts]);
});

// Route Post to All Category
Route::get('/categories/{category:slug}', function(Category $category){
    // $posts = $category->posts->load('category', 'author');

    return view('posts', ['title'=> 'Blog', 'header' => count($category->posts) . ' Articles in Category:  ' .$category->name, 'posts' => $category->posts]);
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

