@extends('layouts.app')


@section('content')
<div class="container text-center">
    <h1 mb-2>Mis citas</h1>
    <a href="{{ route('quotes.create') }}" class="btn btn-outline-success">Agregar</a>
    @if(count($quotes)>0)
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Autor</th>
                <th scope="col">Año publicacion</th>
                <th scope="col">Mensaje</th>
                <!-- <th scope="col">Fecha creacion</th>
                <th scope="col">Fecha Actualizacion</th> -->
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quotes as $quote)
            <tr>
                <td>
                    {{$quote -> id}}
                </td>
                <td>
                    {{$quote->author}}
                </td>
                <td>
                    {{$quote->published_year}}
                </td>
                <td>
                    {{$quote->message}}
                </td>
                <!-- <td>
                    {{$quote->created_at}}
                </td>
                <td>
                    {{$quote->updated_at}}
                </td> -->
                <td>
                    <a href="{{ route('quotes.show',[$quote -> id]) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('quotes.edit',[$quote -> id]) }}" class="btn btn-warning">Editar</a>
                    <form action=" {{ route('quotes.destroy',[$quote->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$quotes->links()}}
    @else
    <div class="alert alert-warning" role="alert">
        No hay citas en la lista
    </div>
    @endif
</div>
@endsection