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
		{{ Form::open(array('method'=>'put', 'class'=>'panel panel-default form-horizontal', 'action'=> array('FeedbacksController@update', $feedback->id)))}}
			<div class="panel-heading">
				<i class="panel-title-icon fa fa-calendar"></i>
				<span class="panel-title">{{date_format($feedback->created_at, 'M d, Y')}}
					- {{$student->username}}</span>
				<div class="panel-heading-controls">
					<!-- {{ Form::submit('Save', array('class'=>'btn btn-xs btn-success'))}} -->
					<button type="submit" class="btn btn-xs btn-success"><i class="fa fa-save"> Save</i></button>
				</div>
			</div>
			<div class="panel-body">
				<div class="form-group no-margin-hr">
					<h4>{{ Form::label('overview','Lesson Overview:')}}</h4>
					{{ Form::textarea('overview', $feedback->overview, array('class'=>'form-control'))}}
				</div>
				<hr>
				<div class="form-group no-margin-hr">
					<h4>{{ Form::label('vocab','Vocabulary:')}}</h4>
					<textarea name="vocab" id="vocab" cols="30" rows="10" class="form-control">
@foreach($feedback->vocab as $word)
{{$word}}
@endforeach
					</textarea>
				</div>
				<hr>
				<div class="form-group no-margin-hr">
					<h4>{{ Form::label('phrases','Phrases:')}}</h4>
					<textarea name="phrases" id="phrases" cols="30" rows="10" class="form-control">
@foreach($feedback->phrases as $phrase)
{{$phrase}}
@endforeach
					</textarea>
				</div>
			</div>		
		{{ Form::close()}}
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