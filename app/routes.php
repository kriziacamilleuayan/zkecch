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
Route::post('login', 'HomeController@doLogin');
Route::post('sign-up', 'HomeController@signUp');
Route::get('logout', 'HomeController@doLogout');


Route::group(['before' => 'login'], function() {
	
	//artist
	Route::get('/artist-home', 'HomeController@artistHome');
	Route::get('/artist-profile', 'HomeController@artistProfile');
	Route::get('/artist-edit-profile', 'HomeController@artistEditProfile');
	Route::get('/artist-account', 'HomeController@artistAccount');

	//admin
	Route::get('/admin-home', 'HomeController@adminHome');
});