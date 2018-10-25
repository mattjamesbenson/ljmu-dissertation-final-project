<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recommendedProducts = Product::where('recommended', true)->get();

        return view('home', compact('recommendedProducts'));
    }

    public function getBasket()
    {
        return view('basket');
    }
}
