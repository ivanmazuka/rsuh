<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/post/{post}', 'PostController@show')
    ->name('posts');
Route::get('/announcement/{announcement}', 'AnnouncementController@show')
    ->name('announcements');


// Об институте.
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


// Образование.
Route::get('/education', function () {
    return redirect('/education/faculty');
});
Route::get('/education/faculty', function () {
    return view('education.faculty');
})->name('faculty');
Route::get('/education/informatics', function () {
    return view('education.informatics');
})->name('informatics');
Route::get('/education/security', function () {
    return view('education.security');
})->name('security');
Route::get('/education/maths', function () {
    return view('education.maths');
})->name('maths');


// Поступающим.
Route::get('/applicants', function () {
    return view('applicants.index');
})->name('applicants');
Route::get('/applicants/campaign', function () {
    return view('applicants.campaign');
})->name('campaign');
Route::get('/applicants/opendays', function () {
    return view('applicants.opendays');
})->name('opendays');
Route::get('/applicants/address', function () {
    return view('applicants.address');
})->name('address');


// Студентам
Route::get('/students', function () {
    return redirect('/students/timetable');
})->name('students');

Route::get('/students/timetable', function () {
    return view('students.timetable');
})->name('timetable');

Route::get('/students/graduates', function () {
    $description = 'Вся информация для студентов-выпускников: контрольные вопросы,
    образцы форм для выпускной квалификационной работы, методические рекомендации.';

    $description = preg_replace("/\r|\n/", '', $description);

    return view('students.graduates', compact('description'));
})->name('graduates');

Route::get('/students/welcome', function () {
    return view('students.welcome');
})->name('welcome');

Route::get('/students/work', function () {
    return view('students.work');
})->name('work');

Route::get('/students/library', function () {
    return view('students.library');
})->name('library');


// Наука.
Route::get('/science', function () {
    return redirect('/science/postgraduate');
});
Route::get('/science/postgraduate', function () {
    return view('science.postgraduate');
})->name('postgraduate');
Route::get('/science/herald/', function () {
    return view('science.herald');
})->name('herald');
Route::get('/science/jobs', function () {
    return view('science.jobs');
})->name('jobs');


// Информация.
Route::get('/news', function () {
    return redirect('/news/posts');
});
Route::get('/news/posts', function () {
    return view('news.posts');
})->name('posts');
Route::get('/news/announcements', function () {
    return view('news.announcements');
})->name('announcements');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
