@extends('home')

@section('content')
	<div class="container">
		@include('flash::message')
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6" style="padding-right:20px; border-right: 1px solid #ccc;">
				IMAGE
			</div>
			
			<div class="col-md-6">
				<h1>{{ $product->name }} - {{ ucfirst($product->category) }}</h1>
				<h2>£{{ $product->price }}</h1>

				<div class="row">
					<div class="col-md-12">
						@if($product->stock_amount < 10 && $product->stock_amount > 0)
							<div class="alert alert-danger text-center">
								Only {{ $product->stock_amount }} left!
							</div>
						@elseif ($product->stock_amount == 0)
							<div class="alert alert-danger text-center">
								Out of stock
							</div>
						@else
							<div class="alert alert-success text-center">
								In stock - FREE DELIVERY!
							</div>
						@endif
					</div>
				</div>

				@if($product->stock_amount != 0)
					<div class="row">
						<div class="col-md-12">
							<form method="POST" action="{{ route('basket.store') }}">
							@csrf

								<input class="input" type="hidden" name="product_id" value="{{ $product->id }}">

								<input class="input" type="hidden" name="user_id" value="{{ Auth::id() }}">

								@if(Auth::user())
									<button type="submit" class="btn btn-block btn-primary">Add to Basket</button>
								@endif
							</form>
						</div>
					</div>
				@endif

				<hr>

				<h3>Description</h3>

				<p>{{ ucfirst($product->category) }}</p>
			</div>
		</div>
	</div>
@endsection