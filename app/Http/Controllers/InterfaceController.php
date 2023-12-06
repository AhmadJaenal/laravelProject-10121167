<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transactions;
use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function viewLandingPage()
    {
        return view('interface.landingpage');
    }

    public function viewAboutPage()
    {
        return view('interface.about');
    }

    public function viewServicePage()
    {
        return view('interface.servicepage');
    }

    public function viewBlogPage()
    {
        return view('interface.blogpage');
    }

    public function viewContactPage()
    {
        return view('interface.contact');
    }

    public function viewCheckoutPage($id)
    {
        $product = Product::find($id);
        return view('interface.checkout', compact('product'));
    }

    public function viewCartPage($id_customer)
    {
        $userData = auth()->user();
        $transactions = Transactions::where('id_customer', $id_customer)->get();
        $products = [];
        foreach ($transactions as $transaction) {
            $productId = $transaction->id_product;
            $product = Product::find($productId);
            if ($product) {
                $products[] = $product;
            }
        }

        return view('interface.cartpage', compact('transactions', 'userData', 'products'));
    }

    public function viewEditTransaction(Request $request)
    {
        $id_tr = $request->query('id_tr');
        $id_product = $request->query('id_product');

        $transaction = Transactions::find($id_tr);
        $product = Product::find($id_product);

        return view('interface.editpage', compact('transaction', 'product'));
    }



    public function viewThankYouPage()
    {
        return view('interface.thankyou');
    }
}
