@extends('layouts.app')

@section('content')
    <h1 class="mt-3">Crear nuevo usuario.</h1>

    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="name" value="{{ old('name') }}">

{{--            @if( $errors->first('name') )--}}
{{--                <small class="text-danger">{{ $errors->first('name') }}</small>--}}
{{--            @endif--}}

            {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}

        </div>

        <div class="form-group">
            <label for="email">Correo electronico</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">

{{--            @if( $errors->first('email') )--}}
{{--                <small class="text-danger">{{ $errors->first('email') }}</small>--}}
{{--            @endif--}}

            {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password">

{{--            @if( $errors->first('password') )--}}
{{--                <small class="text-danger">{{ $errors->first('password') }}</small>--}}
{{--            @endif--}}

            {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
