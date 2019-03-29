<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\TrackingTime;
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
            $productArray = \Auth::user()->getBasket();

            if($productArray) {
                $orderTotal = 0;

                foreach($productArray as $p) {
                    $orderTotal = $orderTotal + $p->getPrice();
                }

                return view('basket.basket', compact('productArray', 'orderTotal'));
            } else {
                flash('Basket is empty.')->warning();

                return redirect()->back();  
            }
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
        if(\Auth::user()) {
            $request->validate([
                'product_id' => 'required',
                'user_id' => 'required',
            ]);

            $basket = Basket::create([
                'product_id' =>  $request->product_id,
                'user_id' => $request->user_id,
                'order_placed' => false,
            ]);

            $product = $basket->getProduct();
            $product->stock_amount = $product->stock_amount - 1;
            $product->save();

            flash('Added to basket!')->success();

            return redirect()->back();
        } else {
            flash('Please log in to add to basket.')->warning();

            return redirect()->back();  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function orderDetails(User $user)
    // {
    //     $userBasket = $user->getBasket();

    //     $productArray = array();

    //     $orderTotal = 0;

    //     foreach($userBasket as $u) 
    //     {
    //         $productId = $u->product_id;
    //         $productArray[$u->id] = $u->getProduct();
    //         $orderTotal += $u->getPrice();  
    //     }          
    // }

    // *
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
     
    // public function placeOrder(Request $request)
    // {

    // }

}
