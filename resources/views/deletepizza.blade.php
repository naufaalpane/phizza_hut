@extends('layouts.app')

@section('content')
    <div class="container shadow p-4 rounded my-5">
        <div class="row">
            <div class="col-lg-4">
                <img class="img img-fluid img-thumbnail rounded" src="{{ asset("img/$pizza->image") }}" alt="">
            </div>
            <div class="col-lg-8">
                <h1 class="mb-2"><strong>{{ $pizza->name }}</strong></h1>
                <h4 class="my-4">{{ $pizza->description }}</h4>
                <h5 class="my-4">Rp. {{ $pizza->price }}</h5>

                <a href="/deletepizzas/{{ $pizza->id }}" class="btn btn-danger mt-4">
                    {{ __('Delete Pizza') }}
                </a>
            </div>
        </div>
    </div>
@endsection
