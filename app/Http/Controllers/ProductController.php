<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return 'Hello This is product';
    }

    public function create() {
        return 'A form to create a product';
    }
    public function store() {

    }
    public function show($product) {
        return "This is product {$product}";
    }
    public function edit($product) {
        return "Showing the form to edit the product {$product}";
    }
    public function update($product) {

    }
    public function destroy($product) {

    }
}
