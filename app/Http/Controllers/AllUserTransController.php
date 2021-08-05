<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllUserTransController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        return view('viewallusertrans')->with('transactions',$transactions);
    }
}
