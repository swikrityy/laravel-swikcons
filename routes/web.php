<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home.index');
// });
// Route::get('/aboutus', function () {
//     return view('aboutus.index');
// });
// Route::get('/home', function () {
//     return view('home.index');
// });
// Route::get('/blogs', function () {
//     return view('blog.index');
// });
// Route::get('/review', function () {
//     return view('review.index');
// });
// Route::get('/studyabroad', function () {
//     return view('Studyabroad.index');
// });
// Route::get('/testprep', function () {
//     return view('testprep.index');
// });
// Route::get('/university', function () {
//     return view('university.index');
// });
// Route::get('/gallerys', function () {
//     return view('gallery.index');
// });
// Route::get('/contact', function () {
//     return view('contact.index');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
// Route::get('/dash', function () {
//     return view('dash');
// });
Route::get('/',[NewController::class,'home']);
Route::get('/display',[NewController::class,'display'])->name('display');
Route::get('/blogs', [NewController::class,'blogs'])->name('blogs');
Route::get('/home',[NewController::class,'home'])->name('home');
Route::get('/Studyabroad',[NewController::class,'Studyabroad'])->name('Studyabroad');
Route::resource('blog', CrudController::class);
Route::get('/admin/dashboard',[NewController::class,'dashboard']);
