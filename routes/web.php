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
Route::get('/blogs', function () {
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
Route::get('/gallerys', function () {
    return view('gallery.index');
});
Route::get('/contact', function () {
    return view('contact.index');
});