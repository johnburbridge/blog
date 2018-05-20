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
    $posts = DB::table('posts')->get();
    return $posts;
//    return view('posts', compact('posts'));
});


Route::get('/api/posts', function () {
    return DB::table('posts')->get();
});


Route::get('/api/posts/{id}', function ($id) {
    $post = DB::table('posts')->find($id);
    dd($post);
});
