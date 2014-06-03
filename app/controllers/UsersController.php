<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//ONLY IF ADMIN

		// $user = User::create([
		// 	'username' => 'ruskymuffin',
		// 	'email' => 'tutorskylerknight@gmail.com',
		// 	'password' => Hash::make('!~Bluesko24299982'),
		// 	'firstname' => 'Skyler',
		// 	'lastname' => 'Knight',
		// 	'goals' => 'help others',
		// 	'role' => 'admin',
		// ]);

		// $user = User::create([
		// 	'username' => 'yuki',
		// 	'email' => 'yukipooh96@gmail.com',
		// 	'password' => Hash::make('yuki'),
		// 	'firstname' => 'Yuki',
		// 	'lastname' => 'Create',
		// 	'goals' => 'Speaking',
		// 	'role' => 'student',
		// ]);

		// $user = User::find(2);
		// $user->username = "yukicreate2";
		// $user->save();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//ONLY IF ADMIN
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//ONLY IF ADMIN
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//ONLY IF ADMIN
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($name)
	{
		if(Auth::check()){
			$user = User::find(Auth::user()->id);
			//USER SETTINGS PAGE
			return View::make('settings', array('user' => $user));
		}else{
			return Redirect::to('login');
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//SAVE THE USER DATA
		$user = User::find($id);
		if(Input::get('updateAccount')){
			$username = Input::get('username');
			$email = Input::get('email');
			$firstname = Input::get('firstname');
			$lastname = Input::get('lastname');
			$goals = Input::get('goals');

			$user->username = $username;
			$user->email = $email;
			$user->firstname = $firstname;
			$user->lastname = $lastname;
			$user->goals = $goals;
		}
		if(Input::get('changePassword')){
			$currentPassword = $user->password;
			$oldPassword = Input::get('oldPassword');
			$newPassword = Input::get('newPassword');
			$repeatNewPassword = Input::get('repeatNewPassword');

			if(Hash::check($oldPassword, $currentPassword)){
				if($newPassword == $repeatNewPassword){
					$user->password = Hash::make($newPassword);
				}else{
					return Redirect::to('users/'.$user->username.'/settings/')->with('not-matching', 'The passwords do not match');
				}
			}else{
				return Redirect::to('users/'.$user->username.'/settings/')->with('wrong-password', 'That is not your current password');
			}
		};
		$user->save();
		
		return Redirect::to('users/'.$user->username.'/settings/')->with('success-message', 'Your account has been successfully updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//DELETE THE USER DATA, ONLY IF ADMIN?
	}

}