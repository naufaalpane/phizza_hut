<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pizzas = Pizza::paginate(6);

        return view('home')->with('pizzas',$pizzas);
    }

    public function detail($pizzaID)
    {
        $pizza = Pizza::where('id',$pizzaID)->first();

        return view('detail')->with('pizza',$pizza);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $pizzas = DB::table('pizzas')->where('name', 'like', '%'.$search.'%')->paginate(3);

        return view('home', ['pizzas' => $pizzas]);
    }
}
