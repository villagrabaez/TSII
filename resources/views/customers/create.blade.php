@extends('layouts.app')

@section('content')
  <h3 class="mt-3">Crear nuevo cliente.</h3>

  <form action="{{ route('clientes.store') }}" method="POST">

    @csrf

    {{-- input hidden --}}

    <div class="form-group">
      <label for="name">Nombre(s) y Apellido(s)</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
      {!! $errors->first('name', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="phone">Telefono</label>
      <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
      {!! $errors->first('phone', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
      {!! $errors->first('email', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="address">Direccion</label>
      <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
      {!! $errors->first('address', '<small class="text-danger"> :message </small>') !!}
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection