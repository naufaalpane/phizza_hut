@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="column">
            @foreach ($carts as $cart)
                <?php $pizzaimage = $cart->pizza->image; ?>
                <div class="items shadow p-4 rounded my-5 row">
                    <div class="col-lg-4">
                        <img class="img img-fluid img-thumbnail rounded" src="{{ asset("img/$pizzaimage") }}" alt="">
                    </div>
                    <div class="col-lg-8">
                        <h1 class="mb-2"><strong>{{ $cart->pizza->name }}</strong></h1>
                        <h5 class="my-4">Rp. {{ $cart->pizza->price }}</h5>
                        <h5 class="my-4">Quantity: {{ $cart->quantity }}</h5>

                        <form class="form-row" action="/updateqty/{{ $cart->id }}" method="POST">
                            @csrf
                            <label class="col-form-label mr-5" for="">Edit Quantity:</label>
                            <input class="form-control w-25" type="number" name="quantity" value="1">
                            
                            <div class="col-lg-8">
                                <button type="submit" class="btn btn-primary mt-4" style="width: 8.5rem">Update
                                    Quantity</button>

                            </div>
                        </form>
                        <a href="/deleteqty/{{ $cart->id }}" class="btn btn-danger mt-2">
                            {{ __('Delete From Cart') }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        @if ($carts->isEmpty() == false)
        <div class="justify-content-center text-center">
            <a href="/checkout" type="submit" class="btn btn-dark mt-3 float-center">Checkout</a>
        </div>
        @else
            <div class="items shadow p-4 text-center bg-danger rounded" style="margin-top: 10rem; color: white">
                <h2>Cart Is Empty!</h2>
                <h3>Please Add Pizza First.</h3>
            </div>
        @endif
    </div>
@endsection
