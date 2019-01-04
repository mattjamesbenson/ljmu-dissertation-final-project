@extends('home')

@section('content')
	<h1 class="font-weight-light">{{$category}}</h1>
	<h2> SALEEEEE </h2>
	 <table class="table">
	    <tbody>
	        @foreach($products as $product)  
	            <tr>
	                <th>IMAGE</th>

	                <th>
	                    <td>{{$product->name}}</td>  
	                    <td>£{{$product->price}}</td>  
	                    <td>{{ucfirst($product->category)}}</td>  
	                </th>
	            </tr>
	        </div>
	        @endforeach
	    </tbody>
	</table>
@endsection