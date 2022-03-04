<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserEloquent;
use App\Models\Article;

class UserController extends Controller
{
	/**
	 * Show the signin page
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function signin( Request $request )
	{
		if($request->session()->get('user') != null){
			return redirect()->route('account');
		} else {
			return view('signin')->with('message',$request->session()->get('message'));
		}
	}

	/**
	 * Show the signup page
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function signup( Request $request )
	{
		return view('signup')
			->with('message',$request->session()->get('message'));
	}

	/**
	 * Show the formpassword page
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function formPassword( Request $request )
	{
		return view('formpassword')
			->with('message',$request->session()->get('message'));
	}

	/**
	 * Signout
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function signout( Request $request )
	{
		$request->session()->flush();
		return redirect()->route('signin');
	}

	/**
	 * Show the account page
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function account( Request $request )
	{
		return view('account')
			->with('user',$request->session()->get('user'))
			->with('message',$request->session()->get('message'));
	}

	/**
	 * Authentication
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function authenticate( Request $request )
	{
		if ( !$request->filled(['login','password']) )
			return redirect()->route('signin')->with('message','Some POST data are missing.');

		try
		{
			$user = UserEloquent::where('login',$request->login)->firstOrFail();
		}
		catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e)
		{
			return redirect()->route('signin')->with('message','Wrong login.');
		}

		if ( !Hash::check($request->password,$user->password) )
			return redirect()->route('signin')->with('message','Wrong password.');

		$request->session()->put('user',$user);
		return redirect()->route('account');
	}


	/**
	 * Add a user
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function add( Request $request )
	{
		if ( !$request->filled(['login','password','confirm']) )
			return redirect()->route('signup')->with('message','Some POST data are missing.');

		if ( $request->password !== $request->confirm )
			return redirect()->route('signup')->with('message','Error: the two passwords differ. Try again.');

		$user = new UserEloquent;
		$user->login = $request->login;
		$user->password = Hash::make($request->password);
		$user->admin = false;

		try
		{
			$user->save();
		}
		catch (\Illuminate\Database\QueryException $e)
		{
			return redirect()->route('signup')
				->with('message','Sorry, this login still exists. Please choose another one.');
		}

		return redirect()->route('signin')->with('message','Account created! Now, signin.');
	}

	/**
	 * Change the user password
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function changePassword( Request $request )
	{
		if ( !$request->filled(['newpassword','confirmpassword']) )
			return redirect()->route('formpassword')->with('message','Some POST data are missing.');

		if ( $request->newpassword != $request->confirmpassword )
			return redirect()->route('formpassword')->with('message','Error: the two passwords differ. Try again.');

		try
		{
			$user = $request->session()->get('user');
			$user->password = Hash::make($request->newpassword);
			$user->save();
		}
		catch (\Illuminate\Database\QueryException $e)
		{
			return redirect()->route('formpassword')->with('message','Error: password changing failed. Try again.');
		}

		return redirect()->route('account')->with('message','Password successfully updated.');
	}

	/**
	 * Delete the logged user
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function delete( Request $request )
	{
		try
		{
			$request->session()->get('user')->delete();
			$article = Article::where('auteur', session()->get('user')->login)->delete();
		}
		catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e)
		{
			return redirect()->route('account')->with('message','Error during deletion. Try again.');
		}

		$request->session()->flush();
		return redirect()->route('signin')->with('message','Account successfully deleted.');
	}
}
