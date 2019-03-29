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
        return view('start-page');
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
                TrackingTime::create([
                    'user_id' => Auth::id(),
                    'page_from' => 'home_page',
                    'page_to' => null,
                    'timestamp_1' => Carbon::now(),
                    'timestamp_2' => null,
                    'experiment' => 'first',
                ]);

                return view('home-content', compact('products'));
            } 

            if ($experimentResults->where('page_to', null)->count() == 1) {
                $e =$experimentResults->first();
                $e->user_id = Auth::id();
                $e->timestamp_2 = Carbon::now();
                $e->page_to = 'order_decided';
                $e->update();

                Auth::logout();
                Basket::truncate();

                flash('Performance successfully recorded. Please log in again and click the button labelled "Log in for Experiment 2".')->success();
            }
        }

        return view('home-content', compact('products'));
    }

    public function index2()
    {
        return view('second-turn');
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
                TrackingTime::create([
                    'user_id' => Auth::id(),
                    'page_from' => 'home_page',
                    'page_to' => null,
                    'timestamp_1' => Carbon::now(),
                    'timestamp_2' => null,
                    'experiment' => 'second',
                ]);

                return view('home-content-2', compact('products'));
            } 

            if ($experimentResults->where('page_to', null)->count() == 1) {
                $e =$experimentResults->first();
                $e->user_id = Auth::id();
                $e->timestamp_2 = Carbon::now();
                $e->page_to = 'order_decided';
                $e->update();

                Auth::logout();
                Basket::truncate();

                return view('experiment-end');
            }

            return view('home-content-2', compact('products'));
        }
    }
}