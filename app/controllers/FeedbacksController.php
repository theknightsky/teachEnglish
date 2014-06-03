<?php

class FeedbacksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::check()){
			if(Auth::user()->role == 'admin'){
				$users = User::all();
				return View::make('feedbacks.index', array('user'=>Auth::user(), 'users'=>$users));
			}else{
				return Redirect::to('users/'.Auth::user()->username.'/feedback');
			}
		}else{
			return Redirect::to('login');
		}
		//
	// $newReport = Feedback::create(array(
	// 	'name' => Auth::user()->username,
	// 	'user_id' => Auth::user()->id,
	// 	'overview' => 'We had another really fun conversation today Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, quae delectus earum rerum mollitia blanditiis vero sint aliquam exercitationem ut et ratione assumenda aspernatur. Illo totam animi itaque sapiente omnis.',
	// 	'vocab' => 'Ambidextrious: to be able to use both hands with ease--Demographic: Your target audience--Enunciate: to pronounce words clearly--Example: blah blah balh',
	// 	'phrases' => 'Thats dope: to be cool, awesome, or exciting--Thats bullshit: A phrase that is used to say somone is lying, the same as "thats a lie!"'
	// 	));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$feedback = Feedback::where('id', '=', $id)->first();
		$student = User::find($feedback->user_id);
		$user = Auth::user();

		$feedback->vocab = explode('--', $feedback->vocab);
		$feedback->phrases = explode('--', $feedback->phrases);

		return View::make('feedbacks.show', array('user'=>$user,'feedback'=> $feedback, 'student'=>$student));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$feedback = Feedback::where('id', '=', $id)->first();
		$student = User::find($feedback->user_id);
		$user = Auth::user();

		$feedback->vocab = explode('--', $feedback->vocab);
		$feedback->phrases = explode('--', $feedback->phrases);


		return View::make('feedbacks.edit', array('user'=>$user,'feedback'=> $feedback, 'student'=>$student));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$feedback = Feedback::Find($id);
		$student = User::find($feedback->user_id);
		$user = Auth::user();

		$overview = Input::get('overview');
		$vocab = str_replace("\r", '--', Input::get('vocab'));
		$phrases = str_replace("\r", '--', Input::get('phrases'));

		$feedback->overview = $overview;
		$feedback->vocab = $vocab;
		$feedback->phrases = $phrases;

		$feedback->save();

		$feedback->vocab = explode('--', $feedback->vocab);
		$feedback->phrases = explode('--', $feedback->phrases);

		return View::make('feedbacks.show', array('user'=>$user,'feedback'=> $feedback, 'student'=>$student));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}