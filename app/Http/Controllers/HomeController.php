<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Basket;
use App\TrackingTime;
use Auth;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        return view('experiment-1.start-page');
    }

    public function show()
    {
        $products = Product::orderBy('category', 'desc')->where('recommended', true)->paginate(5);

        if(Auth::user()) {
            Auth::user()->experiment = 'first';
            Auth::user()->save();

            $experimentResults = TrackingTime::where('user_id', Auth::id())
                ->where('experiment', 'first')
                ->get();
            
            if ($experimentResults->count() == 0) {
                flash('Performance for "Experiment 1" is now being recorded.')->success();

                TrackingTime::create([
                    'user_id' => Auth::id(),
                    'page_from' => 'home_page',
                    'page_to' => null,
                    'timestamp_1' => Carbon::now(),
                    'timestamp_2' => null,
                    'experiment' => 'first',
                ]);

                return view('experiment-1.home-content', compact('products'));
            } 

            if ($experimentResults->where('page_to', null)->count() == 1) {
                $e =$experimentResults->first();
                $e->user_id = Auth::id();
                $e->timestamp_2 = Carbon::now();
                $e->page_to = 'order_decided';
                $e->update();

                Auth::logout();
                Basket::truncate();

                flash('Performance successfully recorded. Your actions are no longer being tracked. Please log in again and click the button labelled "Log in for Experiment 2".')->success();
            }
        }

        return view('experiment-1.home-content', compact('products'));
    }

    public function index2()
    {
        return view('experiment-2.second-turn');
    }

    public function second()
    {
        if(Auth::user()) {
            $products = Product::all();

            $topPicks = $products->where('recommended', true)->all();
            $new = $products->where('new_product', true)->all();
            $mens = $products->where('category', 'mens')->all();
            $womens = $products->where('category', 'womens')->all();
            $childrens = $products->where('category', 'childrens')->all();
            $sale = $products->where('sale_price', true)->all();

            Auth::user()->experiment = 'second';
            Auth::user()->save();

            $experimentResults = TrackingTime::where('user_id', Auth::id())
                ->where('experiment', 'second')
                ->where('page_to', null)
                ->get();
                
            if ($experimentResults->count() == 0) {
                flash('Performance for "Experiment 2" is now being recorded.')->success();

                TrackingTime::create([
                    'user_id' => Auth::id(),
                    'page_from' => 'home_page',
                    'page_to' => null,
                    'timestamp_1' => Carbon::now(),
                    'timestamp_2' => null,
                    'experiment' => 'second',
                ]);

                return view('experiment-2.home-content-2', compact('topPicks', 'new', 'mens', 'womens', 'childrens', 'sale'));
            } else {
                return view('experiment-2.home-content-2', compact('topPicks', 'new', 'mens', 'womens', 'childrens', 'sale'));
            }
        }
    }
}