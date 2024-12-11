<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $transactions = Transaction::all();
        $transactionAmountSum = Transaction::query()->sum('amount');
        $transactionCount = Transaction::query()->count();
        return view('transactions/index',compact('transactions','transactionAmountSum','transactionCount'));

    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {

        return view('transactions/create');

    }
    public function store(TransactionRequest $request): \Illuminate\Http\RedirectResponse
    {
        Transaction::query()->create($request->validated());
        return redirect()->route('transactions.index');
    }
    public function edit(Transaction $transaction): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('transactions/edit',compact('transaction'));
    }
    public function update(TransactionRequest $request,Transaction $transaction): \Illuminate\Http\RedirectResponse
    {
        $transaction->update($request->validated());
        return redirect()->route('transactions.index');

    }
    public function destroy(Transaction $transaction): \Illuminate\Http\RedirectResponse
    {
        $transaction->delete();
        return redirect()->route('transactions.index');
    }
}
