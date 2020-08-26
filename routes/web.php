<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/', 'PostController@index');
Route::get('/{post}', 'PostController@show')->name('post.show');
Route::post('/posts/{post}/comments', 'CommentController@store')->name('comment.store');

Route::get('/tagged/{tag}', 'PostController@showByTag')->name('tag.show');

Route::get('/home', 'HomeController@index')->name('home');
