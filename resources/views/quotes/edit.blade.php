@extends('layouts.app')

@section('content')
<div class=container>
    <h1 class="mb-3"> Editar una Cita </h1>
    <form method="post" action="{{ route('quotes.update',[$quote -> id]) }}">
        @csrf
        @method('PUT')
        @include('quotes.fields')
        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
    </form>
</div>
@endsection