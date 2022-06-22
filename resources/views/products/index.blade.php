@extends('layouts.app')

@section('content')
  <h1 class="mt-3">Lista de Productos</h1>

  <div class="card mb-3">
    <div class="card-head">
      <div class="p-3">
        Sistema de gestion de productos.
        <a class="btn btn-md btn-success float-right" href="{{ route('productos.create') }}">Agregar producto</a>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Codigo de barra</th>
            <th scope="col">Costo</th>
            <th scope="col">Precio</th>
            <th scope="col">Stock</th>
            <th scope="col">Operaciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
            <tr>
              <th scope="row">{{ $product->id }}</th>
              <td>{{ $product->name }}</td>
              <td>{{ $product->barcode }}</td>
              <td>{{ $product->cost }}</td>
              <td>{{ $product->price }}</td>
              <td>{{ $product->stock }}</td>
              <td>
                <a class="btn btn-warning btn-sm" href="#">Ver</a>
                <a class="btn btn-primary btn-sm" href="{{ route('productos.edit', $product->id) }}">Editar</a>

                <form class="d-inline " action="{{ route('productos.destroy', $product->id) }}" method="POST">
                  @csrf @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                </form>

              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection