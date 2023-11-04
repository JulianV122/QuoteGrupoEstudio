@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ver Cita</h1>
    <table class="table">
        <tr>
            <th scope="row">ID</th>
            <td>{{$quote->id}}</td>
        <tr>
            <th scope="row">Autor</th>
            <td>{{$quote->author}}</td>
        </tr>
        <tr>
            <th scope="row">Año publicacion</th>
            <td>{{$quote->published_year}}</td>
        </tr>
        <tr>
            <th scope="row">Propietario</th>
            <td>{{$quote->user->name}}</td>
        <tr>
            <th scope="row">Mensaje</th>
            <td>{{$quote->message}}</td>
        </tr>
        <tr>
            <th scope="row">Fecha creacion</th>
            <td>{{$quote->created_at}}</td>
        </tr>
        <tr>
            <th scope="row">Fecha Actualizacion</th>
            <td>{{$quote->updated_at}}</td>
        </tr>
    </table>
    <div class="btn-group " role="group" aria-label="Basic example" >
    <a href="{{ route('quotes.edit',[$quote -> id]) }}" class="btn btn-warning">Editar</a>
    <span>&nbsp;</span>
    <form action=" {{ route('quotes.destroy',[$quote->id]) }}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" class="btn btn-danger" value="Borrar">
    </form>
    </div>
</div>
@endsection