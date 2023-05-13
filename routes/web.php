<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/get/post', 'PostController@post');
Route::get('/api/get/postcomment', 'PostController@postcomment');
Route::post('/api/posts', 'PostController@store');
Route::post('/api/posts/comments', 'CommentController@store');
