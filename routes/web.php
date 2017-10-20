<?php

Route::get('/', 'HomeController@index');
Route::get('/posts', 'PostController@index');
Route::get('/announcements', 'AnnouncementController@index');
Route::get('post/{post}', 'PostController@show')->name('show');
Route::get('announcements/{announcement}', 'AnnouncementController@show')->name('show');


Route::get('/news', function () {
    return view('application.Posts');
});
Route::get('/news/useful-information/', function () {
    return view('news.useful-information');
});


Route::get('/science', function () {
    return view('application.science');
});


Route::get('/science/postgraduate/', function () {
    return view('science.postgraduate');
});


Route::get('/science/rsuherald/', function () {
    return view('science.rsuherald');
});


Route::get('/science/students-work/', function () {
    return view('science.students-work');
});


Route::get('/science/scientific-events/', function () {
    return view('science.scientific-events');
});


Route::get('/forstudents', function () {
    return view('application.forstudents');
});

Route::get('/forstudents/graduates', function () {
    return view('forstudents.graduates');
});
Route::get('/forstudents/welcome', function () {
    return view('forstudents.welcome');
});
Route::get('/forstudents/timetable', function () {
    return view('forstudents.timetable');
});
Route::get('/forstudents/work-with-students', function () {
    return view('forstudents.work-with-students');
});

Route::get('/forstudents/library', function () {
    return view('forstudents.library');
});


Route::get('/forapplicant', function () {
    return view('application.applicant');
});
Route::get('/forapplicant/campaign', function () {
    return view('forapplicant.campaign');
});
Route::get('/forapplicant/opendays', function () {
    return view('forapplicant.opendays');
});
Route::get('/forapplicant/the-address-of-the-director', function () {
    return view('forapplicant.the-address-of-the-director');
});


Route::get('/education', function () {
    return view('application.education');
});
Route::get('/education/faculty', function () {
    return view('education.faculty');
});
Route::get('/education/info-appl', function () {
    return view('education.info-appl');
});
Route::get('/education/infosec', function () {
    return view('education.infosec');
});
Route::get('/education/math-appl', function () {
    return view('education.math-appl');
});


Route::get('/about', function () {
    return view('about.index');
});
Route::get('/about/management', function () {
    return view('about.management');
});
Route::get('/about/history', function () {
    return view('about.history');
});
Route::get('/about/contacts', function () {
    return view('about.contacts');
});
Route::get('/about/structure', function () {
    return view('about.structure');
});

