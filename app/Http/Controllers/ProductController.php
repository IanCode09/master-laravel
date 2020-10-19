<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        dd($products);
        return view('products.index');
    }

    public function create() {
        return 'A form to create a product';
    }
    public function store() {

    }
    public function show($product) {
        $product = Product::findOrFail($product);
        dd($product);
        return view('products.show');
    }
    public function edit($product) {
        return "Showing the form to edit the product {$product}";
    }
    public function update($product) {

    }
    public function destroy($product) {

    }
}
