<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PizzaController extends Controller
{
    public function viewAddPizza()
    {
        return view('addpizza');
    }

    public function viewUpdatePizza($pizzaID)
    {
        $pizza = Pizza::where('id',$pizzaID)->first();

        return view('updatepizza')->with('pizza',$pizza);
    }

    public function viewDeletePizza($pizzaID)
    {
        $pizza = Pizza::where('id',$pizzaID)->first();

        return view('deletepizza')->with('pizza',$pizza);
    }

    public function addPizza(Request $request)
    {
        $request->validate([
            'pizzaname' => 'required|max:20',
            'pizzadescription' => 'required|min:20',
            'pizzaprice' => 'required|numeric|min:10000',
            'pizzaimage' => 'required|mimes:jpg,jpeg,png'
        ]);

        $image = $request->file('pizzaimage');
        $image->move('img/', $request->pizzaimage->getClientOriginalName());

        DB::table('pizzas')->insert([
            'name' => $request->pizzaname,
            'price' => $request->pizzaprice,
            'description' => $request->pizzadescription,
            'image' => $request->pizzaimage->getClientOriginalName()
        ]);

        return redirect('/');
    }

    public function deletePizza($pizzaID)
    {
        DB::table('carts')->where('PizzaID', $pizzaID)->delete();
        DB::table('pizzas')->where('id', $pizzaID)->delete();

        return redirect('/');
    }

    public function updatePizza(Request $request, $pizzaID)
    {
        $request->validate([
            'pizzaname' => 'required|max:20',
            'pizzadescription' => 'required|min:20',
            'pizzaprice' => 'required|numeric|min:10000',
            'pizzaimage' => 'required|mimes:jpg,jpeg,png'
        ]);

        $image = $request->file('pizzaimage');
        $image->move('img/', $request->pizzaimage->getClientOriginalName());

        DB::table('pizzas')->where('id', $pizzaID)->update([
            'name' => $request->pizzaname,
            'price' => $request->pizzaprice,
            'description' => $request->pizzadescription,
            'image' => $request->pizzaimage->getClientOriginalName()
        ]);

        return redirect('/');
    }
}
