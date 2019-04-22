<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function newReleases()
    {
        $products = Product::where('new_product', true)->paginate(5);

        $category = 'New Releases';

        return view('products.index', compact('products', 'category'));
    }

    public function mens()
    {
        $products = Product::where('category', 'mens')->paginate(5);

        $category = 'Mens';

        return view('products.index', compact('products', 'category'));
    }

    public function womens()
    {
        $products = Product::where('category', 'womens')->paginate(5);

        $category = 'Womens';

        return view('products.index', compact('products', 'category'));
    }

    public function children()
    {
        $products = Product::where('category', 'childrens')->paginate(5);

        $category = 'Childrens';

        return view('products.index', compact('products', 'category'));
    }

    public function sale()
    {
        $products = Product::whereNotNull('sale_price')->paginate(5);

        $category = 'Sale';

        return view('products.index', compact('products', 'category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    { 
        return view('products.show', compact('product'));
    }
}
