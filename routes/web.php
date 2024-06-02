<?php

use App\Models\Post;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});
Route::get('/posts', function () {
    return view('posts/posts_view', [
        "title" => "Blog",
        'posts' => Post::all(),
    ]);
});


Route::get('/post/{post:slug}', function (Post $post) {

    return view(
        'posts/post_view',
        [
            'title' => 'Single Post',
            'post' => $post,
        ]
    );
});

Route::get('/contact', function () {
    return view('contact/contact_view', ["title" => "Contact"]);
});
