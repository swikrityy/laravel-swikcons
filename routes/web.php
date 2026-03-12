<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/aboutus', function () {
    return view('aboutus.index');
});
Route::get('/home', function () {
    return view('home.index');
});
Route::get('/blog', function () {
    return view('blog.index');
});
Route::get('/review', function () {
    return view('review.index');
});
Route::get('/studyabroad', function () {
    return view('Studyabroad.index');
});
Route::get('/testprep', function () {
    return view('testprep.index');
});
Route::get('/university', function () {
    return view('university.index');
});
