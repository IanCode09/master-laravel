<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        // dd($products);
        return view('products.index')->with([
            'products' => $products
        ]);
    }

    public function create() {
        return view('products.create');
    }

    public function store() {
        $product = Product::create(request()->all());
        return $product;
    }

    public function show($product) {
        $product = Product::findOrFail($product);
        // dd($product);
        return view('products.show')->with([
            'product' => $product
        ]);
    }

    public function edit($product) {
        return "Showing the form to edit the product {$product}";
    }

    public function update($product) {

    }

    public function destroy($product) {

    }
}
