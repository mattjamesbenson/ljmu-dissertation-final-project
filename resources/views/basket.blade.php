@extends('layouts.app')

@section('content')
    <div class="container">
        @include('flash::message')
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">My Basket</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if($productArray == null) 
                            <div class="row">
                                <div class="container">
                                    <h5>
                                        <small class="text-muted">Basket empty. There's a pair of sunglasses out there for everyone. Just a reminder...</small>
                                    </h5>
                                </div>
                            </div>
                        @else
                            @foreach($productArray as $key => $val) 
                                <div class="row">
                                    <div class="col-md-3">
                                        IMAGE
                                    </div>

                                    <div class="col-md-3">
                                        {{ $val->name }}
                                    </div>

                                    <div class="col-md-3">
                                        @if($val->sale_price != null)
                                            <p class="text-danger">
                                                <strike>£{{ $val->price }}</strike>
                                            </p>

                                            £{{ $val->sale_price }}
                                        @else
                                            £{{ $val->price }}
                                        @endif
                                    </div>

                                    <div class="col-md-3">
                                        <form method="POST" action="basket/{{ $key }}">
                                            @csrf

                                            <input name="_method" type="hidden" value="DELETE">

                                            <button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure?')">Remove</button>
                                        </form>
                                    </div>
                                </div>

                                <hr>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="card text-right" style="width: 18rem;">
                <h5 class="card-header">Total</h5>

                <div class="card-body">
                        @if($productArray == null)
                            <p class="card-text">-</p>
                        @else
                            <p>£{{ $orderTotal }}.00</p>
                            <a href="#" class="btn btn-primary">Place Order</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
