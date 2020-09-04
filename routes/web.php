<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['register' => false]);

Route::get('/', 'PostController@index')->name('post.index');
Route::get('/{post}', 'PostController@show')->name('post.show');
Route::get('/post/create', 'AdminController@create')->name('post.create');
Route::post('/post/store', 'AdminController@store')->name('post.store');
Route::post('/posts/{post}/comments', 'CommentController@store')->name('comment.store');

Route::get('/tag/{tag}', 'PostController@showByTag')->name('tag.show');

