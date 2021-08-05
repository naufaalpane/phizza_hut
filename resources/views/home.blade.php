@extends('layouts.app')

@section('content')
    <div class="container">
        @guest
            <h1 class="display-4">Our Freshly made pizza!</h1>
            <h3 class="text-muted">order it now</h3>
            <form class="form-row my-4" action="/search" method="GET">
                <label class="col-form-label mr-1" for="">Search Pizza: </label>
                <input type="search" name="search" class="form-control w-25 mx-1">
                <button type="submit" class="btn btn-primary ml-1">Search</button>
            </form>
            <div class="card-deck">
                @foreach ($pizzas as $pizza)
                    <div class="col-lg-4 my-2">
                        <div class="card cardHover">
                            <a href="/detail/{{ $pizza->id }}"><img src="{{ asset("img/$pizza->image") }}"
                                    class="card-img-top p-4" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{ $pizza->name }}</strong></h5>
                                <p class="card-text text-muted">Rp. {{ $pizza->price }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else

            @if (Auth::user()->role == 'Member')
                <h1 class="display-4">Our Freshly made pizza!</h1>
                <h3 class="text-muted">order it now</h3>
                <form class="form-row my-4" action="/search" method="GET">
                    <label class="col-form-label mr-1" for="">Search Pizza: </label>
                    <input type="search" name="search" class="form-control w-25 mx-1">
                    <button type="submit" class="btn btn-primary ml-1">Search</button>
                </form>
                <div class="card-deck">
                    @foreach ($pizzas as $pizza)
                        <div class="col-lg-4 my-2">
                            <div class="card cardHover">
                                <a href="/detail/{{ $pizza->id }}"><img src="{{ asset("img/$pizza->image") }}"
                                        class="card-img-top p-4" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title"><strong>{{ $pizza->name }}</strong></h5>
                                    <p class="card-text text-muted">Rp. {{ $pizza->price }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            @if (Auth::user()->role == 'Admin')
                <h1 class="display-4">Our Freshly made pizza!</h1>
                <h3 class="text-muted">order it now</h3>
                <form class="form-row my-4" action="/search" method="GET">
                    <label class="col-form-label mr-1" for="">Search Pizza: </label>
                    <input type="search" name="search" class="form-control w-25 mx-1">
                    <button type="submit" class="btn btn-primary ml-1">Search</button>
                </form>
                <a class="btn btn-dark my-2" href="/addpizza">Add Pizza</a>
                <div class="card-deck">
                    @foreach ($pizzas as $pizza)
                        <div class="col-lg-4 my-2">
                            <div class="card cardHover">
                                <a href="/detail/{{ $pizza->id }}"><img src="{{ asset("img/$pizza->image") }}"
                                        class="card-img-top p-4" alt="..."></a>
                                <div class="card-body">
                                    <h5 class="card-title"><strong>{{ $pizza->name }}</strong></h5>
                                    <p class="card-text text-muted">Rp. {{ $pizza->price }}</p>
                                </div>
                                <div class="card-footer btn-group text-center">
                                    <a href="/updatepizza/{{ $pizza->id }}" class="btn btn-primary">Update Pizza</a>
                                    <a href="/deletepizza/{{ $pizza->id }}" class="btn btn-danger">Delete Pizza</a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        @endguest

        {{ $pizzas->links() }}

    </div>
@endsection
