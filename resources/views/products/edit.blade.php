@extends('layouts.app')

@section('content')
  <h3 class="mt-3">Actualizar producto.</h3>

  <form action="{{ route('productos.update', $product->id) }}" method="POST">

    @csrf @method('PATCH')

    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}">
      {!! $errors->first('name', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="barcode">Codigo de barra</label>
      <input type="text" class="form-control" id="barcode" name="barcode" value="{{ old('barcode', $product->barcode) }}">
      {!! $errors->first('barcode', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="cost">Costo</label>
      <input type="number" class="form-control" id="cost" name="cost" value="{{ old('cost', $product->cost) }}">
      {!! $errors->first('cost', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="price">Precio</label>
      <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}">
      {!! $errors->first('price', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="stock">Stock</label>
      <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock', $product->stock) }}">
      {!! $errors->first('stock', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="alert">Stock minimo</label>
      <input type="number" class="form-control" id="alert" name="alert" value="{{ old('alert', $product->alert) }}">
      {!! $errors->first('alert', '<small class="text-danger"> :message </small>') !!}
    </div>

    <div class="form-group">
      <label for="category">Categoria</label>
      <select class="form-control" name="category_id" id="category">
        <option value="">Seleccione una opcion</option>
        @foreach ($categories as $category)
          <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
        @endforeach

      </select>
      {{-- <input type="number" class="form-control" id="alert" name="alert" value="{{ old('alert') }}"> --}}
      {!! $errors->first('alert', '<small class="text-danger"> :message </small>') !!}
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
@endsection