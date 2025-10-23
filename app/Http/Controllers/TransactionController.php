<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['customer', 'book.genre'])->get();
        return response()->json($transactions, 200);
    }

    public function show(Transaction $transaction)
    {
        if ($transaction->customer_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }
        $transaction->load(['customer', 'book.genre']);
        return response()->json($transaction, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'total_amount' => 'required|numeric|min:0'
        ]);

        $transaction = Transaction::create([
            'order_number' => 'ORD-' . time(),
            'customer_id' => Auth::id(),
            'book_id' => $request->book_id,
            'total_amount' => $request->total_amount
        ]);

        $transaction->load(['customer', 'book.genre']);
        return response()->json($transaction, 201);
    }

    public function update(Request $request, Transaction $transaction)
    {
        if ($transaction->customer_id !== Auth::id()) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $request->validate([
            'total_amount' => 'numeric|min:0'
        ]);

        $transaction->update($request->only('total_amount'));
        $transaction->load(['customer', 'book.genre']);
        return response()->json($transaction, 200);
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return response()->json(['message' => 'Transaction deleted'], 200);
    }
}
