@extends('home')

@section('content')
	<h1 class="font-weight-light">{{ $category }}</h1>

	 <table class="table">
	    <tbody>
	        @foreach($products as $product)  
	            <tr class="text-center">
	            	<th>
		            	@if($category == 'New Releases')
		                	<a href="{{ route('new-releases-show', $product) }}">IMAGE</a>
	                	@elseif($category == 'Mens')
	                		<a href="{{ route('mens-show', $product) }}">IMAGE</a>
	                	@elseif($category == 'Womens')
							<a href="{{ route('womens-show', $product) }}">IMAGE</a>
	                	@elseif($category == 'Children')
	                		<a href="{{ route('children-show', $product) }}">IMAGE</a>
	                	@elseif($category == 'Sale')
							<a href="{{ route('sale-show', $product) }}">IMAGE</a>
	                	@endif
                	</th>

	                <td>
	                    <td>{{ $product->name }} 
	    					@if(\Request::is('index'))
		                    	({{ ucfirst($product->category) }})
	                    	@endif
	                    </td>  

	                    @if($product->sale_price != null)
	                    	<td>
	                    		<text class="text-danger">
	                    			<strike>£{{ $product->price }}</strike>
	                    		</text>

	                    		£{{ $product->sale_price }}
	                    	</td>
	                    @else
	                    	<td>£{{ $product->price }}</td>  
	                    @endif
	                </td>

			 		<td>
			            @if($product->stock_amount < 5 && $product->stock_amount > 0)
			                <p class="text-danger">
			                    Only {{ $product->stock_amount }} left!
			                </p>
			            @elseif ($product->stock_amount == 0)
			                <p class="text-danger">
			                    Out of stock
			                </div>
			            @else
			                <p class="text-success">
			                    In stock - FREE DELIVERY!
			                </p>
			            @endif
			        </td>
	            </tr>
	        @endforeach
	    </tbody>
	</table>

	<div class="container">
		<div class="float-right">
			{{ $products->links() }}
		</div>
	</div>
@endsection