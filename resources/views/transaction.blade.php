@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="accordion">
            <?php $count = 0; ?>
            @foreach ($transactions as $trans)
                <?php $count++; ?>
                @if ($count % 2 == 0)
                    <div class="card">
                        <a href="/transactiondetail/{{ $trans->id }}">
                            <div class="card-header">
                                <p>Transaction at {{ $trans->date }}</p>
                            </div>
                        </a>
                    </div>
                @else
                    <div class="card">
                        <a href="/transactiondetail/{{ $trans->id }}">
                            <div class="card-header bg-danger text-white">
                                <p>Transaction at {{ $trans->date }}</p>
                            </div>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    @endsection
