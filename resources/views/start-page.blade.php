@extends('home')

@section('content')
	<h1>Experiment 1</h1>

	<hr>

	<p>The idea behind this experiment is to find out whether the design of this application is appropiate for the novice user when it comes to completing basic tasks. You will need to 
	Do not worry if you think you have made a mistake.  You have not.  Any mistakes are with the interface and not you.
	They will actually help us to make the interface better.<p>
	<h2>Your main instructions for the first part of the experiment are:<br /><h2>

	<hr>

	<a href="{{ route('home-show') }}">
		<button class="btn btn-primary">Enter E-commerce Web App</button>
	</a>
@endsection
