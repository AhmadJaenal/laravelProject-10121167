<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transactions;
use App\Models\User;
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
                'is_paid' => 'Checking',
                'detail_address' => $request->detail_address,
                'postal_code' => $request->postal_code,
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
    public function viewDetailTransaction(Request $request)
    {

        $id_tr = $request->query('id_tr');
        $id_product = $request->query('id_product');

        $transaction = Transactions::find($id_tr);
        $product = Product::find($id_product);

        $userData = User::find($transaction->id_customer);

        return view('interface.detailtransaction', compact('transaction', 'product', 'userData'));
    }

    public function transactionChecking($id)
    {
        $transaction = Transactions::findOrFail($id);

        $transaction->update(['is_paid' => 'Checking']);
        return back();
    }

    public function transactionSuccess($id)
    {
        $transaction = Transactions::findOrFail($id);

        $transaction->update(['is_paid' => 'Success']);
        return back();
    }

    public function transactionProcess($id)
    {
        $transaction = Transactions::findOrFail($id);

        $transaction->update(['is_paid' => 'Process']);
        return back();
    }

    public function updateTransaction(Request $request, $id)
    {
        $transaction = Transactions::find($id);

        if (!$transaction) {
            return redirect()->route('viewThankYouPage')->with('error', 'Transaksi tidak ditemukan.');
        }

        $product = Product::find($transaction->id_product);
        $userData = auth()->user();

        try {
            $transaction->update([
                'fullname' => $request->name,
                'detail_address' => $request->detail_address,
                'postal_code' => $request->postal_code,
                'address' => $request->address,
                'state' => $request->state,
                'phone' => $request->phone,
                'notes' => $request->notes,
            ]);

            return redirect()->route('viewThankYouPage')->with('success', 'Transaksi berhasil diperbarui.');
        } catch (QueryException $e) {
            return redirect()->route('viewThankYouPage')->with('error', $e->getMessage());
        }
    }
    public function deleteTransaction($id)
    {
        $transaction = Transactions::findOrFail($id);
        $transaction->delete();

        return back()->with('success', 'Transaction deleted successfully');
    }
}
