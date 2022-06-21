@extends('layouts.app')

@section('content')
  <h3 class="mt-3">Actualizar categoria.</h3>

  <form action="{{ route('categorias.update', $category->id) }}" method="POST">

    @csrf @method('PATCH')

    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}">
      {!! $errors->first('name', '<small class="text-danger"> :message </small>') !!}
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
@endsection