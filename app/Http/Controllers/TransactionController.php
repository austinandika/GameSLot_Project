<?php

namespace App\Http\Controllers;

use App\Models\TrTransaction;
use App\Models\TrTransactionDetail;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function checkout(Request $request)
    {
        $checkoutProduct = $request->session()->get('cart');

        if ($checkoutProduct != null) {
            $transaction = new TrTransaction();

            $transaction->date = date('Y-m-d H:i:s');
            $transaction->user_id = auth()->user()->id;
            $transaction->save();

            // get transactionId
            $savedTransactionId = $transaction->id;

            foreach ($checkoutProduct as $product) {
                $transactionDetail = new TrTransactionDetail();
                $transactionDetail->transaction_id = $savedTransactionId;
                $transactionDetail->game_id = (int)$product['id'];
                $transactionDetail->game_title = $product['title'];
                $transactionDetail->game_price = (int)$product['price'];
                $transactionDetail->quantity = $product['quantity'];

                $transactionDetail->save();
                //dd($transactionDetail);
            }

            $request->session()->forget('cart');
            $request->session()->save();
            return redirect()->route('transaction.history');
        }

        return redirect()->route('cart.list');
    }

    public function getTransactionHistory()
    {
        $transactions = TrTransaction::where('user_id', '=', auth()->user()->id)->get();

        return view('transactionHistory', compact('transactions'));
    }

    public function getTransactionHistoryDetail($id)
    {
        $transactions = TrTransaction::where('id', '=', $id)->where('user_id', '=', auth()->user()->id)->first();
        return view('transactionHistDetail', compact('transactions'));
    }
}
