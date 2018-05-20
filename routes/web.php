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
    return view('welcome');
});


Route::get('/posts', function () {
    $posts = App\Post::all();
    return view('posts.index', compact('posts'));
});

Route::get('/posts/{id}', function ($id) {
    $post = App\Post::find($id);
    return view('posts.show', compact('post'));
});


Route::get('/api/posts', function () {
    return App\Post::all();
});


Route::get('/api/posts/{id}', function ($id) {
    $post = DB::table('posts')->find($id);
    dd($post);
});
