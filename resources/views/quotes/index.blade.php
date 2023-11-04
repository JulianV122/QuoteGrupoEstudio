@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Todas las citas</h1>

        @foreach($quotes as $quote)
            <div class="card shadow p-3 mb-3 bg-white rounded " style="width: auto;" >
                <div class="card-body">
                    <p class="card-text">{{ $quote->message }}</p>
                    <h5 class="card-title">{{$quote->author}}</h5>
                    <a href="{{ route('profile.info',[$quote->user]) }}" class="card-link">Ver perfil de {{$quote->user->name}}</a>
                </div>
            </div>
        @endforeach

        {{ $quotes->links() }}
    </div>
@endsection