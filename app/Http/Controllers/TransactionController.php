<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transactions;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    public function createTransaction(Request $request, $id)
    {
        $userData = auth()->user();
        $product = Product::find($id);
        $amount = $product->price;
        try {
            $transaction = Transactions::create([
                'id_customer' => $userData->id,
                'id_product' => $product->id,
                'email' => $userData->email,
                'amount' => $amount,
                'fullname' => $request->name,
                'is_paid' => 0,
                'address' => $request->address,
                'state' => $request->state,
                'phone' => $request->phone,
                'notes' => $request->notes,
            ]);

            return redirect()->route('viewThankYouPage');
        } catch (QueryException $e) {
            dd($e->getMessage());
        }
    }

    // public function historyTransaction(Request $request, $id)
    // {
    //     $userData = auth()->user();
    //     $product = Product::find($id);
    //     $transaction = Transactions::find($userData->id);
    //     $amount = $product->price;
    //     dd($userData, $transaction);

    //     // if ($product) {
    //     //     return view('interface.cartpage', ['product' => $product]);
    //     // } else {
    //     //     return redirect()->route('product.index')->with('error', 'Produk tidak ditemukan.');
    //     // }
    // }
}
