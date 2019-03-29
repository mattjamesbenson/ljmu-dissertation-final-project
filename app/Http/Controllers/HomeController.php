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
        $products = Product::orderBy('category', 'desc')->where('recommended', true)->paginate(5);

        if(Auth::user()) {
            Auth::user()->experiment = 'second';
            Auth::user()->save();

            $experimentResults = TrackingTime::where('user_id', Auth::id())
                ->where('experiment', 'second')
                ->get();
                
            if ($experimentResults->count() == 0) {
                flash('Performance for "Experiment 1" is now being recorded.')->success();

                TrackingTime::create([
                    'user_id' => Auth::id(),
                    'page_from' => 'home_page',
                    'page_to' => null,
                    'timestamp_1' => Carbon::now(),
                    'timestamp_2' => null,
                    'experiment' => 'second',
                ]);

                return view('experiment-2.home-content-2', compact('products'));
            } 

            if ($experimentResults->where('page_to', null)->count() == 1) {
                $e =$experimentResults->first();
                $e->user_id = Auth::id();
                $e->timestamp_2 = Carbon::now();
                $e->page_to = 'order_decided';
                $e->update();

                Auth::logout();
                Basket::truncate();

                flash('Performance successfully recorded. Your actions are no longer being tracked.')->success();

                return view('experiment-end');
            }

            return view('experiment-2.home-content-2', compact('products'));
        }
    }
}