@extends('dashboardMaster')

@section('page-title')
	View User
@stop

@section('stylesheets')
	<link href="/teachEnglish/public/assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/teachEnglish/public/assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
	<link href="/teachEnglish/public/assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
	<link href="/teachEnglish/public/assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
	<link href="/teachEnglish/public/assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">
@stop

@section('nav-li')
	<li class="mm-dropdown">
		<a href="feedback"><i class="menu-icon fa fa-bar-chart-o"></i><span class="mm-text">Feedback</span></a>
		<ul>
			<li class="active">
				<a tabindex="-1" href="{{$feedback->id}}"><i class="menu-icon fa fa-archive"></i><span class="mm-text">View reports</span></a>
			</li>
			<li>
				<a tabindex="-1" href="#"><i class="menu-icon fa fa-heart"></i><span class="mm-text">Give feedback</span></a>
			</li>
		</ul>
	</li>
	<li>
		<a href="settings"><i class="menu-icon fa fa-group"></i><span class="mm-text">Manage Users</span></a>
	</li>
@stop

@section('breadcrumb-li')
	<li><a href="#">Home</a></li>
	<li><a href="#">Admin Feedback</a></li>
	<li class="active"><a href="#">{{$feedback->id}}</a></li>
@stop

@section('page-header')
<i class="fa fa-archive page-header-icon"></i> 
Feedback Report #{{$feedback->id}}
@stop

@section('content')
<div class="row">
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="panel-title-icon fa fa-calendar"></i>
				<span class="panel-title">{{date_format($feedback->created_at, 'M d, Y')}}
					- {{$student->username}}</span>
				<div class="panel-heading-controls">
					<a href="{{$feedback->id}}/edit" class="btn btn-xs btn-info"><i class="fa fa-pencil"> Edit</i></a>
					<button class="btn btn-xs btn-danger"><i class="fa fa-times"> Delete</i></button>
				</div>
			</div>
			<div class="panel-body">
				<h4> Lesson Overview: </h4>
				<p>{{$feedback->overview}}</p>
				<hr>
				<h4>Vocabulary:</h4>
				<ul>
					@foreach($feedback->vocab as $word)
						<li>{{$word}}</li>
					@endforeach
				</ul>
				<hr>
				<h4>Phrases:</h4>
				<ul>
					@foreach($feedback->phrases as $phrase)
						<li>{{$phrase}}</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="panel-title-icon fa fa-info-circle"></i>
				<span class="panel-title">Student Information</span>
			</div>
			<div class="panel-body">
				<label>Student:</label>
				<p>{{$student->firstname}} {{$student->lastname}}</p>
				<label>Username:</label>
				<p>{{$student->username}}</p>
				<label>Goals:</label>
				<p>{{$student->goals}}</p>
			</div>
		</div>
	</div>
</div>
@stop