@extends('home')

@section('content')
	<h1>Experiment 2</h1>

	<hr>

	<p>Second part of the experiment is about to be started. Please attempt to complete the same task one more time.</p>

	<div class="col-md-12 text-center">
		<a href="{{ route('home-second') }}">
			<button class="btn btn-primary">Let's go again!</button>
		</a>
	</div>
@endsection
