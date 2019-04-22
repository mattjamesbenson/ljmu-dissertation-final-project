@extends('home')

@section('content')        
    <h3 class="font-weight-light text-primary"><b>Top Picks</b></h1>

    <table class="table responsive">
        @foreach($topPicks as $product) 
            <tbody>
                <tr class="text-center">
                    <th>
                        <div class="link">
                            <th>
                                <img src="{{ $product->src }}"  height="200" width="400" alt="Image of {{ $product->name }}"/>
                            </th>
                        </div>
                    </th>

                    <th>
                        <td>{{ $product->name }}</td>  

                        <td>{{ ucfirst($product->category) }}</td>  

                        <td>£{{ $product->price }}</td>  

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

                        <td>
                            <form method="POST" action="{{ !Auth::user() ? route('login') : route('basket.store') }}">
                            @csrf

                                <input class="input" type="hidden" name="product_id" value="{{ $product->id }}">
                                <input class="input" type="hidden" name="user_id" value="{{ Auth::id() }}">

                                <button type="submit" class="btn btn-block btn-primary">Add to Basket</button>
                            </form>                         

                            <br>

                            <form method="POST" action="{{ !Auth::user() ? route('login') : route('basket.store') }}">
                            @csrf

                                <input class="input" type="hidden" name="product_id" value="{{ $product->id }}">
                                <input class="input" type="hidden" name="user_id" value="{{ Auth::id() }}">
                                <input class="input" type="hidden" name="one_click" value="true">

                                <button type="submit" class="btn btn-block btn-success">One Click Buy</button>
                            </form>                         
                        </td>  
                    </th>
                </tr>
            </tbody>

            <tbody>
               <tr>
                    <th>
                        <td colspan="12">
                            Description: {{ $product->description }}
                        </td>
                    </th>
                </tr>
            </tbody>
        @endforeach
    </table>

    <div id="newReleases"></div>

    <br>
    <hr>

    <h3 class="font-weight-light text-success"><b>New Releases</b></h1>

    <table class="table responsive">
        @foreach($new as $product) 

            <tbody>
                <tr class="text-center">
                    <th>
                        <div class="link">
                            <th>
                                <img src="{{ $product->src }}"  height="200" width="400" alt="Image of {{ $product->name }}"/>
                            </th>
                        </div>
                    </th>

                    <th>
                        <td>{{ $product->name }}</td>  

                        <td>{{ ucfirst($product->category) }}</td>  

                        <td>£{{ $product->price }}</td>  

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

                        <td>
                            <form method="POST" action="{{ !Auth::user() ? route('login') : route('basket.store') }}">
                            @csrf

                                <input class="input" type="hidden" name="product_id" value="{{ $product->id }}">
                                <input class="input" type="hidden" name="user_id" value="{{ Auth::id() }}">

                                <button type="submit" class="btn btn-block btn-primary">Add to Basket</button>
                            </form>  

                             <br>

                            <form method="POST" action="{{ !Auth::user() ? route('login') : route('basket.store') }}">
                            @csrf

                                <input class="input" type="hidden" name="product_id" value="{{ $product->id }}">
                                <input class="input" type="hidden" name="user_id" value="{{ Auth::id() }}">
                                <input class="input" type="hidden" name="one_click" value="true">

                                <button type="submit" class="btn btn-block btn-success">One Click Buy</button>
                            </form>                                   
                        </td>  
                    </th>
                </tr>
            </tbody>

            <tbody>
               <tr>
                    <th>
                        <td colspan="12">
                            Description: {{ $product->description }}
                        </td>
                    </th>
                </tr>
            </tbody>
        @endforeach
    </table>

    <div id="mens"></div>

    <br>
    <hr>

    <h3 class="font-weight-light"><b>Men's Sunglasses</b></h1>

    <table class="table responsive">
        @foreach($mens as $product) 

            <tbody>
                <tr class="text-center">
                    <th>
                        <div class="link">
                            <th>
                                <img src="{{ $product->src }}"  height="200" width="400" alt="Image of {{ $product->name }}"/>
                            </th>
                        </div>
                    </th>

                    <th>
                        <td>{{ $product->name }}</td>  

                        <td>{{ ucfirst($product->category) }}</td>  

                        <td>£{{ $product->price }}</td>  

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

                        <td>
                            <form method="POST" action="{{ !Auth::user() ? route('login') : route('basket.store') }}">
                            @csrf

                                <input class="input" type="hidden" name="product_id" value="{{ $product->id }}">
                                <input class="input" type="hidden" name="user_id" value="{{ Auth::id() }}">

                                <button type="submit" class="btn btn-block btn-primary">Add to Basket</button>
                            </form>                         

                            <br>

                            <form method="POST" action="{{ !Auth::user() ? route('login') : route('basket.store') }}">
                            @csrf

                                <input class="input" type="hidden" name="product_id" value="{{ $product->id }}">
                                <input class="input" type="hidden" name="user_id" value="{{ Auth::id() }}">
                                <input class="input" type="hidden" name="one_click" value="true">

                                <button type="submit" class="btn btn-block btn-success">One Click Buy</button>
                            </form>            
                        </td>  
                    </th>
                </tr>
            </tbody>

            <tbody>
               <tr>
                    <th>
                        <td colspan="12">
                            Description: {{ $product->description }}
                        </td>
                    </th>
                </tr>
            </tbody>
        @endforeach
    </table>

    <div id="womens"></div>

    <br>
    <hr>

    <h3 class="font-weight-light"><b>Women's Sunglasses</b></h1>

    <table class="table responsive">
        @foreach($womens as $product) 

            <tbody>
                <tr class="text-center">
                    <th>
                        <div class="link">
                            <th>
                                <img src="{{ $product->src }}"  height="200" width="400" alt="Image of {{ $product->name }}"/>
                            </th>
                        </div>
                    </th>

                    <th>
                        <td>{{ $product->name }}</td>  

                        <td>{{ ucfirst($product->category) }}</td>  

                        <td>£{{ $product->price }}</td>  

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

                        <td>
                            <form method="POST" action="{{ !Auth::user() ? route('login') : route('basket.store') }}">
                            @csrf

                                <input class="input" type="hidden" name="product_id" value="{{ $product->id }}">
                                <input class="input" type="hidden" name="user_id" value="{{ Auth::id() }}">

                                <button type="submit" class="btn btn-block btn-primary">Add to Basket</button>
                            </form>    

                            <br>

                            <form method="POST" action="{{ !Auth::user() ? route('login') : route('basket.store') }}">
                            @csrf

                                <input class="input" type="hidden" name="product_id" value="{{ $product->id }}">
                                <input class="input" type="hidden" name="user_id" value="{{ Auth::id() }}">
                                <input class="input" type="hidden" name="one_click" value="true">

                                <button type="submit" class="btn btn-block btn-success">One Click Buy</button>
                            </form>                                 
                        </td>  
                    </th>
                </tr>
            </tbody>

            <tbody>
               <tr>
                    <th>
                        <td colspan="12">
                            Description: {{ $product->description }}
                        </td>
                    </th>
                </tr>
            </tbody>
        @endforeach
    </table>

    <div id="childrens"></div>

    <br>
    <hr>

    <h3 class="font-weight-light"><b>Children's Sunglasses</b></h1>

    <table class="table resposive">
        @foreach($childrens as $product) 

            <tbody>
                <tr class="text-center">
                    <th>
                        <div class="link">
                            <th>
                                <img src="{{ $product->src }}"  height="200" width="400" alt="Image of {{ $product->name }}"/>
                            </th>
                        </div>
                    </th>

                    <th>
                        <td>{{ $product->name }}</td>  

                        <td>{{ ucfirst($product->category) }}</td>  

                        <td>£{{ $product->price }}</td>  

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

                        <td>
                            <form method="POST" action="{{ !Auth::user() ? route('login') : route('basket.store') }}">
                            @csrf

                                <input class="input" type="hidden" name="product_id" value="{{ $product->id }}">
                                <input class="input" type="hidden" name="user_id" value="{{ Auth::id() }}">

                                <button type="submit" class="btn btn-block btn-primary">Add to Basket</button>
                            </form>       

                            <br>

                            <form method="POST" action="{{ !Auth::user() ? route('login') : route('basket.store') }}">
                            @csrf

                                <input class="input" type="hidden" name="product_id" value="{{ $product->id }}">
                                <input class="input" type="hidden" name="user_id" value="{{ Auth::id() }}">
                                <input class="input" type="hidden" name="one_click" value="true">

                                <button type="submit" class="btn btn-block btn-success">One Click Buy</button>
                            </form>            
                        </td>  
                    </th>
                </tr>
            </tbody>

            <tbody>
               <tr>
                    <th>
                        <td colspan="12">
                            Description: {{ $product->description }}
                        </td>
                    </th>
                </tr>
            </tbody>
        @endforeach
    </table>

    <div id="sale"></div>

    <br>
    <hr>

    <h3 class="font-weight-light text-danger"><b>Sale</b></h1>

    <table class="table responsive">
        @foreach($sale as $product) 
            <tbody>
                <tr class="text-center">
                    <th>
                        <div class="link">
                            <th>
                                <img src="{{ $product->src }}"  height="200" width="400" alt="Image of {{ $product->name }}"/>
                            </th>
                        </div>
                    </th>

                    <th id="{{ $product->category}}">
                        <td>{{ $product->name }}</td>  

                        <td>{{ ucfirst($product->category) }}</td>  

                        <td>£{{ $product->price }}</td>  

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

                        <td>
                            <form method="POST" action="{{ !Auth::user() ? route('login') : route('basket.store') }}">
                            @csrf

                                <input class="input" type="hidden" name="product_id" value="{{ $product->id }}">
                                <input class="input" type="hidden" name="user_id" value="{{ Auth::id() }}">

                                <button type="submit" class="btn btn-block btn-primary">Add to Basket</button>
                            </form>          

                            <br>

                            <form method="POST" action="{{ !Auth::user() ? route('login') : route('basket.store') }}">
                            @csrf

                                <input class="input" type="hidden" name="product_id" value="{{ $product->id }}">
                                <input class="input" type="hidden" name="user_id" value="{{ Auth::id() }}">
                                <input class="input" type="hidden" name="one_click" value="true">

                                <button type="submit" class="btn btn-block btn-success">One Click Buy</button>
                            </form>                           
                        </td>  
                    </th>
                </tr>
            </tbody>

            <tbody>
               <tr>
                    <th>
                        <td colspan="12">
                            Description: {{ $product->description }}
                        </td>
                    </th>
                </tr>
            </tbody>
        @endforeach
    </table>

    <div class="container">
        <div class="card fixed-bottom">
            <div class="card-body">
                <div class="row">
                        <div class="col-md-2 text-center text-primary" style="padding-right:20px; border-right: 1px solid #ccc;">
                            <a href="#topPicks" style="color: inherit; text-decoration: inherit;">
                                <h3>
                                    Top Picks
                                </h3>
                            </a>
                        </div>
                    </a>

                    <div class="col-md-2 text-center text-success" style="padding-right:20px; border-right: 1px solid #ccc;">
                        <a href="#newReleases" style="color: inherit; text-decoration: inherit;">
                            <h3>
                                New Releases
                            </h3>
                        </a>
                    </div>

                    <div class="col-md-2 text-center" style="padding-right:20px; border-right: 1px solid #ccc;">
                        <a href="#mens" style="color: inherit; text-decoration: inherit;">
                            <h3>
                                Men's
                            </h3>
                        </a>
                    </div>

                    <div class="col-md-2 text-center" style="padding-right:20px; border-right: 1px solid #ccc;">
                        <a href="#womens" style="color: inherit; text-decoration: inherit;">
                            <h3>
                                Women's
                            </h3>
                        </a>
                    </div>

                    <div class="col-md-2 text-center" style="padding-right:20px; border-right: 1px solid #ccc;">
                        <a href="#childrens" style="color: inherit; text-decoration: inherit;">
                            <h3>
                                Children's
                            </h3>
                        </a>
                    </div>

                    <div class="col-md-2 text-center text-danger">
                        <a href="#sale" style="color: inherit; text-decoration: inherit;">
                            <h3>
                                Sale
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection