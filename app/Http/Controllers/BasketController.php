<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user()) {
            $userBasket = \Auth::user()->getBasket();

            $productArray = array();

            $orderTotal = 0;

            foreach($userBasket as $u) 
            {
                $productId = $u->product_id;
                $productArray[$u->id] = $u->getProduct();
                $orderTotal += $u->getPrice();  
            }          

            return view('basket', compact('productArray', 'orderTotal'));
        } else { 
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'user_id' => 'required',
        ]);

        $basket = Basket::create([
            'product_id' =>  $request->product_id,
            'user_id' => $request->user_id,
            'order_placed' => false,
        ]);

        flash('Added to basket!')->success();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(Basket $basket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basket $basket)
    {
        $basket->delete();

        flash('Item removed from basket.')->success();

        return redirect()->back();
    }
}
