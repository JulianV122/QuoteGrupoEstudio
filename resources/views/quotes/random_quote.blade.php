@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cita al azar</h1>

    <figure>
    <blockquote class="blockquote">
        <p>{{$quote->message}} -{{$quote->author}}</p>
    </blockquote>
    <figcaption class="blockquote-footer">
    Esta cita fue publicada por:<cite title="Source Title"> {{$quote->user->name}}</cite>
    </figcaption>
    </figure>


</div>
@endsection