@extends('layouts.app')

@section('content')
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
                                        £{{ $p->price }}
                                    @endif
                                </div>

                                <div class="col-md-3">
                                    <form method="" action="">
                                        @csrf
                                    </form>
                                </div>
                            </div>

                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Total</div>

                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
