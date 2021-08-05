@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="column">
            @foreach ($transactiondetails as $transD)
            <div class="items shadow p-4 rounded my-5 row">
                <div class="row">
                    <div class="col-lg-4">
                        <?php $image = $transD->pizza->image; ?>
                        <img class="img img-fluid img-thumbnail rounded" src="{{ asset("img/$image") }}" alt="">
                    </div>
                    <div class="col-lg-8">
                        <h1 class="mb-2"><strong>{{ $transD->pizza->name }}</strong></h1>
                        <h5 class="my-4">Rp. {{ $transD->pizza->price }}</h5>
                        <h5 class="my-4">Quantity: {{ $transD->quantity }}</h5>
                        <h5 class="my-4">Total Price: Rp. {{ $transD->quantity * $transD->pizza->price}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endsection
