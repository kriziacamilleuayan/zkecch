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
Route::get('browse-artworks', 'HomeController@browseArtworks');
Route::get('add-to-cart', 'HomeController@addToCart');
Route::post('login', 'HomeController@doLogin');
Route::post('sign-up', 'HomeController@signUp');
Route::get('logout', 'HomeController@doLogout');


Route::group(['before' => 'login'], function() {
	
	//artist
	Route::get('/artist-home', 'HomeController@artistHome');
	Route::get('/artist-profile', 'HomeController@artistProfile');
	Route::get('/artist-edit-profile', 'HomeController@artistEditProfile');
	Route::post('/artist-save-edit-profile', 'HomeController@saveProfile');
	Route::get('/artist-account', 'HomeController@artistAccount');
	Route::post('/artist-account','HomeController@submitCredentials');
	Route::get('/artist-artworks', 'HomeController@artistArtworks');
	Route::post('/artist-artworks','HomeController@submitArtworks');
	Route::get('/artist-addtocart', 'HomeController@artistAddToCart');
	Route::get('/artist-submitart', 'HomeController@artistSubmitArt');
	Route::get('/artist-orders', 'HomeController@artistOrders');

	//admin
	Route::get('/admin-home', 'HomeController@adminHome');
	Route::get('/admin-artistaccounts', 'HomeController@adminArtistAccounts');
	Route::get('/admin-artworks', 'HomeController@adminArtworks');
	Route::get('/admin-profile', 'HomeController@adminProfile');
	Route::get('/admin-transaction', 'HomeController@adminTransaction');
});