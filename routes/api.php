<?php

use Illuminate\Http\Request;
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

Route::post('/announcements/create','AnnouncementController@create');
Route::post('/posts/create','PostController@create');

Route::get('/announcements', 'AnnouncementController@retrieve');
Route::get('/posts', 'PostController@retrieve');

Route::put('/announcements/{announcement}', 'AnnouncementController@update');
Route::put('/posts/{post}', 'PostController@update');

Route::delete('/announcements/{announcement}', 'AnnouncementController@delete');
Route::delete('/posts/{post}', 'PostController@delete');

Route::get('/posts/get/{number}', 'PostController@get');
Route::get('/posts/more/{id}', 'PostController@more');
Route::get('/posts/count', 'PostController@count');