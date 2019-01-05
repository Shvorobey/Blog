<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('index', ['posts' => \App\Post::paginate (5)]);
})->name('main');

Route::get('/about', function () {

    return view('about', ['page' => \App\Pages::where('key', '=', 'about')->first()]);
})->name('about');

Route::get('/contact', function () {
    return view('contact', ['page' => \App\Pages::where('key', '=', 'contact')->first()]);
})->name('contact');

Route::get('/autor/{key}', function ($key) {
    $autor = \App\Autors::where('key', '=',  $key)->first();
    return view('posts_by_autor', ['autor' => $autor] );
})->name('posts_by_autor');

Route::get('/category/{key}', function ($key) {
    $category = \App\Categories::where('key', '=', $key)->first();
    return view('posts_by_category', ['category' => $category]);
})->name('posts_by_category');