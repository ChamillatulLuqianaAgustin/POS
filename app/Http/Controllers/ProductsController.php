<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        return view('products.products');
    }

    public function beverage() {
        return view('products.beverage');
    }

    public function health() {
        return view('products.health');
    }

    public function care() {
        return view('products.care');
    }

    public function kid() {
        return view('products.kid');
    }
}
