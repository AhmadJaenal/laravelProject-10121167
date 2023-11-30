<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transactions;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    public function createTransaction(Request $request)
    {
        // Mengambil data user dari session
        $userData = session('userData');

        if ($userData) {
            try {
                $transaction = Transactions::create([
                    'id_customer' => $userData->id,
                    'id_product' => $request->input('id_product'),
                    'total_price' => $request->input('total_price'),
                    'fullname' => $userData->name,
                    'address' => $userData->address,
                    'state' => $userData->state,
                    'phone' => $userData->phone,
                    'notes' => $request->input('notes'),
                ]);

                return redirect()->route('viewThankYouPage');
            } catch (QueryException $e) {
                return redirect('register');
            }
        } else {
            return redirect('login')->with('error', 'Anda harus login untuk melakukan transaksi.');
        }
    }
}
