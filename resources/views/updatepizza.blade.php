@extends('layouts.app')

@section('content')
    <div class="container shadow p-4 rounded my-3">
        <form action="/updatepizzas/{{ $pizza->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-4">
                    <img class="img img-fluid img-thumbnail rounded" src="{{ asset("img/$pizza->image") }}" alt="">
                </div>
                <div class="col-lg-8">
                    <h1 class="mb-4"><strong>Edit Pizza Details</strong></h1>
    
                    <div class="form-group row">
                        <label for="pizza name" style="font-size: 1.3rem"
                            class="col-md-4 col-form-label">{{ __('Pizza Name:') }}</label>
    
                        <div class="col-md-8">
                            <input id="pizzaname" type="text" class="form-control @error('pizzaname') is-invalid @enderror"
                                name="pizzaname" required autocomplete="pizzaname" autofocus>
                            @error('pizzaname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="pizza price" style="font-size: 1.3rem"
                            class="col-md-4 col-form-label">{{ __('Pizza Price:') }}</label>
    
                        <div class="col-md-8">
                            <input id="pizzaprice" type="number" class="form-control @error('pizzaprice') is-invalid @enderror"
                                name="pizzaprice" required autocomplete="pizzaprice" autofocus>
                            @error('pizzaprice')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="pizza description" style="font-size: 1.3rem"
                            class="col-md-4 col-form-label">{{ __('Pizza Description:') }}</label>
    
                        <div class="col-md-8">
                            <input id="pizzadescription" type="text"
                                class="form-control @error('pizzadescription') is-invalid @enderror" name="pizzadescription"
                                required autocomplete="pizzadescription" autofocus>
                            @error('pizzadescription')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="pizza image" style="font-size: 1.3rem"
                            class="col-md-4 col-form-label">{{ __('Pizza Image:') }}</label>
    
                        <div class="col-md-8">
                            <input id="pizzaimage" type="file"
                                class="form-control-file @error('pizzaimage') is-invalid @enderror" name="pizzaimage" required
                                autocomplete="pizzaimage" autofocus>
                            @error('pizzaimage')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-group row mb-0">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update Pizza') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
