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
Route::get('/create', 'BlogController@create');
Route::get('/edit/{id}', 'BlogController@edit')->where('id', '[0-9]+');
Route::post('/update/{id}', 'BlogController@update')->where('id', '[0-9]+');
Route::post('/store', 'BlogController@store');
Route::get('/show/{id}', 'BlogController@show')->where('id', '[0-9]+');
Auth::routes();
Route::get('/home', 'BlogController@index')->name('home');
