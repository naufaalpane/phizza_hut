@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-deck">
            @foreach ($users as $user)
                <div class="col-lg-4 my-4">
                    <div class="card cardHover">
                        <div class="bg-danger card-header text-white">
                            <h5 class="card-title"><strong>User ID: {{ $user->id }}</strong></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Usernmame: {{ $user->name }}</p>
                            <p class="card-text">Email: {{ $user->email }}</p>
                            <p class="card-text">Address: {{ $user->address }}</p>
                            <p class="card-text">Phone Number: {{ $user->phonenumber }}</p>
                            <p class="card-text">Gender: {{ $user->gender }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
