@extends('Layouts.layout')

@section('title')
  ICE | Usuarios
@endsection

@section('pag_title')
  Ver Usuarios
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Usuarios</a></li>
  <li class="active">Ver Usuarios</li>
@endsection

@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <strong class="card-title">Usuarios</strong>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <th>Nombre de Usuario</th>
              <th>Password</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <td>{{$user->NOMBRE}}</td>
                  <td>{{$user->PASSW}}</td>
                  <td>Edit</td>
                  <td>Delete</td>
                </tr>
              @endforeach
            </tbody
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
