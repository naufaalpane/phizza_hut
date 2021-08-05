@extends('layouts.app')

@section('content')
    <div class="container shadow p-4 rounded my-5">
        @guest
            <div class="row">
                <div class="col-lg-4">
                    <img class="img img-fluid img-thumbnail rounded" src="{{ asset("img/$pizza->image") }}" alt="">
                </div>
                <div class="col-lg-8">
                    <h1 class="mb-2"><strong>{{ $pizza->name }}</strong></h1>
                    <h4 class="my-4">{{ $pizza->description }}</h4>
                    <h5 class="my-4">Rp. {{ $pizza->price }}</h5>
                </div>
            </div>

        @else

            @if (Auth::user()->role == 'Member')
                <div class="row">
                    <div class="col-lg-4">
                        <img class="img img-fluid img-thumbnail rounded" src="{{ asset("img/$pizza->image") }}" alt="">
                    </div>
                    <div class="col-lg-8">
                        <h1 class="mb-2"><strong>{{ $pizza->name }}</strong></h1>
                        <h4 class="my-4">{{ $pizza->description }}</h4>
                        <h5 class="my-4">Rp. {{ $pizza->price }}</h5>
                        <form class="form-row" action="/addtocart/{{ $pizza->id }}" method="POST">
                            @csrf
                            <label class="col-form-label" for="">Quantity:</label>
                            <input class="form-control w-25" type="number" name="quantity" value="1">
                            <button type="submit" class="btn btn-primary ml-2">Add Pizza</button>
                        </form>
                    </div>
                </div>
            @endif

            @if (Auth::user()->role == 'Admin')
                <div class="row">
                    <div class="col-lg-4">
                        <img class="img img-fluid img-thumbnail rounded" src="{{ asset("img/$pizza->image") }}" alt="">
                    </div>
                    <div class="col-lg-8">
                        <h1 class="mb-2"><strong>{{ $pizza->name }}</strong></h1>
                        <h4 class="my-4">{{ $pizza->description }}</h4>
                        <h5 class="my-4">Rp. {{ $pizza->price }}</h5>
                    </div>
                </div>
            @endif

        @endguest
    </div>
@endsection
