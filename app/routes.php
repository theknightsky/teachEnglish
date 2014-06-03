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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('login', function(){
	// dd(Auth::user()->username);
	return View::make('login');
});

Route::post('login', function(){
	$username = Input::get('signin_username');
	$password = Input::get('signin_password');
	if(Auth::attempt(array('username' => $username, 'password' => $password))){
		$role = Auth::user()->role;
		if($role == 'admin'){
			return Redirect::to('/admin/feedback');
		}else{
			return Redirect::intended('users/' . Auth::user()->username . '/feedback');
		}
	}else{
		return View::make('login');
	}
});

Route::get('logout', function(){
	Auth::logout();

	return Redirect::to('login');
});

Route::resource('admin/users', 'UsersController');

Route::resource('admin/feedback', 'FeedbacksController');

Route::get('users/{name}/feedback', function($name){
	if(Auth::check()){

		$studentReports = Feedback::where('user_id', '=', Auth::user()->id);
		$numLessons = $studentReports->count();
		$reports = $studentReports->paginate(5);
		$report = $reports->first()->name;

		foreach ($reports as $singleReport) {
			$stringVocab = $singleReport->vocab;
			$singleReport->vocab = explode('--', $stringVocab);
			$stringPhrases = $singleReport->phrases;
			$singleReport->phrases = explode('--', $stringPhrases);
		}

		return View::make('feedback', array(
			'user' => Auth::user(),
			'reports' => $reports,
			'numLessons' => $numLessons
			));
	}else{
		return Redirect::to('login');
	}
});

Route::get('users/{name}/settings', function($name){
	if(Auth::check()){
		if(Auth::user()->username == $name){
			$numLessons = Feedback::where('user_id', '=', Auth::user()->id)->count();
			return View::make('settings', array('user'=>Auth::user(), 'numLessons'=>$numLessons));
		}
	}else{
		return Redirect::to('login');
	}
});
