<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        return view('products.index');
    }

    public function show($id) {
        $product = "";
        return view('products.show', compact('product'));
    }
}
