@extends('home')

@section('content')
    <h1 class="font-weight-light">Top Picks</h1>

    <table class="table">
        <tbody>
            @foreach($products as $product)  
                <tr class="text-center">
                    <th>
                        <div class="link">
                            <a href="{{ route('top-picks-show', $product) }}">IMAGE</a></th>
                        </div>
                    </th>

                    <th>
                        <td>{{ $product->name }}</td>  

                        <td>£{{ $product->price }}</td>  

                        <td>{{ ucfirst($product->category) }}</td>  

                        <td>
                            @if($product->stock_amount < 10 && $product->stock_amount > 0)
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
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection