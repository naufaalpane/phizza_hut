<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Transaction;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID = Auth::user()->id;
        $carts = Cart::where('UserID', $userID)->get();

        return view('cart')->with('carts',$carts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateQty(Request $request, $cartID)
    {
        DB::table('carts')->where('id', $cartID)->update([
            'quantity' => $request->quantity
        ]);

        return redirect('/cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request, $pizzaID)
    {
        $userID = Auth::user(); 

        DB::table('carts')->insert([
            'UserID' => $userID->id,
            'PizzaID' => $pizzaID,
            'quantity' => $request->quantity,
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteQty($cartID)
    {
        DB::table('carts')->where('id', $cartID)->delete();

        return redirect('/cart');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        $userID = Auth::user();
        $date = Carbon::now('asia/jakarta');

        DB::table('transactions')->insert([
            'UserID' => $userID->id,
            'date' => $date
        ]);

        $transaction = Transaction::where('UserID', $userID->id)->get()->last();
        $carts = Cart::where('UserID', $userID->id)->get();

        foreach($carts as $cart)
        {
            DB::table('transactiondetails')->insert([
                'TransactionID' => $transaction->id,
                'PizzaID' => $cart->PizzaID,
                'quantity' => $cart->quantity
            ]);
        }

        DB::table('carts')->where('UserID', $userID->id)->delete();

        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}