@extends('home')

@section('content')
	<div class="container">
		<h1>{{ $product->name }}</h1>
	</div>

{{-- 	<h1 class="font-weight-light">{{$category}}</h1>

	 <table class="table">
	    <tbody>
	        @foreach($products as $product)  
	            <tr class="text-center">
	                <th>IMAGE</th>

	                <th>
	                    <td>{{$product->name}} ({{ucfirst($product->category)}})</td>  
	                    @if($product->sale_price != null)
	                    	<td class="table-success">
	                    		<strike>£{{$product->price}}</strike>
	                    		£{{$product->sale_price}}
	                    	</td>
	                    @else
	                    	<td>£{{$product->price}}</td>  
	                    @endif
	                </th>
	            </tr>
	        </div>
	        @endforeach
	    </tbody>
	</table> --}}
@endsection