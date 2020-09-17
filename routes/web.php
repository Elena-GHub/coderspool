<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('bootcoder', 'BootcoderController');
Route::resource('codersgroup', 'CodersgroupController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');