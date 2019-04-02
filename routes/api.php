<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Posts
Route::get('/posts', 'PostController@retrieve');
Route::get('/posts/get/{number}', 'PostController@get');
Route::get('/posts/more/{id}', 'PostController@more');
Route::get('/posts/count', 'PostController@count');
Route::post('/posts/create', 'PostController@create');
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@delete');

// Announcements
Route::get('/announcements', 'AnnouncementController@retrieve');
Route::get('/announcements/get/{number}', 'AnnouncementController@get');
Route::get('/announcements/more/{date}', 'AnnouncementController@more');
Route::get('/announcements/count', 'AnnouncementController@count');
Route::post('/announcements/create', 'AnnouncementController@create');
Route::put('/announcements/{announcement}', 'AnnouncementController@update');
Route::delete('/announcements/{announcement}', 'AnnouncementController@delete');