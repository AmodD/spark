<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});
Route::get('/about', function () {
    return view('perspective');
});
Route::get('/perspective', function () {
    return view('perspective');
});
Route::get('/organization-details', function () {
    return view('org-details');
});
Route::get('/media', function () {
    return view('media');
});
Route::get('/projects', function () {
    return view('projects-2017');
});
Route::get('/projects-2018', function () {
    return view('projects-2018');
});
Route::get('/projects-2017', function () {
    return view('projects-2017');
});
Route::get('/projects-2016', function () {
    return view('projects-2016');
});
Route::get('/board', function () {
    return view('board');
});
Route::get('/gallery', function () {
    return view('gallery');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
