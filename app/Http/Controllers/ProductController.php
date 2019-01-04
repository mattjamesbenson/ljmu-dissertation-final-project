<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function newReleases()
    {
        $products = Product::where('new_product', true)->get();

        $category = 'New Releases';

        return view('products.index', compact('products', 'category'));
    }

    public function mens()
    {
        $products = Product::where('category', 'mens')->get();

        $category = 'Mens';

        return view('products.index', compact('products', 'category'));
    }

    public function womens()
    {
        $products = Product::where('category', 'womens')->get();

        $category = 'Womens';

        return view('products.index', compact('products', 'category'));
    }

    public function children()
    {
        $products = Product::where('category', 'children')->get();

        $category = 'Children';

        return view('products.index', compact('products', 'category'));
    }

    public function sale()
    {
        $products = Product::whereNotNull('sale_price')->get();

        $category = 'Sale';

        return view('products.sale', compact('products', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ADD PRODUCT TO BASKET
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //SHOW PRODUCT DETAILS
    }
}
