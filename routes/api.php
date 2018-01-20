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



Route::delete('announcements/delete/{announcement}', 'AnnouncementController@delete');
Route::delete('posts/delete/{post}', 'PostController@delete')->name('deletePost');


Route::put('posts/update/{post}', 'PostController@update');
Route::put('announcements/update/{announcement}', 'AnnouncementController@update');

Route::get('announcements', 'AnnouncementController@retrieve');
Route::get('posts', 'PostController@retrieve');

Route::post('posts/create','PostController@create');
Route::post('announcements/create','AnnouncementController@create');