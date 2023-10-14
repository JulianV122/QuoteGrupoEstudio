@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Mis citas</h1>
@if(count($quotes)>0)
<table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Autor</th>
        <th scope="col">Año publicacion</th>
        <th scope="col">Mensaje</th>
        <th scope="col">Fecha creacion</th>
        <th scope="col">Fecha Actualizacion</th>
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
                <td>
                    {{$quote->created_at}}
                </td>
                <td>
                    {{$quote->updated_at}}
                </td>
                <td>
                    ...
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