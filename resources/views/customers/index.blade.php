@extends('layouts.app')

@section('content')
  <h1 class="mt-3">Lista de Clientes</h1>

  <div class="card mb-3">
    <div class="card-head">
      <div class="p-3">
        Sistema de gestion de clientes.
        <a class="btn btn-md btn-success float-right" href="{{ route('clientes.create') }}">Agregar cliente</a>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre(s) y Apellido(s)</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Direccion</th>
            <th scope="col">Fecha de creacion</th>
            <th scope="col">Operaciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($customers as $customer)
            <tr>
              <th scope="row">{{ $customer->id }}</th>
              <td>{{ $customer->name }}</td>
              <td>{{ $customer->phone }}</td>
              <td>{{ $customer->email }}</td>
              <td>{{ $customer->address }}</td>
              <td>{{ $customer->created_at }}</td>
              <td>
                <a class="btn btn-warning btn-sm" href="#">Ver</a>
                <a class="btn btn-primary btn-sm" href="{{ route('clientes.edit', $customer->id) }}">Editar</a>

                <form class="d-inline " action="{{ route('clientes.destroy', $customer->id) }}" method="POST">
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