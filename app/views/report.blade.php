@extends('master')

@section('title')
Report Template
@endsection

@section('styles')
<link rel="stylesheet" href="../stylesheets/bootstrap.yeti.css">
<link rel="stylesheet" href="../stylesheets/main-styles.css">
@endsection

@section('content')

<div class="container">
	@foreach ($reports as $report)
	<h1>{{date_format($report->created_at, 'Y-m-d')}}</h1>
	<h4 class="text-success">Lesson Overview:</h4>
	<p>{{$report->overview}}</p>

	<!-- Separate vocabulary -->
	<h4 class="text-success">Vocabulary:</h4>
	<ul>
		@foreach($report->vocab as $word)
			<li>{{$word}}</li>
		@endforeach
	</ul>

@if($report->phrases)
	<h4 class="text-success">Phrases:</h4>
	<ul>
	@foreach($report->phrases as $phrase)
		<li>{{$phrase}}</li>
	@endforeach
	</ul>

@endif
	@endforeach

{{-- 	<ul>
		@foreach ($vocab as $word)
			<li>{{$word}}</li>
		@endforeach
	</ul>
 --}}
</div>

@endsection


@section('scripts')
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
@endsection