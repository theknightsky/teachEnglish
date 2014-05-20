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

Route::get('{name}/reports', function($name){

	// $newReport = Report::create(array(
	// 	'name' => 'Yuki',
	// 	'overview' => 'We had another really fun conversation today Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, quae delectus earum rerum mollitia blanditiis vero sint aliquam exercitationem ut et ratione assumenda aspernatur. Illo totam animi itaque sapiente omnis.',
	// 	'vocab' => 'Ambidextrious: to be able to use both hands with ease--Demographic: Your target audience--Enunciate: to pronounce words clearly--Example: blah blah balh',
	// 	'phrases' => 'Thats dope: to be cool, awesome, or exciting--Thats bullshit: A phrase that is used to say somone is lying, the same as "thats a lie!"'
	// 	));

	// $report = Report::find(5);
	// $report->delete();

		$reports = Report::where('name', '=', $name)->get();
		$report = $reports->first()->name;

		foreach ($reports as $singleReport) {
			$stringVocab = $singleReport->vocab;
			$singleReport->vocab = explode('--', $stringVocab);
			$stringPhrases = $singleReport->phrases;
			$singleReport->phrases = explode('--', $stringPhrases);
		}
		// Carbon::createFromFormat('d/m/Y', $date)->diffForHumans();
		return View::make('report', array('reports' => $reports));
});
