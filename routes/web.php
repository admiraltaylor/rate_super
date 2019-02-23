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
Route::get('/ratings', 'PagesController@ratings');
Route::get('/signup', 'PagesController@signup');
Route::get('/user/{id}', 'PagesController@user');
Route::get('/login', 'PagesController@login');

