<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('layouts/home');
	}

	public function artistHome()
	{
		return View::make('layouts/artist/artist-home');
	}

	public function artistProfile()
	{
		return View::make('layouts/artist/artist-profile');
	}

	public function artistEditProfile()
	{
		return View::make('layouts/artist/artist-edit-profile');
	}

	public function artistAccount()
	{
		return View::make('layouts/artist/artist-account');
	}

	public function artistArtworks()
	{
		return View::make('layouts/artist/artist-artworks');
	}

	public function artistAddToCart()
	{
		return View::make('layouts/artist/artist-addtocart');
	}

	public function artistSubmitArt()
	{
		return View::make('layouts/artist/artist-submitart');
	}

	public function adminHome()
	{
		return View::make('layouts/admin/admin-home');
	}

}
