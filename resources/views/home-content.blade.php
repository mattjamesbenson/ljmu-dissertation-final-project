@extends('home')

@section('content')
    <div class="container">
        <h1 class="font-weight-light">Top Picks</h1>

        <table class="table">
            <tbody>
                @foreach($products as $product)  
                    <tr>
                        <th><a href="{{ route('top-picks-show', $product) }}">IMAGE</a></th>

                        <th>
                            <td>{{ $product->name }}</td>  
                            <td>£{{ $product->price }}</td>  
                            <td>{{ ucfirst($product->category) }}</td>  
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection