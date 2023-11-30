<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;


class ProductController extends Controller
{
    public function fetchData()
    {
        $products = Product::all();

        return view('interface.shoppage', ['products' => $products]);
    }
}
