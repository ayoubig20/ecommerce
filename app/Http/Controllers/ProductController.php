<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function list(){
        $products=Product::all();
        return view('main_admin.products.list',compact('products'));
    }
    public function showprod(){
        return view('main_admin.products.add');
    }
}
