@extends('home')

@section('content')
	<h1>Experiment 1</h1>

	<hr>

	<p>
		The idea behind this experiment is to find out which of two designs provides the best e-commerce shopping experience and also which design benefits the user performance. Your performance will be monitored in the background using a timing mechanism. Performance monitoring will begin ONLY after you have made an account and are logged in. You will be notified when monitoring stops and starts.
	</p>

	<p>
		Remember, this is not a race - just complete the task as you would normally. You will be asked some questions at the end about your experience with each design.
	</p>

	<p>
		After completing the experiment you are about to begin, you will be automatically logged back out once recording has stopped. You will then have to log back in and complete "Experiment 2". "Experiment 2" will differ in design and will have an effect on your performance (either positively or negatively).
	</p>

	<hr>

	<h2><b>Instructions:<b><h2>

	<h3>
		<li>Find a pair of <text class="text-primary">MEN'S</text> sunglasses in the colour <b>BLACK</b> and checkout with that one item. The sunglasses <b>MUST</b> include a free <text class="text-danger">SUNGLASSES CLEANING KIT</text>. The pair of sunglasses with those specific requirements is inside the app somewhere. Try not to checkout any other sunglasses.</li>
	</h3>

	<hr>

	<div class="col-md-12 text-center">
		<a href="{{ route('home-show') }}">
			<button class="btn btn-primary">Begin Experiment 1</button>
		</a>
	</div>
@endsection
