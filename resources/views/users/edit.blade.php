@extends('layouts.app')

@section('content')
  <h3 class="mt-3">Actualizar usuario.</h3>

  <form action="{{ route('usuarios.update', $user->id) }}" method="POST">

    @csrf @method('PATCH')

    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
      {!! $errors->first('name', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ old("email", $user->email) }}">
      {!! $errors->first('email', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password">
      {!! $errors->first('password', '<small class="text-danger"> :message </small>') !!}
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
@endsection