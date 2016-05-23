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
		$arts = DB::table('tblProduct')
		//->leftjoin('tblUser', 'tblUser.intId', '=', 'tblProduct.intUserId')
		->orderBy('created_at', 'asc')
		->take(6)
		->get();

		return View::make('layouts/home')->with('arts',$arts);
	}

	public function doLogin()
	{	
		$id = DB::table('tblAccount')
		->distinct()
		->where('strUserEmail', '=', Request::input('form-username'))
		->where('strUserPassword', '=', Request::input('form-password'))
		->first();

		$user = DB::table('tblUser')
		->distinct()
		->where('intId', '=', $id->intId)
		->first();


		if($id->intId == 2)
		{
		Session::put('id', $id->intId);
		Session::put('name', $user->strPenName);
		return Redirect::to('artist-home');
		}
		else if($id->intId == 1)
		{
		Session::put('id', $id->intId);
		Session::put('name', $user->strName);
		return Redirect::to('admin-home');
		}
		else
			return Redirect::to('/');
	}

	public function doLogout()
	{
		Session::flush();
		return Redirect::to('/');
	}

	public function signUp()
	{
		Session::flush();
		return Redirect::to('/');
	}

	public function artistHome()
	{
		$arts = DB::table('tblProduct')
		->where('intUserId', '=', Session::get('id'))
		->orderBy('created_at', 'asc')
		->take(6)
		->get();

		return View::make('layouts/artist/artist-home')->with('arts',$arts);
	}

	public function artistProfile()
	{
		$user = DB::table('tblUser')
		->leftjoin('tblAccount', 'tblUser.intId', '=', 'tblAccount.intId')
		->where('tblUser.intId', '=', Session::get('id'))
		->first();

		return View::make('layouts/artist/artist-profile')->with('user',$user);
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
		$arts = DB::table('tblProduct')
		->where('intUserId', '=', Session::get('id'))
		->get();
		
		return View::make('layouts/artist/artist-artworks')->with('arts',$arts);
	}

	public function artistAddToCart()
	{
		return View::make('layouts/artist/artist-addtocart');
	}

	public function artistSubmitArt()
	{
		return View::make('layouts/artist/artist-submitart');
	}

	public function artistOrders()
	{
		return View::make('layouts/artist/artist-orders');
	}

	public function adminHome()
	{
		return View::make('layouts/admin/admin-home');
	}

	public function adminArtistAccounts()
	{
		return View::make('layouts/admin/admin-artistaccounts');
	}

}
