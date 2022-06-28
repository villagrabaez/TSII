@extends('layouts.app')

@section('content')
  <h3 class="mt-3">Actualizar cliente.</h3>

  <form action="{{ route('clientes.update', $customer->id) }}" method="POST">

    @csrf @method('PATCH')

    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $customer->name) }}">
      {!! $errors->first('name', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="phone">Telefono</label>
      <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $customer->phone) }}">
      {!! $errors->first('phone', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $customer->email) }}">
      {!! $errors->first('email', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="address">Direccion</label>
      <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $customer->address) }}">
      {!! $errors->first('address', '<small class="text-danger"> :message </small>') !!}
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
@endsection