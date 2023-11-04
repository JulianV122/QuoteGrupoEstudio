@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Perfil de {{ $user->name }}</h1>
    <table class="table">
            <th scope="row">Nombre</th>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <th scope="row">Email</th>
            <td>{{$user->email}}</td>
        </tr>
        <tr>
            <th scope="row">Fecha creacion de usuario</th>
            <td>{{$user->created_at->diffForHumans()}}</td>
        </tr>
        <tr>
            <th scope="row">Fecha Actualización de usuario</th>
            <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>
        <tr>
            <th scope="row"> Cantidad de citas </th>
            <td> {{$user->quotes->count()}} </td>
        </tr>
    </table>
</div>
@endsection