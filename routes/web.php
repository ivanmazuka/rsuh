<?php

Route::get('/', 'HomeController@index');
Route::get('/posts','PostController@index');
Route::get('/announcements','AnnouncementController@index');
