@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('flash::message')

                <div class="card">
                    <div class="card-header">My Basket</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (Auth::user()->getBasket()->isEmpty())
                                 <div class="row">
                                <div class="container">
                                    <h5>
                                        <small class="text-muted">Basket empty. There's a pair of sunglasses out there for everyone. Just a reminder...</small>
                                    </h5>
                                </div>
                            </div>
                        @else
                            @foreach($productArray as $p) 
                                <div class="row">
                                    <div class="col-md-3">
                                        IMAGE
                                    </div>

                                    <div class="col-md-3">
                                        {{ $p->name }}
                                    </div>

                                    <div class="col-md-3">
                                        @if($p->sale_price != null)
                                            <p class="text-danger">
                                                <strike>£{{ $p->price }}</strike>
                                            </p>

                                            £{{ $p->sale_price }}
                                        @else
                                            £{{ $p->getPrice() }}.00
                                        @endif
                                    </div>

                                    <div class="col-md-3">
                                        <form method="POST" action="basket/{{ $p->id }}">
                                            @csrf

                                            <input name="_method" type="hidden" value="DELETE">

                                            <button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure?')">Remove</button>
                                        </form>
                                    </div>
                                </div>

                                @if(!$loop->last)
                                    <hr>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-right" style="width: 18rem;">
                    <h5 class="card-header">Total</h5>

                    <div class="card-body">
                            @if($productArray == null)
                                <p class="card-text">-</p>
                                <hr>
                            @else
                                <form method="GET" action="{{ Auth::user()->experiment == 'second' ? route('home-second') : route('home-show') }}">
                                @csrf

                                    <input class="input" type="hidden" name="user_id" value="{{ Auth::id() }}">

                                    <p>£{{ $orderTotal }}.00</p>
                                    <hr>

                                    <input class="input" type="hidden" name="user_id" value="{{ Auth::id() }}">

                                    <button type="submit" class="btn btn-block btn-{{ Auth::user()->getBasket()->isEmpty() ? 'secondary' : 'primary' }}" {{ Auth::user()->getBasket()->isEmpty() ? 'disabled' : '' }}>Proceed to checkout</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
