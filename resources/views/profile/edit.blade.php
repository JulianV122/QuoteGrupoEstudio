@extends ('layouts.app')

@section('content')
    <div class="container">
        <h1>Perfil de usuario</h1>
        <form method="post" action="{{ route('profile.update') }} ">
            @csrf
            <div class="form-group">
                <label for="email">Dirección de correo</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $user->email}}" >
            </div>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $user->name}}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
        </form>
    </div>

@endsection