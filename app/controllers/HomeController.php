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
		->orderBy('created_at', 'desc')
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


		if($user->intUserType == 2)
		{
		Session::put('id', $user->intId);
		Session::put('name', $user->strPenName);
		return Redirect::to('artist-home');
		}
		else if($user->intUserType == 1)
		{
		Session::put('id', $user->intId);
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
		DB::table('tblUser')
		->insert(
			[
				'intUserType'		=> 2,
				'strName'			=> Request::input('form-firstname'),
				'strPenName'		=>  Request::input('form-lastname'),
				'intStatusId'		=> 1,
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

		DB::table('tblAccount')
		->insert(
			[
				'strUserEmail'		=> Request::input('form-username'),
				'strUserPassword'	=> Request::input('form-password'),
				'created_at'		=> date('Y-m-d H:i:s')
			]
		);

		return Redirect::to('/');
	}

	public function artistHome()
	{
		$arts = DB::table('tblProduct')
		->where('intUserId', '=', Session::get('id'))
		->orderBy('created_at', 'desc')
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
		$user = DB::table('tblUser')
		->leftjoin('tblAccount', 'tblUser.intId', '=', 'tblAccount.intId')
		->where('tblUser.intId', '=', Session::get('id'))
		->first();

		return View::make('layouts/artist/artist-edit-profile')->with('user',$user);
	}

	public function saveProfile()
	{
 if(Input::hasFile('user_image_input')) {
 			Input::file('user_image_input')->move(public_path() . '/img/',
 						trim(Request::input('penname')));

 			DB::table('tblUser')
 			->where('intId', Session::get('id'))
 			->update([
 				'strName' => trim(Request::input('name')),
 				'strPenName' => trim(Request::input('penname')),
 				'strContactNumber' => trim(Request::input('contactnumber')),
 				'strDescription' => trim(Request::input('description')),
 				'strWebsite'	=>  trim(Request::input('website')),
 				'strImagePath'	=> '/img/' . trim(Request::input('penname')),
 				'updated_at' => date('Y-m-d H:i:s')
 			]);

 			Session::put('image', 'uploaded_images/teachers/' . trim(Request::input('stud_id_no')));
 		} else{
 			DB::table('tblUser')
 			->where('intId', Session::get('id'))
 			->update([
 				'strName' => trim(Request::input('name')),
 				'strPenName' => trim(Request::input('penname')),
 				'strContactNumber' => trim(Request::input('contactnumber')),
 				'strDescription' => trim(Request::input('description')),
 				'strWebsite'	=>  trim(Request::input('website')),
 				'updated_at' => date('Y-m-d H:i:s')
 			]);
 		}

 		Session::put('name', trim(Request::input('penname')));
 		return Redirect::to('artist-profile');
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

	public function submitArtworks()
	{
		Input::file('user_image_input')->move(public_path() . '/img/',
 						trim(Request::input('name')));

		 DB::table('tblProduct')
		 ->insert(
		 	[
		 		'intUserId'		=> Session::get('id'),
		 		'strName'	=> Request::input('name'),
		 		'strDescription'		=> Request::input('description'),
		 		'strYearCreated'	=> Request::input('date'),
		 		'strImagePath'		=> '/img/' . trim(Request::input('name')),
		 		'intStatusId'		=> Request::input('status'),
		 		'intCategory'		=> Request::input('category'),
		 		'created_at'		=> date('Y-m-d H:i:s')
		 	]
		 );

		return Redirect::to('/artist-artworks');
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





//ADMIN
	public function adminHome()
	{
		return View::make('layouts/admin/admin-home');
	}

	public function adminArtistAccounts()
	{
		$users = DB::table('tblUser')
		->leftjoin('tblAccount', 'tblUser.intId', '=', 'tblAccount.intId')
		->where('intUserType', '=', 2)
		->get();

		return View::make('layouts/admin/admin-artistaccounts')->with('users',$users);
	}

	public function adminArtworks()
	{
		return View::make('layouts/admin/admin-artworks');
	}


	public function adminProfile()
	{
		return View::make('layouts/admin/admin-profile');
	}

}

