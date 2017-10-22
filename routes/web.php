<?php

Route::get('/', 'HomeController@index');
Route::get('/news/posts', 'PostController@index')->name('posts');
Route::get('/news/announcements', 'AnnouncementController@index')->name('annouces');
Route::get('/news/post/{post}', 'PostController@show')->name('show');
Route::get('/news/announcements/{announcement}', 'AnnouncementController@show')->name('show');


Route::get('/news', function () {
    return view('application.Posts');
})->name('posts');
Route::get('/news/useful-information/', function () {
     return view('news.useful-information' );
})->name('useful-information');


Route::get('/science', function () {
    return view('application.science');
});


Route::get('/science/postgraduate/', function () {
    return view('science.postgraduate');
})->name('postgraduate');


Route::get('/science/rsuherald/', function () {
    return view('science.rsuherald');
})->name('rsuherald');


Route::get('/science/students-work/', function () {
    return view('science.students-work');
})->name('students-work');


Route::get('/science/scientific-events/', function () {
    return view('science.scientific-events');
})->name('scientific-events');


Route::get('/forstudents', function () {
    return view('application.forstudents');
})->name('forstudents');

Route::get('/forstudents/graduates', function () {
    return view('forstudents.graduates');
})->name('graduates');
Route::get('/forstudents/welcome', function () {
    return view('forstudents.welcome');
})->name('welcome');
Route::get('/forstudents/timetable', function () {
    return view('forstudents.timetable');
})->name('timetable');
Route::get('/forstudents/work-with-students', function () {
    return view('forstudents.work-with-students');
})->name('work-with-students');

Route::get('/forstudents/library', function () {
    return view('forstudents.library');
})->name('library');


Route::get('/forapplicant', function () {
    return view('application.applicant');
})->name('applicant');
Route::get('/forapplicant/campaign', function () {
    return view('forapplicant.campaign');
})->name('campaign');
Route::get('/forapplicant/opendays', function () {
    return view('forapplicant.opendays');
})->name('opendays');
Route::get('/forapplicant/the-address-of-the-director', function () {
    return view('forapplicant.the-address-of-the-director');
})->name('the-address-of-the-director');


Route::get('/education', function () {
    return view('application.education');
})->name('education');
Route::get('/education/faculty', function () {
    return view('education.faculty');
})->name('faculty');
Route::get('/education/info-appl', function () {
    return view('education.info-appl');
})->name('info-appl');
Route::get('/education/infosec', function () {
    return view('education.infosec');
})->name('infosec');
Route::get('/education/math-appl', function () {
    return view('education.math-appl');
})->name('math-appl');;


Route::get('/about', function () {
    return view('about.index');
})->name('about');
Route::get('/about/management', function () {
    return view('about.management');
})->name('management');
Route::get('/about/history', function () {
    return view('about.history');
})->name('history');
Route::get('/about/contacts', function () {
    return view('about.contacts');
})->name('contacts');
Route::get('/about/structure', function () {
    return view('about.structure');
})->name('structure');

