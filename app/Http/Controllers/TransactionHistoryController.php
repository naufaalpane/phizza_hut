<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Transactiondetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionHistoryController extends Controller
{
    public function index()
    {
        $userID = Auth::user()->id;
        $transactions = Transaction::where('UserID', $userID)->get();

        return view('transaction')->with('transactions',$transactions);
    }

    public function viewTransDetail($transID)
    {
        $transDetail = Transactiondetail::where('TransactionID', $transID)->get();

        return view('detailtransaction')->with('transactiondetails', $transDetail);
    }
}
