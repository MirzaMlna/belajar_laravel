<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});
Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});
Route::get('/blog', function () {
    return view('blog/blog_view', ["title" => "Blog"]);
});
Route::get('/contact', function () {
    return view('contact/contact_view', ["title" => "Contact"]);
});
