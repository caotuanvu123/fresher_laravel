<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productModel;

    public function __construct()
    {
        // laravel
        $this->productModel = Product::class;
        //php
        $this->productModel = new Product();
    }

    public function index()
    {
        $title = 'file index cua product';

//        $this->productModel->all();

        return view('products.master', ['title' => $title]);
    }
}
