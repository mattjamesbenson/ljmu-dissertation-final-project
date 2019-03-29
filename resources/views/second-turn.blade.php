@extends('home')

@section('content')
	<h1>Experiment 2</h1>

	<p>Second part of the experiment is about to be started. Please attempt to complete the same task one more time.</p>

	<hr>

	<a href="{{ route('home-second') }}">
		<button class="btn btn-primary">Enter E-commerce Web App</button>
	</a>
@endsection
