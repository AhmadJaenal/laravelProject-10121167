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

    public function addNewProduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string',
            'price' => 'required|numeric',
            'brand' => 'required|string',
            'url_image' => 'required|url',
        ]);

        Product::create($request->all());

        return redirect()->route('viewShopPage')->with('success', 'Product created successfully');
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('viewShopPage')->with('success', 'Product deleted successfully');
    }
}
