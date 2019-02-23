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

Route::get('/', 'PagesController@index');

Route::get('/ratings', function() {
    return view('pages.ratings');
});

Route::get('/signup', function() {
    return view('pages.signup');
});

Route::get('/user/{id}', function($id) {
    return view('pages.user');
});

