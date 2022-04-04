@extends('layouts.app')

@section('content')
  <h1 class="mt-3">Lista de Usuarios</h1>

  <div class="card mb-3">
    <div class="card-head">
      <div class="p-3">
        Sistema de gestion de usuarios.
        <a class="btn btn-md btn-success float-right" href="{{ route('usuarios.create') }}">Agregar usuario</a>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Fecha de creacion</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <th scope="row">{{ $user->id }}</th>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->created_at }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
