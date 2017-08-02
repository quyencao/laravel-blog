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

Route::get('/', 'PostController@index')->name('blog.post.index');

Route::get('/blog/details/{id}', 'PostController@show')->name('blog.post.show');

Route::get('/blog/tag/{id}', 'PostController@getPostsTag')->name('blog.post.tag');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
