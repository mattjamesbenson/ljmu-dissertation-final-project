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

	                <th>
	                    <td>{{$product->name}} 
	    					@if(\Request::is('index'))
		                    	({{ ucfirst($product->category) }})
	                    	@endif
	                    </td>  

	                    @if($product->sale_price != null)
	                    	<td class="table-success">
	                    		<strike>£{{ $product->price }}</strike>
	                    		£{{ $product->sale_price }}
	                    	</td>
	                    @else
	                    	<td>£{{ $product->price }}</td>  
	                    @endif
	                </th>
	            </tr>
	        </div>
	        @endforeach
	    </tbody>
	</table>
@endsection