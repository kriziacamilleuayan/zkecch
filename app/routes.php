<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/artist-home', 'HomeController@artistHome');
Route::get('/artist-profile', 'HomeController@artistProfile');
Route::get('/artist-edit-profile', 'HomeController@artistEditProfile');
Route::get('/artist-account', 'HomeController@artistAccount');

Route::get('/admin-home', 'HomeController@adminHome');