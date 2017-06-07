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

Route::get('/', 'BlogController@index');
Route::get('/show/{id}', 'BlogController@show')->where('id', '[0-9]+');
Route::get('auth/login', 'FrontController@login');
Route::post('auth/login', 'FrontController@authenticate');
Route::get('auth/logout', 'FrontController@logout');
Auth::routes();

Route::get('/home', 'BlogController@index')->name('home');
