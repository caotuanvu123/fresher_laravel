<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // get product
        // select * from product

        // get tat ca du lieu trong table
        // ham nay nam trong eloquent
        // select * from product;
        $products = Product::all();

//        return view('product.master', ['products' => $products]);
        return view('products.master', compact('products'));
    }
}
