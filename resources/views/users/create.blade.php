@extends('layouts.app')

@section('content')
  <h3 class="mt-3">Crear nuevo usuario.</h3>

  <form action="{{ route('usuarios.store') }}" method="POST">

    @csrf

    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
      {!! $errors->first('name', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ old("email") }}">
      {!! $errors->first('email', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password">
      {!! $errors->first('password', '<small class="text-danger"> :message </small>') !!}
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection