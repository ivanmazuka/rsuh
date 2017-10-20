<?php

Route::get('/', 'HomeController@index');
Route::get('/posts','PostController@index');
Route::get('/announcements','AnnouncementController@index');
Route::get('/about','AboutController@index');
Route::get('/education','EducationController@index');
Route::get('/forapplicant','ApplicantController@index');
Route::get('/forstudents','ForStudentsController@index');
Route::get('/science','ScienceController@index');
Route::get('/info','InformationController@index');
Route::get('post/{post}', 'PostController@show')->name('show');
Route::get('announcements/{announcement}', 'AnnouncementController@show')->name('show');
