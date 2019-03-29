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
		<li>Find a pair of <text class="text-primary">BLUE</text> Men's sunglasses and add them to the basket.</li>
		<li>Find a pair of <text class="text-danger">RED</text> Women's sunglasses in the SALE and add them to the basket.</li>
		<li>Proceed to checkout.</li>
	</h3>

	<div class="col-md-12 text-center">
		<a href="{{ route('home-show') }}">
			<button class="btn btn-primary">Let's get started!</button>
		</a>
	</div>
@endsection
