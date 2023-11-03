@extends('layouts.app')

@section('content')
<div class=container>
    <h1 class="mb-3"> Crear una Cita </h1>
    <form method="post" action="{{ route('quotes.store') }}">
        @csrf
        @include('quotes.fields')
        <button type="submit" class="btn btn-primary mt-3">Crear</button>
    </form>
</div>
@endsection