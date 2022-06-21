@extends('layouts.app')

@section('content')
  <h3 class="mt-3">Crear nueva categoria.</h3>

  <form action="{{ route('categorias.store') }}" method="POST">

    @csrf

    {{-- input hidden --}}

    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
      {!! $errors->first('name', '<small class="text-danger"> :message </small>') !!}
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection