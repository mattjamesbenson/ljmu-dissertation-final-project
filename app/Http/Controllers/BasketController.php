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
         $experimentResults = TrackingTime::where('user_id', \Auth::id())
            ->where('experiment', 'second')
            ->get();        

        if($request->one_click == true) {
            if ($experimentResults->where('user_id', \Auth::id())->where('experiment', 'second')->where('page_to', null)->count() == 1) {
                $e =$experimentResults->first();
                $e->user_id = \Auth::id();
                $e->timestamp_2 = Carbon::now();
                $e->page_to = 'order_decided';
                $e->update();

                \Auth::logout();
                Basket::truncate();

                flash('Performance successfully recorded. Your actions are no longer being tracked.')->success();

                return view('experiment-end');
            }
        }

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
